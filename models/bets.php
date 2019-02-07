<?php 
include 'include/mysql.php';
// include "players.php";


class Bets {

   

    public function __construct ($arr, $array, $doubleColor) {
        if (!empty($_POST['selection'])) {
            $this->arr = $_POST['selection'];
            $this->array = $_POST['selection'];
            $this->doubleColor= array_pop($this->array);
        }else{
            echo "<script>
                        alert('You must Select at Least 1 Number');
                        window.location.href='index.php';
                        </script>";
            }
            $this->number = rand(0, 36); 
            // $this->colorBlack = array(range(1, 36, 2));
            // $this->colorRed = array(range(0, 36, 2));
   
        }
        
    }


$bet =[];
$number = 1;
$doubleColor = "";
$calc = new Bets($bet, $number, $doubleColor);

