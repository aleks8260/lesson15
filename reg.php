<?php
    require_once "reg.class.php";
    require_once "db.php";
    $form = new regisration($_POST);
    $db = new Database('localhost','root','','cms');
    if($_POST){
        if($form->validate()){
            $db->insertUser();
            echo "Регистрация успешна";
        }else{
            echo $form->passwordMatch() ? 'Не все поля заполнены' : "Пароли не совпадают";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <input type="text" name="confirPassword" placeholder="confirPassword">
        <input type="submit">
    </form>
</body>
</html>