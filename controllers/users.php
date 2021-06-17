<?php
         session_start();   
         include_once("db.php");
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


        $errors = [];
        $username="";
        $email="";
        $password="";
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
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $admin = 0;
                $sql = "INSERT INTO users (admin, username, email, password) VALUES (?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('isss', $admin, $username, $email, $password);
                $stmt->execute();
                
                //log userin
                $_SESSION['id']=$_POST['id'];
                $_SESSION['username']=$_POST['username'];
                $_SESSION['admin']=$_POST['admin'];
                // $_SESSION['message']="Logged in successfully";
                // $_SESSION['type']="success";
                header('location: index.php');
                exit();

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
                    $_SESSION['id'] = $_POST['id'];
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['admin'] = $_POST['admin'];
                    if ($_SESSION['admin']) {
                        header('location: index.php');
                    }else{
                        header('location: index.php'); 
                    }
                    exit();
                }else{
                    array_push($errors,"Account does not exits");
                }
            }
        }
        

?>