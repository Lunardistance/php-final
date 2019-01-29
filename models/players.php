<?php 
include 'include/mysql.php';

class Player
{
    public $username;
    public $email;
    public $chips = 0;
   

    public function __construct ($username, $email, $chips) {
        $this->username = $_POST['username'];
        if (isset($_POST['email'])) {
            $this->email = $_POST['email'];
        }
        function validate() { 
            "SELECT chips FROM players WHERE users ='$player->username'";
            $this->chips = mysqli_query($conn, $validate);
        }
        
    }

}

