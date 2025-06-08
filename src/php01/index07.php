<?php
function outputNumber($a){
    echo "引数の値は".$a."です";
    return;
}

outputNumber(2);

function outputHello(){
    echo "Hello world";
}

outputHello();

function text($number1,$number2){
    $value=$number1+$number2;
    return $value;
}
$total=text(2,4);
echo $total;

echo "<br/>";

function addNumber($number1, $number2){
    $value=$number1+$number2;
    return $value;
}
$answer=addNumber(2,3);
echo $answer;

function judge($score1,$score2,$score3){
    $total=$score1+$score2+$score3;
    if($total>210){
        echo "合計点は".$total."なので合格です";
    }else{
        echo "合計点は".$total."なので不合格です";
    }
}

echo (judge(80,60,90));

echo "<br/>";

function getTriangleArea($base,$height){
    $area=$base*$height/2;
    return $area;
}
function getSquareArea($base,$height){
    $area=$base*$height;
    return $area;
}
function getTrapezoidArea($upperBase,$lowerBase,$height){
    $area=($upperBase+$lowerBase)*$height/2;
    return $area;
}
echo getTriangleArea(5,3)."\n";
echo getSquareArea(5,3) . "\n";
echo getTrapezoidArea(3,5,5)."<br/>";