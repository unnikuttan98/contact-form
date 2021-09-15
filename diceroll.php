<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator Web App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:pink;">
    <div class="container">
    <center><h1>Welcome to random quote generator</h1>
   <form action="diceroll.php" method="post">
<table>
           <tr><td><label>Enter no: of times</label></td><td><input type="number" name="number" id="form" placeholder="Enter the number of times to roll dice"></td></tr>
      <tr><td><label>Enter dice value</label></td><td>    <select name="dice" id="">
        <option value="">select dice</option>
        <option value="111111">dice1</option>
        <option value="222222">dice2</option>
        <option value="333333">dice3</option>
        <option value="444444">dice4</option>
        <option value="555555">dice5</option>
        <option value="666666">dice6</option>
    </select></td></tr>
        </table>
<input type="submit" name="submit" value="Submit"></center>
   </form>
</div>
<center><h1>Dice</h1></center>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    if(empty($_POST['number'])||empty($_POST['dice']))
       {
         echo"<script>alert('value is empty')</script>";
       }
       elseif ($_POST['number']>6) {
         echo"<script>alert('number above 6 is not allowed')</script>";
       }
       else{
           $fail=0;
           $score=0;
           $rand=6;
           $input=$_POST['number'];
           $dice=array($_POST['dice']);
           $select=rand(1,6);
           foreach ($dice as $rand) {
               for ($i=0; $i <$input ; $i++) { 
                if($rand[$i]==$select){
                    $score++;
                }
                else{
                    $fail++;
                }
               }
                $mark=$score*2-$fail;
           }
           echo"<center><img src='d$select.png'><br>Score:$mark</center>";
       }
}
?>