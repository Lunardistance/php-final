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

    // var_dump($userData);
    // $date = date("m-d");
    // $age = date_diff(date_create($profile->bday), date_create('now'))->y;
    // $dateMatch = (substr($profile->bday, -5)); 
    
    
    include $path;

    }

    // generateProfile();

    // function generateWithView() {

    // }