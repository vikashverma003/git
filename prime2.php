<?php

/* into the child */
/* into the child */
/* into the child */
$n=120;
$count=0;
$arr=[];
for($i=1;$i<=$n;$i++){
	
	for($j=1;$j<=$n;$j++)
	{
		if($i%$j==0){
			$count++;
		}
	}
	
	if($count==2){
		array_push($arr,$i);
		
	}
	
	$count=0;
}
echo implode(',',$arr);
echo "<br>";
//print_r($arr);

/************* Get all prime number from number  ***************/
function funPrime($n){
	$count=0;
$arr=[];
	for($i=1;$i<=$n;$i++){
	
		for($j=1;$j<=$n;$j++)
		{
			if($i%$j==0){
				$count++;
			}
		}
		
		if($count==2){
			array_push($arr,$i);
		}
		
		$count=0;
}

return $arr;
	
	
}

$d=funPrime(23);
echo implode(',',$d);

//print_r($d);


/* Sum of prime number */

echo "<br>";
function sumPrime($n){
	
	$count=0;
	$sum=0;
		for($i=1;$i<=$n;$i++){
			for($j=1;$j<=$n;$j++)
			{
				if($i%$j==0){
					$count++;
				}
			}
			
			if($count==2){
				$sum=$sum+$i;
			}
			
			$count=0;
	}

	return $sum;
	
}

$d=sumPrime(7);
echo $d;

/***************check if number is prime ************************/

echo "Check prime"."<br>"; echo "<br>";

function ccheck($n){
	$count=0;
	for($i=1;$i<=$n;$i++){
		for($j=1;$j<=$n;$j++){
			if($n%$j==0){	
				$count++;
			}
		}
		
		if($count==2){
			return 1;
		}
		else{
			return 0;
		}
		
	}
}

echo ccheck(5);
echo "<br>"; echo "<br>";


/************* Increasing order in arr element ***************/

$data=['v','a','b','c','k','e'];

for($i=0;$i<count($data);$i++)
{
	for($j=0;$j<count($data)-1;$j++)
	{
		if($data[$j]>$data[$j+1])
		{
			$temp=$data[$j+1];
			$data[$j+1]=$data[$j];
			$data[$j]=$temp;

		}
	}
	
}

echo implode(',', $data);echo "<br>";
print_r($data);

echo "<br>"; echo "<br>";

/************* Decreasing order in arr element ***************/

$data=['v','z','m','t','y','a','b','c','k','e'];

for($i=0;$i<count($data);$i++)
{
	for($j=0;$j<count($data)-1;$j++)
	{
		if($data[$j]<$data[$j+1])
		{
			$temp=$data[$j+1];
			$data[$j+1]=$data[$j];
			$data[$j]=$temp;

		}
	}
}

echo implode(',', $data);echo "<br>";
print_r($data);

echo "<br>"; echo "<br>";





/********** Palendrom ***************/


$str=(string)1211;
$mis=0;

$d=strlen($str);
for($i=0,$j=$d-1;$i<$d/2;$i++,$j--){
	
	if($str[$i]!=$str[$j]){
		$mis++;
		break;
	}
}

if($mis==1){
	echo "no";
}
else{
	echo "yes";
}



/********* fibo *********/


$num = 5;  
$n1 = 0;  
$n2 = 1;  
echo "<h3>Fibonacci series for first 12 numbers: </h3>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num >0 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num--;  
}

?>