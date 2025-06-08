<?php
$a=5;
$a=7;
if($a===5){
    echo "\$aは".$a."です";
}elseif($a===7){
    echo  "\$aは".$a."です";
}else{
    echo "\$aは5と7以外です";
}

echo "<br/>";

$people="三郎";
switch($people){
    case "太郎":
        echo $people."です";
        break;
    case "次郎":
        echo $people."です";
        break;
    case "三郎":
        echo $people."です";
        break;
    default:
    echo "\$aは太郎、次郎、三郎以外です";
    break;
}
echo "<br/>";

$result=($a>5)?"真です":"偽です";
echo $result;
