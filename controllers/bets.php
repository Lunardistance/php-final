<?php


function generateResults () {
    include "models/bets.php";
    include "models/players.php";
    include "include/mysql.php";

    session_start();
    $userTry = $_SESSION['user'];
    $user = unserialize($userTry);
    var_dump($user);

    $dataArr = explode('"',$userTry);
        for($g = 0; $g < count($dataArr); $g++){
         ${'var'.$g} = $dataArr[$g];
        }

    
    $handQuery = "SELECT * FROM plays";
    $betValidity = mysqli_query($conn, $handQuery);
    $betValidator = mysqli_fetch_all($betValidity);
    $betCount = count($calc->arr);

    $chipQuery = "SELECT chips FROM players WHERE username = '$dataArr[9]'";
    $queryChips = mysqli_query($conn, $chipQuery);
    $getChips = mysqli_fetch_row($queryChips);
    $chipToInt = intval($getChips[0]);
    var_dump($chipToInt);
    var_dump($getChips);

    if($chipToInt < $betCount) {
        echo "<script>
        alert('You do not have enough chips to play this hand');
        window.location.href='index.php';
        </script>"; 
    }

    foreach($betValidator as $betValidate){
        if($dataArr[9]==$betValidate[1]){
            echo "<script>
            alert('No More Bets! Game in Progress');
            window.location.href='login.php';
            </script>"; 
        }
        if(empty($user)) {
            echo "<script>
            alert('Please Log In...');
            window.location.href='login.php';
            </script>"; 
        }

    }
     
            $serializedBets = serialize($calc->arr);
            
            $insertPlays = "INSERT INTO plays (username, bets, colorjackpot)
                            VALUES ('$dataArr[9]', '$serializedBets', '$calc->doubleColor')";
                            mysqli_query($conn, $insertPlays);
            $insertRecords = "INSERT INTO records (username, bets, colorjackpot)
                            VALUES ('$dataArr[9]', '$serializedBets', '$calc->doubleColor')";
                            mysqli_query($conn, $insertRecords);
            $validateRows = "SELECT * FROM plays";
            $result = mysqli_query($conn, $validateRows);
            $rows = mysqli_fetch_all($result);

            var_dump($calc->number);

            if(count($rows) % 5 == 0) {
                foreach($rows as $row) {
                    $chipQuery = "SELECT chips FROM players WHERE username = '$row[1]'";
                    $queryChips = mysqli_query($conn, $chipQuery);

                    $getChips = mysqli_fetch_assoc($queryChips);
                    $accountNumOfChips = intval($getChips['chips']);
    
                    $backToBet = unserialize($betValidate[2]);
                    $betAmount = count($backToBet);
                    var_dump($row);
                    $numberMatch = in_array($calc->number, $backToBet);
    
                    $doubleBlack = $row[3] == "b2" && $calc->number % 2 == 1;
                    $doubleRed = $row[3]== "r2" && $calc->number % 2 == 0;
                    $greenJackpot = $row[3]== "0" && $calc->number == 0;

                        if($greenJackpot) {
                            echo 'green jackpot';
                            $win = 20;
                        }
                        if(($doubleRed || $doubleBlack) && $numberMatch){
                            echo 'jackpot ';
                            $win = 20;
                        }                       
                        if((!$doubleBlack && !$doubleRed) && $numberMatch){
                            echo 'numMatch ';
                            $win = 10;
                        }                                  
                        if(($doubleRed || $doubleBlack) && !$numberMatch){
                            echo 'colorMatch ';
                            $win = 5;
                        }
                        if((!$doubleRed && !$doubleBlack) && !$numberMatch){
                            echo 'lose ';
                            $win = 0;
                        }

                        $totalChips = $accountNumOfChips + $win - $betAmount;

                        if($totalChips < 0) {
                            $totalChips = 0;
                        }
                        $addWinnings = "UPDATE players SET chips = '$totalChips' WHERE username = '$row[1]'";
                        mysqli_query($conn, $addWinnings);

                    }

                    $newHand = "DELETE FROM plays";
                    mysqli_query($conn, $newHand);

                }

                header("Location: Confirmation.php");

         } 
            

?>