<?php
function demo($a,$b){
	$sum=0;
	for($i=$a;$i<=$b;$i++){
       $sum=$i+$sum;
       // echo $sum;
       // echo "<br>";
       // 依次输出相加结果
	}
	   echo $sum;
	return $sum;
}
demo(0,100);
//第二种方式输出结果
// demo();
// echo demo(0,100);