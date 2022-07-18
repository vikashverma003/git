<?php
<<<<<<< HEAD
/* PPPPPPPPPPPPP */
=======


>>>>>>> child
$arr=[2,33,1,23,45,0,12,66];
$max=$arr[0];
$min=$arr[0];
for($i=0;$i<count($arr);$i++){
	if($arr[$i]>$max){
		$max=$arr[$i];
	}

	if($arr[$i]<$min){
	 $min=$arr[$i];
	}
}

echo $max ."<br>";
echo $min ."<br>";

/********REVERSING THE ARRAY ***********/

$arr=[2,33,1,23,45,0,12,66];

$new_arr=[];
for($i=count($arr)-1;$i>=0;$i--){
	array_push($new_arr,$arr[$i]);	
}
echo "<pre>";
print_r($new_arr);


/********   REVERSING THE STRING *************/

//$str="abcdefgh";
$str=(string)123456;
$len=strlen($str);
$str_arr=[];
for($i=$len-1;$i>=0;$i--){
	
	array_push($str_arr,$str[$i]);
}
$d=implode('',$str_arr);
echo $d;


/****************CHECKING THE PALENDROM *******************************/
	
	echo "<br>";
	//$str="abcdefgh";loi
$str=(string)12345654321;
$len=strlen($str);
$str_arr=[];
$count=0;
for($j=0,$i=$len-1;$j<$len/2;$i--,$j++){
	if($str[$i] !=$str[$j]){
		$count++;
		break;
      }
}

if($count==1){
	echo "no palendrom";
}
else{
	echo "palendrom";
}



	
	
	
?>