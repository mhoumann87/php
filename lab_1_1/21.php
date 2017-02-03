<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test numbers</title>
</head>
<body>

<?php
echo '<form method="POST">
      <label>Enter a number larger than 10</label><br>
      <input type="number" name="num"><br><br>
      <input type="submit" value="Submit"><br><br>
      </form>';

      if (empty($_POST['num'])) {
          
          $num = '';
      } else {

          $num = $_POST['num'];
          
          function test($n){
            $r = $n > 30
            ? "greater than 30"
            : ($n > 20
            ? "greater than 20"
            : ($n >10
            ? "greater than 10"
            : "Input a number greater than 10!")); 
            echo $n." : ".$r.'<br>';
            }

            test($num);
      }

?>
    
</body>
</html>