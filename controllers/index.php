<?php
    
    function generateProfile() {
        $forPath = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
        $path = "views/{$forPath}";
    
        session_start();
        $user = $_SESSION['user'];
        $userArray = unserialize($user);
        var_dump($userArray);
    
        if(empty($userArray)){
            echo "<script>
                        alert('Please Log In...');
                        window.location.href='login.php';
                        </script>"; 
        }

        include $path;
    
        }

        function test() {

            $forPath = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
            $path = "views/{$forPath}";
            // $_POST['selection'] = $selection;
            $selection = $_POST['selection'];
            var_dump($selection);
            include "views/index.php";

        }
    


?>