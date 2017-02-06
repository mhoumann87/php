<?php



function pwdgen() {

$data = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$shuf_data = str_shuffle($data);
   
    $rand = rand(1, (strlen($data)-8));
   
    $pwd = substr($data,$rand,8);
    echo $pwd.'<br><br>';

    echo '<hr><br><br>';
    echo str_shuffle($pwd);

    echo '<hr><br><br>';
    $shuf_pwd = substr($shuf_data,$rand,8);

    echo $shuf_pwd;

}

pwdgen();


?>