<?php

if(isset($_POST['registration'])){
    registration();
    header("Location: index.php");
    die();
}

if(isset($_POST['authorization'])){
    login();
    header("Location: index.php");
    die();
}

if(isset($_GET['do']) && $_GET['do'] == 'exit'){
    if(!empty($_SESSION['user'])){
        unset($_SESSION['user']);
    }
    header("Location: index.php");
    die();
}

function registration(): bool{
    global $pdo;

    $email = !empty($_POST['email']) ? trim($_POST['email']) : '' ;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : '';
    $nickname = !empty($_POST['nickname']) ? trim($_POST['nickname']) : '';

    if (empty($email) || empty($password)){
        $_SESSION['errors'] = 'Поля email/пароль обязательны';
        return false;
    }

    $res = $pdo->prepare("SELECT COUNT(*) FROM user WHERE email = ?");
    $res->execute([$password]);
    if($res->fetchColumn()){
        $_SESSION['errors'] = 'Данное имя уже используется';
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $res = $pdo->prepare("INSERT INTO user(email,nickname,password) VALUE (?,?,?)");
    if ($res->execute([$email,$nickname,$password])){
        $_SESSION['success'] = 'SUCCESS REGISTRATION';
        return true;
    } else {
        $_SESSION['errors'] = 'ERROR REGISTRATION';
        return false;
    }
}

function login(): bool{
    global $pdo;

    $email = !empty($_POST['email']) ? trim($_POST['email']) : '' ;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : '';

    if (empty($email) || empty($password)){
        $_SESSION['errors'] = 'Поля email/пароль обязательны';
        return false;
    }

    $res = $pdo->prepare("SELECT * FROM user WHERE email = ?");
    $res->execute([$email]);
    if(!$user = $res->fetch()){
        $_SESSION['errors'] = 'Логин введены неверно';
        return false;
    }
    if(!password_verify($password, $user['password'])){
        $_SESSION['errors'] = 'пароль введены неверно';
        return false;
    } else{
        $_SESSION['success'] = 'Вы успешно авторизовались';
        $_SESSION['user']['id']=$user['id_user'];
        $_SESSION['user']['email']=$user['email'];
        $_SESSION['user']['nickname']=$user['nickname'];
        return true;
    }
}

