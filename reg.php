<!DOCTYPE html>
<head>
<html lang="ru">
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://www.pinclipart.com/picdir/big/392-3922402_bca-student-handbook-love-books-icon-png-clipart.png">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="mtyp.css" />
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
        $errors[] = '!';
     }
    if ($data['password'] != $password) {
    $errors[] = 'Введен некорректный пароль!';
}
  if (empty($errors)) {
    echo '<div class="alert alert-success">Вы успешно заполнили все данные!</div>';
  }  else {
        echo '<div class="alert alert-danger">'.array_shift($errors).'</div>';
     }
 }
?>
<h3><center>Форма регистраций</center></h3>
<form action="" method="POST">
<label for="Email">Email</label>
<input id="Email" type="text" name="email" class="form-control mt-4" placeholder="Введите Email" value="<? echo @$data['email'];?>">
<label for="name">Имя</label>
<input id="name" type="text" name="name" class="form-control mt-4" placeholder="Введите имя" value="<? echo @$data['name'];?>">
<label for="famil">Фамилия</label>
<input id="famil" type="text" name="famil" class="form-control mt-4" placeholder="Введите фамилию" value="<? echo @$data['famil'];?>">
<label for="middle">Отчество</label>
<input id="middle" type="text" name="middle" class="form-control mt-4" placeholder="Введите отчество" value="<? echo @$data['middle'];?>">
<label for="number">Номер паспорта</label>
<input id="number" type="text" name="number" class="form-control mt-4"  placeholder="Введите номер паспорта">
<label for="number">Серия паспорта</label>
<input id="series" type="text" name="series" class="form-control mt-4"  placeholder="Введите серию паспорта">
 <label for="password">Пароль</label>
 <input id="password" type="password" name="password" class="form-control mt-4"  placeholder="Введите пароль"><br>
<button type="submit" class="btn btn-primary nemt" name="go_login">Войти</button>
</form>
</div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
   
 
