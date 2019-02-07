<?php


function generateResults () {
    include "models/bets.php";
    include "models/players.php";
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
        // var_dump($dataArr);
    



                $serializedBets = serialize($calc->arr);
                // var_dump($calc->arr);
                // // var_dump($calc->bet);
                // var_dump($calc->array);
                // var_dump($calc->doubleColor);
                // var_dump($newRows);

               
                $insertPlays = "INSERT INTO plays (username, bets, colorjackpot)
                        VALUES ('$dataArr[9]', '$serializedBets', '$calc->doubleColor')";
                        mysqli_query($conn, $insertPlays);

                $insertRecords = "INSERT INTO records (username, bets, colorjackpot)
                        VALUES ('$dataArr[9]', '$serializedBets', '$calc->doubleColor')";
                        mysqli_query($conn, $insertRecords);
            

                    $validateRows = "SELECT * FROM plays";
                    $result = mysqli_query($conn, $validateRows);
                    $rows = mysqli_fetch_all($result);

                    $newCount = count($rows) -5;
                    $newRows = array_slice($rows, $newCount);

                    if(count($rows) % 2 == 0) {
                        $newCount = count($rows) -5;
                        $newRows = array_slice($rows, $newCount);
                    }

                    if(count($rows) % 3 == 0) {
                        $newCount = count($rows) -5;
                        $newRows = array_slice($rows, $newCount);
                    }

                    if(count($rows) % 4 == 0) {
                        $newCount = count($rows) -5;
                        $newRows = array_slice($rows, $newCount);
                    }

                    if(count($rows) % 5 == 0) {
                        $newCount = count($rows) -5;
                        $newRows = array_slice($rows, $newCount);

                  


                        foreach($newRows as $row){

                            var_dump($row);
                            var_dump($calc->number);

                            

                            $rowCount = count($newRows);
                            // var_dump($rowCount);



                            // for($i=0;$i<$rowCount;$i++){
                            // $userIndex = $row[$i][1];
                            $getChips = "SELECT chips FROM players WHERE username = '$row[1]'";
                            $queryChips = mysqli_query($conn, $getChips);
                            // }
                            // var_dump($getChips);
    
                            $accountChips = mysqli_fetch_assoc($queryChips);
                            $accountNumOfChips = intval($accountChips['chips']);

                            $backToBet = unserialize($row[2]);
                            $betAmount = count($backToBet);
                            $numberMatch = in_array($calc->number, $backToBet);
                            // $colorMatch = in_array($calc->doubleColor)
                            
                            $blackCalc = $calc->number % 2 == 1;
                            $doubleBlack = $row[3] == "b2";
                            $redCalc = $calc->number % 2 == 0 ;
                            $doubleRed = $row[3]== "r2";

                            var_dump($calc->doubleColor);

                                 if($numberMatch){
                                    if($redCalc && $doubleRed){
                                        echo 'jackpot ';
                                        $win = 20;
                                        continue;
                                    }
                                    if($blackCalc && $doubleBlack){
                                        echo 'jackpot ';
                                        $win = 20;
                                        continue;
                                    } 
                                    
                                    if(!$blackCalc || !$doubleBlack){
                                        echo 'numMatch ';
                                        $win = 10;
                                        var_dump($calc->number);
                                        continue;
                                    }
                                        continue;
                                    
                                    if(!$redCalc || !$doubleRed){
                                        echo 'numMatch ';
                                        $win = 10;
                                        continue;
                                    }

                                    var_dump($calc->number);
                                    continue;
                                }
                                var_dump($calc->number);


                                 if(!$numberMatch){
                                    var_dump($calc->number);

                                    if($blackCalc && $doubleBlack){
                                        echo 'colormatch';
                                        $win = 5;
                                        continue;
                                    } 
                                    if($redCalc && $doubleRed){
                                        echo 'colorMatch ';
                                        $win = 5;
                                        continue;
                                    }
                                    if(!$blackCalc || !$doubleBlack){
                                        echo 'lose';
                                        $win = 0;
                                        continue;
                                    } 
                                    if(!$redCalc || !$doubleRed){
                                        echo 'lose ';
                                        $win = 0;
                                        continue;
                                    }
  
                                    continue;
                                } 
     

                                $totalChips = $win1 + $win2 - $betAmount + $accountNumOfChips;

                                $addWinnings = "UPDATE players SET chips = '$totalChips' WHERE username = '$row[1]'";
                                mysqli_query($conn, $addWinnings);

                            }

                                $newHand = "DELETE FROM plays";
                                mysqli_query($conn, $newHand);
                        }
                     
                      
                     } 
                
        }
            

?>