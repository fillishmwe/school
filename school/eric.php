<?PHP
$arr1 = [1,2,3,4,5];
$arr2 = [2,2,3,4,3];
$sum1 = 0;  
foreach($arr1 as $i){
    $sum1 =$sum1 + $i;
}
echo $sum1."<br><br>";
$sum2 = 0;  
foreach($arr2 as $i){
    $sum2 =$sum2 + $i;
}
echo $sum2."<br><br>";
echo"THE TOTAL SUM OF 2 ARRAYS IS::".$sum1+$sum2;

echo"==================================================<br>";

?>