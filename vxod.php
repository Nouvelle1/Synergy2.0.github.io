<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://www.pinclipart.com/picdir/big/392-3922402_bca-student-handbook-love-books-icon-png-clipart.png">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="mycss.css" />
    <title>Регистрация</title>
</head>
<body>
    <br>
    <div class="container">
    <div class="well">
        <?
        $data = $_POST;
        $login = 'admin';
        $password = '123456a';
 if(isset($data['go_login'])) {
     $errors = array();
     if ($data['login'] != $login) {
        $errors[] = 'Мы не нашли такого пользователя!';
     }
    if ($data['password'] != $password) {
    $errors[] = 'Неверный пароль!';
}
  if (empty($errors)) {
    echo '<div class="alert alert-success">Вы успешно ввели данные!</div>';
  }  else {
        echo '<div class="alert alert-danger">'.array_shift($errors).'</div>';
     }
 }
?>
<br>
<form action="check.php" method="POST">
<label for="login">Ваш логин</label>
<input id="login" type="text" name="login" class="form-control" placeholder="Введите логин"value="<? echo @$data['login'];?>"><br>
 <label for="password">Ваш пароль</label>
 <input id="password" type="password" name="password" class="form-control" placeholder="Введите ваш пароль"><br>
<button type="submit" class="btn btn-primary" name="go_login">Войти</button>
</form>
</div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>