<?php

for($i=0;$i<4;$i++){
    echo $i;
}
echo "<br/>";
for($i=1;$i<=5;$i++){
    echo $i*2 . "<br/>";
}

$i=0;
while($i<3){
    echo 'i='.$i.'<br/>';
    $i+=1;
}

$count=1;
while($count<=20){
    echo $count . "<br/>";
    $count++;
}

$i=0;
while($i<10){
    if($i==5){
        break;
    }
    echo $i;
    $i++;
}

$i=0;
while($i<10){
    if($i==5){
        $i++;
        continue;
    }
    echo $i;
    $i++;
}
echo "<br/>";
$count=0;
while($count<100){
    if($count%3==0){
        $count++;
        continue;
    }if($count==20){
        break;
    }
    echo $count . "<br/>";
    $count++;
}
/*
$i=0;
do{
    echo $i , '<br/>';
    $i++;
}while($i<5);
*/

for($number=1;$number<=50;$number++){
    if($number%15===0){
        echo "FizzBuzz";
    }elseif($number%3===0){
        echo "Fizz";
    }elseif($number%5===0){
        echo "Buzz";
    }else{
        echo $number;
    }
    echo "<br/>";
}


for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        echo "●";
    }
    echo "<br/>";
}
