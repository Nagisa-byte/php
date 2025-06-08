<?php
$people=array(
    'person1'=>'Taro',
    'person2'=>'Jiro',
    'person3'=>'Saburo'
    );

var_dump($people);

echo $people['person1'];

$people=[
    [
        "last_name"=>"山田",
        "first_name"=>"太郎",
        "age"=>29,
        "gender"=>"男性"
    ],
    [
        "last_name"=>"鈴木",
        "first_name"=>"次郎",
        "age"=>25,
        "gender"=>"男性"
    ],
    [
        "last_name"=>"佐藤",
        "first_name"=>"花子",
        "age"=>20,
        "gender"=>"女性"
    ]
    ];

echo $people[0]["last_name"];

$people2=array('Taro','Jiro','Saburo');

foreach($people2 as $person2){
    echo $person2;
    echo '<br/>';
};

$people3=array(
    'person1'=>'Taro',
    'person2'=>'Jiro',
    'person3'=>'Saburo'
);

foreach($people3 as $person=>$name){
    print $person . "は" . $name . "です". "<br/>";
}

$people4=[
    ["Taro",25,"men"],
    ["Jiro",20,"men"],
    ["hanako",16,"women"]
    ];
    
    foreach($people4 as $person){
        echo $person[0]."(".$person[1]."歳".$person[2].")"."<br/>";
    }