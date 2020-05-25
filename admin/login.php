<?php
include 'db.php'; 
// подключение к БД
session_start(); 
// Запуск сессии 
if(isset($_POST['signin'])){
  // Если переменная не пуста выполнить ...
  $login = $_POST['login']; 
  // Присвоение полученных данных из формы к переменным
  $pwd = $_POST['password'];
  $check = "SELECT login , pwd FROM user WHERE login='$login' AND pwd='$pwd'";
  // SQL запрос проверки на наличие похожей записи в БД в таблице user
  $res = $conn->query($check);
  // Обработка запроса
  if($res){ 
    // Если запрос выполнен
    while($row = $res->fetch_assoc()){
      // Вывести полученные данные
      if($row['login']==$login&&$row['pwd']==$pwd){
        // И сравнить с введенными данными
        $_SESSION['login']=$login;
        // Если верны запустить Сессию 'login'
        header('Location: index.php');
        // Перенаправить на страницу index (админ панель)
      }else{
        // В случае если данные не совпадают вывести сообщение 'неверный пароль'
        echo "Не верный логин или пароль";
      }
    }
  }else{
    // В случае если запрос не выполнен вывести сообщение 
      echo "Функция не выполнена";
    }
  }

if(isset($_POST['signup'])){
  // Для регистрации пользователя используем пересенную signup в input submit 
   $login = $_POST['login'];
  $pwd = $_POST['password'];
  // Присваеваем переменные к полученным данным из формы
  $reg = "INSERT INTO user (`login`,`pwd`) VALUES ('$login','$pwd')";
  // Внести данные полученные из формы в таблицу user
  $res  = $conn->query($reg);
  // Обработка SQL запроса
  if ($res)
    // Если выполнен
  {
     $_SESSION['login']=$login;
     // Задать сессию login
      header('Location: index.php');
      // Перенаправить на страницу index (админ панели)
  }else{
    // В случае не выполнения SQL вывести сообщение 
    echo "Ошибка при Регистрации";
  }
}
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <div class="form">
    <!-- Формы входа и регистрации -->

    <form class="login" action="login.php" method="post" id="signin">
      <h2>Вход</h2>
      <br> <label for="login">Логин </label>
      <br> <input type="text" name="login" id="login" autocomplete="off">
      <br> <label for="password"> Пароль</label>
      <br>   <input type="password" name="password" id="pwd" autocomplete="off">
      <br> <br><input type="submit" value="Войти" name="signin">
    </form>

    <form class="login" action="login.php" method="post" id="signup" style="display: none;">
      <h2>Регистрация</h2>
      <br> <label for="login">Логин </label>
      <br> <input type="text" name="login" id="login" autocomplete="off">
      <br> <label for="password"> Пароль</label>
      <br>   <input type="password" name="password" id="pwd" autocomplete="off">
      <br><br>  <input type="submit" value="Войти" name="signup">
    </form>
    <div class="btns" >
      <button onclick="signup()">Регистрация</button>
      <button onclick="signin()">Вход</button></div>
    </div>
    
    <style>
      .login{
       border-radius: 5px;
       height: 230px;
       width: 300px;
       background-color: gray;
       text-align: center;
       margin-left: 40%;
       margin-top: 20%;

     }
     .login input{
      padding: 4px;
      font-stretch: semi-expanded;ize: 15px;
      outline: 0;
      border-radius: 5px;
    }
    .btns button{
      border: none;
      padding: 5px;
      border-radius: 4px;

    }

    .btns{
     margin: auto;
     width:15%;
     padding: 10px;
   }
 </style>
 <!-- Переключение форм Регистрации и входа -->
 <script>

  function signup(){
    document.getElementById('signup').style.display='block';

    document.getElementById('signin').style.display = 'none';

  }

  function signin(){
    document.getElementById('signup').style.display = 'none';
    document.getElementById('signin').style.display = 'block';
  }

</script>
</body>
</html>

