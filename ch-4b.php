<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
   <?php

$star=4;
for($a=1; $a<=$star; $a++){
    for($c=$star; $c>=$a; $c-=1){
        echo"*";
    }
    echo"<br>";
}
?> 
  </body>
</html>