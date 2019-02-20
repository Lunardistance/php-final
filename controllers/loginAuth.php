<?php

function authenticate(){
        include "include/mysql.php";
        include "models/players.php";
        session_start();

        $username = $_POST['username'];
        $pw = $_POST['lpw'];
        if (empty($username) || empty($pw)) {
            echo "<script>
            alert('Looks like you missed an entry...');
            window.location.href='login.php';
            </script>";
        }else{
            $player = new Player($_POST['username'], $_POST['lpw'], $chips);
            $validate = $conn->query("SELECT * FROM players WHERE username = '$player->username'");
            if($validate){
                $user = $validate->fetch_object();
                var_dump($user);
                    if(empty($user)){
                        echo "<script>
                        alert('Wrong User/Password Combination');
                        window.location.href='login.php';
                        </script>"; 
                    }else{
                    $userString = $user->password;
                        if(password_verify($pw, $userString)){
                        echo "correct!";
                        unset($user->password);
                        $_SESSION['user'] = serialize($user);
                        header("Location: profile.php");
                        }else{
                            echo "<script>
                            alert('Wrong User/Password Combination');
                            window.location.href='login.php';
                            </script>";
                        }
                    }
                    
            }
            var_dump($user);
           

            
            //NOW YOU HAVE TO CATCH THE ERROR OF ENTERING A NON-EXISTENT USER.  CONTINUE FROM HERE.
        }
    }


            


    

    