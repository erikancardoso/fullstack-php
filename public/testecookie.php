<?php


if(isset($_COOKIE['local']))
{
    echo $_COOKIE['local'];
}else{
    echo 'cookie dont exist';
}
