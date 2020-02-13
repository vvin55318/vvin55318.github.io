<?php
    if(!empty($_POST)) {
        // print_r($_POST);
        $db=new PDO("mysql:host=localhost;dbname=s1080402;charset=utf8","s1080402","s1080402");
        $sql="INSERT INTO profile_contact VALUES (null,'".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
        $db->query($sql);
        echo "已送出，短時間內會與您聯絡，謝謝!";
        header("location:https://vvin55318.github.io/");    
    }
    else header("location:https://vvin55318.github.io/");
?>