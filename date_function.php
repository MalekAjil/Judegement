<?php
function date_function($a,$b)
{
switch($a){
case 'a':{$a=1;break;}
case 'b':$a=2;break;
case 'c':$a=3;break;
case 'd':$a=4;break;
case 'e':$a=5;break;
case 'f':$a=6;break;
case 'g':$a=7;break;
case 'h':$a=8;break;
case 'i':$a=9;break;
case 'j':$a=10;break;
case 'k':$a=11;break;
case 'l':$a=12;break;
case 'm':$a=13;break;
case 'n':$a=14;break;
case 'o':$a=15;break;
case 'p':$a=16;break;
case 'q':$a=17;break;
case 'r':$a=18;break;
case 's':$a=19;break;
case 't':$a=20;break;
case 'u':$a=21;break;
case 'v':$a=22;break;
case 'w':$a=23;break;
case 'x':$a=24;break;
case 'y':$a=25;break;
case 'z':$a=26;break;
case 'aa':$a=27;break;
case 'ab':$a=28;break;
case 'ac':$a=29;break;
case 'ad':$a=30;break;
case 'ae':$a=31;break;
default;$a='';
}
switch($b)
{
case 'jan':$b=1;break;
case 'feb':$b=2;break;
case 'mar':$b=3;break;
case 'apr':$b=4;break;
case 'may':$b=5;break;
case 'jun':$b=6;break;
case 'jul':$b=7;break;
case 'aug':$b=8;break;
case 'sep':$b=9;break;
case 'oct':$b=10;break;
case 'nov':$b=11;break;
case 'dec':$b=12;break;
}
return "$b"."-"."$a";
}
?>