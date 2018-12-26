<?php 


$limit=10000;


function isPrime($n)
{
    for($x=2; $x<$n; $x++)
    {
        if($n %$x ==0)
        {
            return 0;
        }
    }
    return 1;
}
$arr = array();
for($i=2; $i<$limit; $i++)
{
    if (isPrime($i)) {
        $arr[count($arr)] = $i;
    }
}

array_unshift($arr,1);
$sum = 0;
$start = 1;
$end = (count($arr)+1)/2;
$finalCount = 0;
$finalSum = 0;
while ($start<$end) {
    for ($i=2; $i < count($arr); $i++) { 
        $count = 0;
        $sum = 0;
        for ($j=$start; $j < $i; $j++) { 
            $count++;
            $sum = $sum+$arr[$j];
            if ($sum == $arr[$i]) {
                if ($finalCount<$count) {
                    $finalCount = $count;
                    $finalSum = $sum;
                }
                break;
            }
        }
    }
    $start++;
}
echo $finalCount."=>";
echo $finalSum."<br>";

 ?>