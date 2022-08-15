<html>
<body>

<?php
$boxes = array("1","2","2","3","4","6","3","1","4","2","8");
$boxes_length = count($boxes);
$k = 5;
for($x = 0; $x < $boxes_length; $x++) {
  if($boxes[$x]+$boxes[$x+1] == $k){
    echo "[".$x.",".($x+1)."]";
    echo " ";
  } 
}
?>

</body>
</html>