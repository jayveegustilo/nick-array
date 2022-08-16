<html>
<body>

<?php
//$boxes = array("1","2","2","3","4","6","3","1","4","2","8"); //your sample
$boxes = array("1","2","2","3","2","3","4","1","4","2","8"); //for checking
$boxes_length = count($boxes);
$k = 5;
for($x = 0; $x < $boxes_length; $x++){
	if($boxes[$x]+$boxes[$x+1] == $k){
		if($boxes[$x+1]+$boxes[$x+2] == $k){ //with positive overlap
			if($boxes[$x-1]+$boxes[$x] != $k){ //no negative overlap //logical checking 1
				echo "[".$x.",".($x+1)."]";
			} else { //with negative overlap //logical checking 2
				echo "[".($x+1).",".($x+2)."]";
			}
		} elseif($boxes[$x+1]+$boxes[$x+2] != $k){ //no positive overlap 
			if($boxes[$x-1]+$boxes[$x] != $k){ //no negative overlap //logical checking 3
				echo "[".$x.",".($x+1)."]";
			} else { //with negative overlap - no result //logical checking 4 
			}
		}
	} 
}
?>

</body>
</html>
