<html>
<body>

<?php
$name = array("VIJAYAKUMAR M");
$x=array("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
$val=array("12345678901234567890123456");

echo "name " . strlen($name) . "<br />";
echo "x " . strlen($x) . "<br />";
echo "val " . strlen($val) . "<br />";

for ($i=1; $i<=strlen($name); $i++)
  {
      for ($j=1; $j<=strlen($x); $j++)
      {
      	  echo "The number is " . $x[0][i] . "<br />";
         if( $name[ 0 ][ i ] == $x[0 ][ j ]   )
         echo "The number is " . $val[0][i] . "<br />";
       }  
  }
?>

</body>
</html>
