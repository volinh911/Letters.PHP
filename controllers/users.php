<?php
             session_start();
            //  include_once ('./path.php');
            include_once(ROOT_PATH . "/db.php");

            $errors = [];
            $username="";
            $email="";
            $password="";
            $all_admins=selectAll('users',['admin'=>1]);
            $all_users=selectAll('users',['admin'=>0]);
            // $current_user=selectOne('users',['user_id'=>$_SESSION['user_id']]);
            //==============REGISTER FUNCTION============
            if (isset($_POST['register-btn']) || isset($_POST['add-user'])) {
                if (empty($_POST['username'])) {
                    array_push($errors, "Username is required");
                }
                if (empty($_POST['email'])) {
                    array_push($errors, "Email is required");
                }
                if (empty($_POST['password'])) {
                    array_push($errors, "Password is required");
                }
                $exstingEmail=selectOne('users',['email'=>$_POST['email']]);
                $exstingUser=selectOne('users',['username'=>$_POST['username']]);
                if ($exstingEmail) {
                    array_push($errors,'Email already used');
                }
                if($exstingUser){
                    array_push($errors, 'Username already taken');
                }
                if (count($errors) === 0) {
                    if (isset($_POST['register-btn'])) {
                        unset($_POST['register-btn']);
                        $_POST['admin'] = 0;
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                        $admin = $_POST['admin'];
                        $sql = "INSERT INTO users (admin, username, email, password) VALUES (?,?,?,?)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param('isss', $admin, $username, $email, $password);
                        $stmt->execute();
                        $_POST['user_id'] = $stmt->insert_id;
                        //log userin
                        $_SESSION['user_id'] = $_POST['user_id'];
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['admin'] = $_POST['admin'];
                        header('location: index.php');
                        exit();
                    }
                    else if(isset($_POST['add-user'])){
                        unset($_POST['add-user']);
                        $_POST['admin'] = 0;
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                        $admin = $_POST['admin'];
                        $sql = "INSERT INTO users (admin, username, email, password) VALUES (?,?,?,?)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param('isss', $admin, $username, $email, $password);
                        $stmt->execute();
                        $_SESSION['message'] = "Create new user successfully";
                        $_SESSION['type'] = 'success';
                        header('location: /admin/users/index.php');
                        exit();
                    }

                    }else{
                        $username=$_POST['username'];
                        $email=$_POST['email'];
                        $password=$_POST['password'];
                    }

            }
            if (isset($_POST['login-btn'])) {
                if (empty($_POST['username'])) {
                    array_push($errors,"Username is required");
                }
                if (empty($_POST['password'])) {
                    array_push($errors, "Password is required");
                }

                if (count($errors)===0) {
                    $user=selectOne('users',['username'=>$_POST['username']]);

                    if ($user && password_verify($_POST['password'], $user['password'])) {
                        $_SESSION['user_id']=$user['user_id'];
                        $_SESSION['username']=$user['username'];
                        $_SESSION['admin']=$user['admin'];
                        if ($_SESSION['admin']) {
                            
                            header("Location: admin/dashboard.php");
                        }else{
                            header("Location: index.php");
                        }
                    }else{
                        array_push($errors,"Account does not exits");
                    }
                }
            }
            
            if (isset($_GET['delete_id'])) {
                    $user_id=$_GET['delete_id'];
                    $sql="DELETE FROM users WHERE user_id= ?";
                    $stmt=$conn->prepare($sql);
                    $stmt->bind_param('i',$user_id);
                    $stmt->execute();
                    $_SESSION['message'] = "Delete user successfully";
                    $_SESSION['type'] = 'success';
                    header("Location: " .  '/admin/users/index.php');
                    exit();
            }

            if (isset($_POST['edit-user-profile'])) {
                if (empty($_POST['username'])) {
                    array_push($errors, "Username is required");
                }
                if (empty($_POST['email'])) {
                    array_push($errors, "Email is required");
                }
                if (empty($_POST['password'])) {
                    array_push($errors, "Password is required");
                }
                // $exstingEmail = selectOne('users', ['email' => $_POST['email']]);
                // $exstingUser = selectOne('users', ['username' => $_POST['username']]);
                // if ($exstingEmail) {
                //     array_push($errors, 'Email already used');
                // }
                // if ($exstingUser) {
                //     array_push($errors, 'Username already taken');
                // }
                if (!empty($_FILES['image']['name'])) {
                    $image_profile = time() . '_' . $_FILES['image']['name'];
                    $destination = ROOT_PATH . "/images/" . $image_profile;
                    $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                    if ($result) {
                        $_POST['image'] = $image_profile;
                    } else {
                        array_push($errors, "Failed to upload image");
                    }
                }
                if (count($errors)==0) {
                    unset($_POST['edit-user-profile']);
                    $userId=$_SESSION['user_id'];
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $sql= "UPDATE users SET username=?, email=?, password= ?, image_profile=?
                    WHERE user_id= ?";
                    $stmt=$conn->prepare($sql);
                    $stmt->bind_param("ssssi",$username,$email,$password,$image_profile,$userId);
                    $stmt->execute();
                    $_SESSION['message'] = 'Posts updated successfully';
                    $_SESSION['type'] = 'success';
                    header("Location: ./index.php");

                }
            }
    ?>