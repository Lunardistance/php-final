<?php

    function checkAndPlace(){
        include "include/mysql.php";
        include "models/players.php";

        $pw = $_POST['pw'];
        $cpw = $_POST['cpw'];
        if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['pw']) || empty($_POST['cpw'])) {
            echo "<script>
            alert('Looks like you missed an entry...');
            window.location.href='register.php';
            </script>";
    
        }
            
        if($pw === $cpw) {
                $player = new Player($_POST['username'], $_POST['email'], 100);
                $validate = "SELECT * FROM players WHERE username = '$player->username'
                            UNION
                            SELECT * FROM players WHERE email = '$player->email'";
                $result = mysqli_query($conn, $validate);

                $alreadyExists= mysqli_fetch_assoc($result);
                if(!empty($alreadyExists)) {
                $key = array_search($player->username, $alreadyExists);
                $key2 = array_search($player->email, $alreadyExists);
                var_dump($key);
                var_dump($key2);
                 if($key == 'username') {
                 echo "<script>
                 alert('Username Already Exists--Please Try Another...');
                 window.location.href='register.php';
                 </script>"; 
                 }
                 if($key2 == 'email') {
                 echo "<script>
                 alert('Email Already Exists--Please Try Another...');
                 window.location.href='register.php';
                 </script>"; 
                 }
                }
                    if(mysqli_num_rows($result) === 0) {
                    $pwh = password_hash($pw, PASSWORD_BCRYPT);
                    $sql = "INSERT INTO players (username, email, password, chips)
                            VALUES ('$player->username', '$player->email', '$pwh', 100)";
                    mysqli_query($conn, $sql);

                    $validate = $conn->query("SELECT * FROM players WHERE username = '$player->username'");
                    $user = $validate->fetch_object();
                        session_start();
                        unset($user->password);
                        $_SESSION['user'] = serialize($user);
                        echo "<script>
                        alert('Welcome to the Casino :)');
                        window.location.href='profile.php';
                        </script>"; 
                    }
                }else{
                    echo "<script>
                    alert('The passwords do not match...');
                    window.location.href='register.php';
                    </script>"; 
                }
    
        
    }