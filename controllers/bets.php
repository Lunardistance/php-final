<?php


function generateResults () {
    include "models/bets.php";
    include "include/mysql.php";

    session_start();
    $user = $_SESSION['user'];


    if(empty($user)){
        echo "<script>
                    alert('Please Log In...');
                    window.location.href='login.php';
                    </script>"; 
    }else{



        
        $dataArr = explode('"',$user);
        for($g = 0; $g < count($dataArr); $g++){
         ${'var'.$g} = $dataArr[$g];
        }
        var_dump($dataArr[9]);

        
      

        $validate = "SELECT * FROM plays WHERE username = '$dataArr[9]'";
                $result = mysqli_query($conn, $validate);

                $alreadyExists= mysqli_fetch_assoc($result);
                var_dump($result);

                var_dump($alreadyExists);
                if($alreadyExists > 0) {
                        echo "<script>
                        alert('No More Bets!');
                        window.location.href='profile.php';
                        </script>"; 
                }else {
                $serializedBets = serialize($calc->arr);
                var_dump($serializedBets);
                var_dump($dataArr[9]);
                var_dump($calc->doubleColor);
                 $sql = "INSERT INTO plays (username, bets, colorjackpot)
                         VALUES ('$dataArr[9]', '$serializedBets', '$calc->doubleColor')";
                 mysqli_query($conn, $sql);
                 var_dump($conn);
                 var_dump($sql);
             }
             $validateRows = "SELECT * FROM plays";
            $result = mysqli_query($conn, $validateRows);

                $rows = mysqli_fetch_assoc($result);
             
                for($g = 0; $g <50000; $g++) {
                    if ($rows % 5 == 0){
                        $everyFive =   "SELECT TOP 5 bets 
                                        FROM plays 
                                        GROUP BY bets 
                                        ORDER BY max(timestamp) desc";
                        $lastFive = mysqli_query($conn, $validateRows);
                        $records = mysqli_fetch_assoc($lastFive);
                        // var_dump($records);
                    }
                
                }

                        foreach ($calc->colorBlack as $color){
                            foreach ($color as $c=>$colorNumber){
                                // var_dump($colorNumber);
                                if ($colorNumber == $calc->number){
                                    // var_dump($calc->doubleColor);
                                    if($calc->doubleColor == 'b2'){
                                        echo 'YES';
                                    }
                                }
                        }
                    
        
        
        
                 }
                    }
                }                   
    



?>