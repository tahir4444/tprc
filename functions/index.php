<?php

error_reporting(E_ALL);
function increment($var) {
	$var++;
}

/* $a	=	0;

$a = 0;
call_user_func('increment', $a);
echo $a."\n";



// You can use this instead
call_user_func_array('increment', array($a));

echo $a."\n"; */



function barber($type)
{
    echo "You wanted a $type haircut, no problem <br />"; 
}
// call_user_func('barber', "mushroom");
// call_user_func('barber', "shave");

echo get_include_path() . '<br />';


set_include_path(DIRECTORY);

echo get_include_path() . '<br />';



