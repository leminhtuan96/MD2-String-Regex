<?php

$str = "/^[APC]{1}+[0-9]{4}+[GHIKLM]{1}$/";

if (preg_match($str,"A1234H")){
    echo "dung dinh dang";
}else{
    echo "sai dinh dang";
}
