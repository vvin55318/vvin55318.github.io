<?php
// print_r($_POST);
if(empty($_POST['name'])) header('location:index.html');
else {
    $db=new PDO("mysql:host=220.128.133.15;dbname=s1080402;charset=utf8","s1080402","s1080402");
    $sql="INSERT INTO profile_contact VALUES (null,'".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
    $db->query($sql);
    header("location:index.html");
}
?>