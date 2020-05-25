<?php
include_once 'db.php';
session_start();
if(empty($_SESSION['login'])){
  // Проверка на наличие сессии
  header('Location: login.php');
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
   Комерческие предложения
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
        <a  class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/logo-small.png">

          </div>

        </a>
        <a  class="simple-text logo-normal">
          <?php echo $_SESSION['login']; ?>
          <!-- Вывод логин пользователя который вошел  -->
          <!-- <div class="logo-image-big">
            <img src="assets/img/logo-big.png">
          </div> -->
        </a>
        
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
         
         <li  class="active">
            <a href="./tables.php">
              <i class=""></i>
              <p>Добавить предложения</p>
            </a>
          </li>
          <li >
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
            <a class="navbar-brand" href="#pablo"></a>
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
                <h4 class="card-title"></h4>
              </div>
              <div class="card-body">
              <h2>Продажа коммерческих помещений</h2> 

                 <form class="col-lg-12" action = "com_sale.php" method = "POST" enctype = "multipart/form-data">
                  <input type="text" name="u" value="<?php echo $better_token = md5(uniqid(rand(),1)); ?>" style="display: none;">
      <p>
        <h5>Основное фото</h5>
        <input type = "file" name="file_name">
      </p>
       <p> <h5>Фото в слайдер</h5>
        <input type = "file" name="file_name1">
      </p>
      <p>
        <input type = "file" name="file_name2">
      </p>
      <p>
        <input type = "file" name="file_name3">
      </p>
     <br>
      <label for="">Название</label><br>
      <input type="text" name="name"><br> 
      <label for="">Описание</label><br>
      <input type="text" name="desc"><br>
      <label for="">Цена</label><br>
      <input type="number" name="price"> $ <br><br>
       <p>
        <input type = "submit" name = "upload" value = "Загрузить">
      </p>
    </form>


 

<hr>
<h2>Аренда коммерческих помещений</h2>
       <form class="col-lg-12" action = "com_arenda.php" method = "POST" enctype = "multipart/form-data">
         <input type="text" name="u" value="<?php echo $better_token = md5(uniqid(rand(),1)); ?>" style="display: none;">
      <p>
        <h5>Основное фото</h5>
        <input type = "file" name="file_name">
      </p>
       <p> <h5>Фото в слайдер</h5>
        <input type = "file" name="file_name1">
      </p>
      <p>
        <input type = "file" name="file_name2">
      </p>
      <p>
        <input type = "file" name="file_name3">
      </p>
      
     <br>
      <label for="">Название</label><br>
      <input type="text" name="name"><br> 
      <label for="">Описание</label><br>
      <input type="text" name="desc"><br>
      <label for="">Цена</label><br>
      <input type="number" name="price"> $ <br><br>
       <p>
        <input type = "submit" name = "upload" value = "Загрузить">
      </p>
    </form>

    <hr>
<h2>Продажа жилых помещений</h2><br>
       <form class="col-lg-12" action = "jil_sale.php" method = "POST" enctype = "multipart/form-data">
         <input type="text" name="u" value="<?php echo $better_token = md5(uniqid(rand(),1)); ?>" style="display: none;">
      <p>
        <h5>Основное фото</h5>
        <input type = "file" name="file_name">
      </p>
       <p> <h5>Фото в слайдер</h5>
        <input type = "file" name="file_name1">
      </p>
      <p>
        <input type = "file" name="file_name2">
      </p>
      <p>
        <input type = "file" name="file_name3">
      </p>
     <br>
      <label for="">Название</label><br>
      <input type="text" name="name"><br> 
      <label for="">Описание</label><br>
      <input type="text" name="desc"><br>
      <label for="">Цена</label><br>
      <input type="number" name="price"> $ <br><br>
       <p>
        <input type = "submit" name = "upload" value = "Загрузить">
      </p>
    </form>
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
                </script>Mr.Kadyroff Studio.
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
