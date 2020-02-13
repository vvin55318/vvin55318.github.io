<?php
    if(!empty($_POST)) {
        print_r($_POST);
        $db=new PDO("mysql:host=localhost;dbname=s1080402;charset=utf8","s1080402","s1080402");
        $sql="INSERT INTO profile_contact VALUES (null,'".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
        $db->query($sql);
        header("location:https://vvin55318.github.io/");
        echo "已送出，短時間內會與您聯絡，謝謝!";
    }
    else header("location:https://vvin55318.github.io/");
?>