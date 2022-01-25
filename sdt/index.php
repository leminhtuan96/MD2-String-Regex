<?php

$str = "/^[(]{1}+[0-9]{2}+[)]{1}+[-]{1}+[(]{1}+[0]{1}+[0-9]{9}+[)]{1}$/";

if (preg_match($str,"(84)-(0123456789)")){
    echo "dung dinh dang";
}else{
    echo "sai dinh dang";
}
