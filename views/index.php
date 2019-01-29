<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/css/style.css?ts=<?=time()?>" />" class="rel">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <div class="title"><title>Place Your Bets</title></div>
</head>
<body>


<div class="title"><h1> Place Your Bets </h1></div>

  <form action="bets.php" method="post" class="board" >

  <div id="checkboxes" name="checkboxes">
      <input type="checkbox" name="selection[]" value="0" id="b0" />
      <label class="greenbox" for="b0">0</label>
    <input type="checkbox" class="default1" name="selection[]" value="1" id="b1" />
    <label class="default1" for="b1">1</label>
    <input type="checkbox"  class="default2" name="selection[]" value="2" id="b2" />
    <label class="default2" for="b2">2</label>
    <input type="checkbox" class="default1" name="selection[]" value="3" id="b3" />
    <label class="default1" for="b3">3</label>
    <input type="checkbox"  class="default2" name="selection[]" value="4" id="b4" />
    <label class="default2" for="b4">4</label>
    <input type="checkbox"  class="default1" name="selection[]" value="5" id="b5" />
    <label class="default1" for="b5">5</label>
    <input type="checkbox"  class="default2" name="selection[]" value="6" id="b6" />
    <label class="default2" for="b6">6</label>
    <input type="checkbox"  class="default1" name="selection[]" value="7" id="b7" />
    <label class="default1" for="b7">7</label>
    <input type="checkbox"  class="default2" name="selection[]" value="8" id="b8" />
    <label class="default2" for="b8">8</label>
    <input type="checkbox"  class="default1" name="selection[]" value="9" id="b9"  />
    <label class="default1" for="b9">9</label>
    <input type="checkbox"  class="default2" name="selection[]" value="10" id="b10" />
    <label class="default2" for="b10">10</label>
    <input type="checkbox"  class="default1" name="selection[]" value="11" id="b11" />
    <label class="default1" for="b11">11</label>
    <input type="checkbox"  class="default2" name="selection[]" value="12" id="b12"  />
    <label class="default2" for="b12">12</label>
    <input type="checkbox"  class="default1" name="selection[]" value="13" id="b13" />
    <label class="default1" for="b13">13</label>
    <input type="checkbox"  class="default2" name="selection[]" value="14" id="b14" />
    <label class="default2" for="b14">14</label>
    <input type="checkbox"  class="default1" name="selection[]" value="15" id="b15"  />
    <label class="default1" for="b15">15</label>
    <input type="checkbox"  class="default2" name="selection[]" value="16" id="b16" />
    <label class="default2" for="b16">16</label>
    <input type="checkbox"  class="default1" name="selection[]" value="17" id="b17" />
    <label class="default1" for="b17">17</label>
    <input type="checkbox"  class="default2" name="selection[]" value="18" id="b18"  />
    <label class="default2" for="b18">18</label>
    <input type="checkbox"  class="default1" name="selection[]" value="19" id="b19" />
    <label class="default1" for="b19">19</label>
    <input type="checkbox"  class="default2" name="selection[]" value="20" id="b20" />
    <label class="default2" for="b20">20</label>
    <input type="checkbox"  class="default1" name="selection[]" value="21" id="b21"  />
    <label class="default1" for="b21">21</label>
    <input type="checkbox"  class="default2" name="selection[]" value="22" id="b22" />
    <label class="default2" for="b22">22</label>
    <input type="checkbox"  class="default1" name="selection[]" value="23" id="b23" />
    <label class="default1" for="b23">23</label>
    <input type="checkbox"  class="default2" name="selection[]" value="24" id="b24"  />
    <label class="default2" for="b24">24</label>
    <input type="checkbox"  class="default1" name="selection[]" value="25" id="b25" />
    <label class="default1" for="b25">25</label>
    <input type="checkbox"  class="default2" name="selection[]" value="26" id="b26" />
    <label class="default2" for="b26">26</label>
    <input type="checkbox"  class="default1" name="selection[]" value="27" id="b27"  />
    <label class="default1" for="b27">27</label>
    <input type="checkbox"  class="default2" name="selection[]" value="28" id="b28" />
    <label class="default2" for="b28">28</label>
    <input type="checkbox"  class="default1" name="selection[]" value="29" id="b29" />
    <label class="default1" for="b29">29</label>
    <input type="checkbox"  class="default2" name="selection[]" value="30" id="b30"  />
    <label class="default2" for="b30">30</label>
    <input type="checkbox"  class="default1" name="selection[]" value="31" id="b31" />
    <label class="default1" for="b31">31</label>
    <input type="checkbox"  class="default2" name="selection[]" value="32" id="b32" />
    <label class="default2" for="b32">32</label>
    <input type="checkbox"  class="default1" name="selection[]" value="33" id="b33"  />
    <label class="default1" for="b33">33</label>
    <input type="checkbox"  class="default2" name="selection[]" value="34" id="b34" />
    <label class="default2" for="b34">34</label>
    <input type="checkbox"  class="default1" name="selection[]" value="35" id="b35" />
    <label class="default1" for="b35">35</label>
    <input type="checkbox" class="default2"name="selection[]" value="36" id="b36" />
    <label class="default2" for="b36">36</label>
    
    <input type="submit" id="betsubmit">

</div>

<!-- </form> -->
<div class="controlContainer">

<div class = "diamondContainer">
<!-- <form action="bets.php" method="post" class="doubleContainer" > -->
<div class="align-radio">
<div class="dubRed" id="dubRed">
    <div class="doubleRed" id="doubleRed">
</div> 
</div>
<input type="radio" class= "r2" value ="r2" name ="selection[]">
</div>
<div class="align-radio">
<div class="dubBlack" id="dubBlack">
    <div class = "doubleBlack" id="doubleBlack">
</div>
</div>
<input type="radio" class= "b2" value ="b2" name ="selection[]">
</div>

</form>
<!-- </div> -->
<!-- <div class="diamondContainer"> -->
<button type = "button" class="redButton" id="redButton" name="redButton"><div class="allRed" id="allRed"></div></button>

<button type = "button" class="blackButton" id ="blackButton" name = "blackButton"><div class="allBlack"></div></button>
</div>
<div class="labelContainer">
<label class="dubRed" for="doubleRed">Red X2!&nbsp;&nbsp;&nbsp;</label>
<label class="dubRed" for="doubleBlack">  Black X2!</label>

<label class="dubRed" for="doubleRed">All Red&nbsp;&nbsp;&nbsp;&nbsp;</label>
<label class="dubRed" for="doubleRed"> All Black</label>
</div>

<div class="releaseContainer">
<button type = "button" class="all" id ="all"><div id="rectangle">Release Bets</div></button>
</div>
</div>

<script src="views/js/js.js"></script>
    
</body>
</html>