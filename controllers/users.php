<?php
             session_start();
            //  include_once ('./path.php');
            include_once(ROOT_PATH . "/db.php");
            /*=== EXECUTE FUNCTION ===*/
            function executeQuery($sql, $data)
            {
                global $conn;
                $stmt = $conn->prepare($sql);
                $values = array_values($data);
                $types = str_repeat('s', count($values));
                $stmt->bind_param($types, ...$values);
                $stmt->execute();
                return $stmt;
            }
            /*=== QUERY FUNCTIONS RETURN EXSTING INSTANCE  ===*/
            function selectOne($table, $conditions)
            {
                global  $conn;
                $sql = "SELECT * FROM $table";

                $i = 0;
                foreach ($conditions as $key => $value) {
                    if ($i == 0) {
                        $sql = $sql . " WHERE $key=?";
                    } else {
                        $sql = $sql . " AND $key=?";
                    }
                    $i++;
                }
                $sql = $sql . " LIMIT 1";
                $stmt = executeQuery($sql, $conditions);
                $records = $stmt->get_result()->fetch_assoc();
                return $records;
            }
            //======RETURNS ALL=======
            function selectAll($table, $conditions = [])
            {
                global $conn;
                $sql = "SELECT * FROM $table";
                if (empty($conditions)) {
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                    return $records;
                } else {
                    $i = 0;
                    foreach ($conditions as $key => $value) {
                        if ($i === 0) {
                            $sql = $sql . " WHERE $key=?";
                        } else {
                            $sql = $sql . " AND $key=?";
                        }
                        $i++;
                    }

                    $stmt = executeQuery($sql, $conditions);
                    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                    return $records;
                }
            }
           

        $errors = [];
        $username="";
        $email="";
        $password="";
        $all_admins=selectAll('users',['admin'=>1]);
        $all_users=selectAll('users',['admin'=>0]);
        //==============REGISTER FUNCTION============
        if (isset($_POST['register-btn'])) {
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
                unset($_POST['register-btn']);
                $_POST['admin']=0;
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $admin=$_POST['admin'];
                $sql = "INSERT INTO users (admin, username, email, password) VALUES (?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('isss', $admin, $username, $email, $password);
                $stmt->execute();
                $_POST['user_id']=$stmt->insert_id;
                //log userin
                $_SESSION['user_id'] = $_POST['user_id'];
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['admin'] = $_POST['admin'];
                //var_dump($_SESSION);
                header('location: index.php');
                exit();

            }else{
                $username=$_POST['username'];
                $email=$_POST['email'];
                $password=$_POST['password'];
            }

        }

            // function loginUser($user)
            // {
            //     $_SESSION['user_id'] = $user['user_id'];
            //     $_SESSION['username'] = $user['username'];
            //     $_SESSION['admin'] = $user['admin'];
            //     if ($_SESSION['admin']) {
            //         header("Location: dashboard.php");
            //     } else {
            //         header("Location: index.php");
            //     }
            //     exit();
            // }

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
                header("Location: " .  '/admin/users/index.php');
                exit();
        }
?>