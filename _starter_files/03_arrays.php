<?php
/* ----------- Arrrays ----------- */
$nums =[1,12,22];
$names=['me','you','them'];
print_r($names); 
var_dump($nums);
/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

//assigning custom index for array values and printing specific index value
$hex=[
    'red' => '#f00',
    'black' => '#000',
    'white'=> '#fff'
];
print_r($hex);
echo $hex['black'];

$person=[
 'name' => 'Akash',
 'codepen' => 'www.codepen.com/akash-k7',
 'github' => 'www.github.com/akash-k7' 
];

echo $person['codepen'];

$users =[
    [
        'name' => 'Akash',
        'codepen' => 'www.codepen.com/akash-k7',
        'github' => 'www.github.com/akash-k7' 
    ],
    [
        'name' => 'user1',
        'codepen' => 'www.codepen.com/user1',
        'github' => 'www.github.com/user1' 
    ],
    [
        'name' => 'user2',
        'codepen' => 'www.codepen.com/user2',
        'github' => 'www.github.com/user2' 
    ]
];

echo $users[1]['github'];


