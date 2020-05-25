
<?php
include_once 'db.php';
// Подключение файла соединения с БД
session_start();
// Запуск сессии
if(empty($_SESSION['login'])){
  // Есил сессия отсутсвует перенаправить на страницу входа
  header('Location: login.php');
}


if (isset($_POST['del_kom'])){
  // При нажатии кнопки Удалить , проверка на наличие данных del_kom - удалить (комерческие предложения)
  $del = "UPDATE kom_predl SET del=1 WHERE id =".$_POST['del_kom'];
  // SQL запрос обновить в БД таблице kom_predl задать в столбец del=1 Где id = значению ($_POST['del_kom'])
  $conn->query($del);
  // Выполнить запрос
}
if (isset($_POST['del_ak'])){
  // При нажатии кнопки Удалить , проверка на наличие данных del_ak - удалить (аренда комм помещений)
  $del = "UPDATE arenda_kom SET del=1 WHERE id =".$_POST['del_ak'];
  // SQL запрос обновить в БД таблице arenda_kom задать в столбец del=1 Где id = значению ($_POST['del_ak'])
  $conn->query($del);
  // Выполнить запрос
}
if (isset($_POST['del_jil'])){
  // При нажатии кнопки Удалить , проверка на наличие данных del_jil - удалить (жил помещения)
  $del = "UPDATE sale_jil SET del=1 WHERE id =".$_POST['del_jil'];
  // SQL запрос обновить в БД таблице sale_jil задать в столбец del=1 Где id = значению ($_POST['del_jil'])
  $conn->query($del);
  // Выполнить запрос
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Все предложения
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/logo-small.png">
          </div>
        </a>
        <a  class="simple-text logo-normal">
          Admin
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./index.php">
              <i class=""></i>
              <p>Добавить предложения</p>
            </a>
          </li>

          <li  class="active">
            <a href="./typography.php">
              <i class=""></i>
              <p>Все предложения</p>
            </a>
          </li>
          <li >
            <a href="./logout.php">
              <i class=""></i>
              <p>Выход</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            Все предложения
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">


          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


      </div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">ПРОДАЖА КОММЕРЧЕСКИХ</h5>
                <p class="category"></p>
              </div>
              <div class="card-body">
                <?php 

                $sel = "SELECT * FROM kom_predl WHERE del=0";
                // sql запрос вывести все не удаленные записи из таблицы kom_predl
                $res = $conn->query($sel);
                // Обработка запроса
                while ($row = $res->fetch_assoc()){
                  // Цмкл для вывода полученных данных из БД в массив row
                  // $row['photo']- фото
                  echo '  <div class="col-lg-3 p-2">
                  <div class="photo" ><img src="'.$row['photo'].'" style="border-radius:4px;" alt="" width="200" height="200"></div>
                  </div>
                  <div class="col-lg-7 mt-3" id="photo"><h5>Заголовок: '.$row['name'].'</h5><h5>Описание: </h5><span>'.$row['description'].'</span></div>
                  <div class="col-lg-2 mt-5" style="font-size:20px;">Цена: '.$row['price'].' <span>$</span> </div><br/>
                 
                  <form action="typography.php" method="POST">
                  <input type="text" name="del_kom" value="'.$row['id'].'" style="display:none;">
                  <input type="submit" class="btn btn-danger" value="Удалить объявление" style="border:none;padding:5px;">
                  </form> <br>
                 
                  <form action="update.php" method="POST">
                  <input type="text" value="'.$row['id'].'" name="id" style="display:none;"><br><br>
                  Наименование: <input type="text" value="'.$row['name'].'" name="name"><br><br>
                  Описание: <textarea type="text"  name="descr">'.$row['description'].'</textarea><br><br>
                  Цена: <input type="text" value="'.$row['price'].'" name="price"><br>
                  <input type="submit" class="btn btn-primary" name="upd_prodaja_kom" value="Редактировать  ">
                  </form>
                 
                  <hr>
                  ';
                   // Форма редактирования записи , через файл update.php   // 
                     }
                  ?>



                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5 class="title">АРЕНДА КОММЕРЧЕСКИХ</h5>
                  <p class="category"></p>
                </div>
                <div class="card-body">

                 <?php 
                  // Вывод не удаленных записей из таблицы arenda_kom (аренда ком помещений)
                 $sel = "SELECT * FROM  arenda_kom WHERE del=0";
                 $res = $conn->query($sel);
                 // Обработка запроса
                 while ($row = $res->fetch_assoc()){
                  // Присвоение полученных данных из в массив $row
                  echo '  <div class="col-lg-3 p-2">
                  <div class="photo" ><img src="'.$row['photo'].'" style="border-radius:4px;" alt="" width="200" height="200"></div>
                  </div>
                  <div class="col-lg-7 mt-3" id="photo"><h5>'.$row['name'].'</h5><span>'.$row['description'].'</span></div>
                  <div class="col-lg-2 mt-5" style="font-size:20px;">'.$row['price'].' <span>$</span> </div><br/>
                  <form action="typography.php" method="POST">

                  <input type="text" name="del_ak" value="'.$row['id'].'" style="display:none;">
                  <input type="submit" value="Удалить объявление" style="border:none;padding:5px;">
                  </form>
                  <br>
                  // Обновление записей через форму
                  <form action="update.php" method="POST">
                  <input type="text" value="'.$row['id'].'" name="id" style="display:none;"><br><br>
                  Наименование: <input type="text" value="'.$row['name'].'" name="name"><br><br>
                  Описание: <textarea type="text"  name="descr">'.$row['description'].'</textarea><br><br>
                  Цена: <input type="text" value="'.$row['price'].'" name="price"><br>
                  <input type="submit" class="btn btn-primary" name="upd_arenda_kom" value="Редакторировать">
                  </form>
                 

                  ';      }
                  ?>


                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5 class="title">ПРОДАЖА ЖИЛЫХ</h5>
                  <p class="category"></p>
                </div>
                <div class="card-body">


                  <?php 

                  $sel = "SELECT * FROM  sale_jil WHERE del=0";
                  // Вывод не удаленных записей из таблицы sale_jil (продажа жил помещений)
                  $res = $conn->query($sel);
                  // Обработка запроса
                  while ($row = $res->fetch_assoc()){
                    // Цикл присвоения полученных данных из БД в массив 
                    // Вывод записей 
                    echo '  <div class="col-lg-3 p-2">
                    <div class="photo" ><img src="'.$row['photo'].'" style="border-radius:4px;" alt="" width="200" height="200"></div>
                    </div>
                    <div class="col-lg-7 mt-3" id="photo"><h5>'.$row['name'].'</h5><span>'.$row['description'].'</span></div>
                    <div class="col-lg-2 mt-5" style="font-size:20px;">'.$row['price'].' <span>$</span> </div><br/>
                    <form action="typography.php" method="POST">

                    <input type="text" name="del_jil" value="'.$row['id'].'" style="display:none;">
                    <input type="submit" value="Удалить объявление" style="border:none;padding:5px;">
                    </form>
                    <br>
                  
                  <form action="update.php" method="POST">
                  <input type="text" value="'.$row['id'].'" name="id" style="display:none;"><br><br>
                  Наименование: <input type="text" value="'.$row['name'].'" name="name"><br><br>
                  Описание: <textarea type="text"  name="descr">'.$row['description'].'</textarea><br><br>
                  Цена: <input type="text" value="'.$row['price'].'" name="price"><br>
                  <input type="submit" class="btn btn-primary" name="upd_prodaja_jil" value="Редакторировать">
                  </form>
                 
                    ';      }
                    ?>


                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
              <div class="row">

                <div class="credits ml-auto">
                  <span class="copyright">
                    ©
                    <script>
                      document.write(new Date().getFullYear())
                    </script>
                  </span>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>


      <!--   Core JS Files   -->
      <script src="assets/js/core/jquery.min.js"></script>
      <script src="assets/js/core/popper.min.js"></script>
      <script src="assets/js/core/bootstrap.min.js"></script>
      <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Chart JS -->
      <script src="assets/js/plugins/chartjs.min.js"></script>
      <!--  Notifications Plugin    -->
      <script src="assets/js/plugins/bootstrap-notify.js"></script>
      <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
      <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
      <script src="assets/demo/demo.js"></script>
    </body>

    </html>
