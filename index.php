$<?php
$arr = [41,22,46,7,0,-2,-3,41,0,-17,-1];
$max = $arr[0];
for ($i=0; $i<= 9; $i++) { 
	if($max<$arr[$i]){
		$max=$arr[$i];
	};
};
echo Max.$max ;

$sum = 0;
 echo "<br/>" ;
$arr = [41,22,46,7,0,-2,-3,41,0,-17,-1];
 	for ($i=0; $i<= 9; $i++) {
 		if ($arr[$i]>0) {
 			$sum=$sum+$arr[$i];
 			
 		};
 	};
 	echo $sum
?>
<?php 
for($k = 0; $k< count($arr);$k++){ 
$cur = $arr[$k]; 
for($o = $k+1;$o< count($arr); $o++){ 
$next = $arr[$o]; 
if ($cur == $next) { 
echo $cur; 
echo "</br>"; 
echo $next; 
echo "</br>"; 
}; 
} 
} 
?>