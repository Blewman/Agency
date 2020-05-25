<?php
include_once 'admin/db.php';
// Подключение файла Соединения с БД

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>Real estate</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>




	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-radius: 0; font-size: 16px; padding-left: 20px;">
		<a class="navbar-brand" href="index.php"> Продажа и аренда помещений</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText" >
			<div class="nav" >
				<ul class="navbar-nav ">
					<li class="nav-item ">
						<a class="nav-link" href="./admin/index.php">Вход</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="./admin/index.php">Регистрация</a>
					</li>

				</div>


			</ul>


		</div>
	</nav>



</div>

<!-- Карусель изображений -->

<section class="home-slider owl-carousel" style="margin-top: -20px;">
	<a  class="slider-item" style="background-image: url(images/bg_1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-end justify-content-center">
				<div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
					<h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#01</h1>
				</div>
			</div>
		</div>
	</a>

	<a  class="slider-item" style="background-image: url('images/bg_2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-end justify-content-center">
				<div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
					<h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#02</h1>
				</div>
			</div>
		</div>
	</a>

	<a  class="slider-item" style="background-image: url('images/bg_4.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-end justify-content-center">
				<div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
					<h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#03</h1>
				</div>
			</div>
		</div>
	</a>

	<a  class="slider-item" style="background-image: url('images/port/main/001.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-end justify-content-center">
				<div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
					<h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#04</h1>
				</div>
			</div>
		</div>
	</a>
	<a  class="slider-item" style="background-image: url('images/port/main/003.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-end justify-content-center">
				<div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
					<h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#05</h1>
				</div>
			</div>
		</div>
	</a>
	<a  class="slider-item" style="background-image: url('images/port/main/002.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-end justify-content-center">
				<div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
					<h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#06</h1>
				</div>
			</div>
		</div>
	</a>
	<a  class="slider-item" style="background-image: url('images/port/main/004.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-end justify-content-center">
				<div class="col-md-12 ftco-animate p-4" data-scrollax=" properties: { translateY: '70%' }">
					<h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">#07</h1>
				</div>
			</div>
		</div>
	</a>

</section>
<!-- END slider -->


<section class="ftco-counter bg-light" id="section-counter">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-7 py-sm-3 py-md-5">
				<!-- <?php echo $word['preimushestva']; ?> -->
				<div class="row py-5">
					<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text">
								<strong class="number" data-number="5">0</strong>
								<span>Завершенных проектов</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text">
								<strong class="number" data-number="674">0</strong>
								<span>Счастливых клиентов</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text">
								<strong class="number" data-number="57194">0</strong>
								<span>Жилых площадей</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text">
								<strong class="number" data-number="56721">0</strong>
								<span>Квадратов</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5 d-flex justify-content-center align-items-center img exp" style="background-image: url(images/image_1.jpg);">
				<!-- <p><a href="#" class="btn btn-white px-5 py-4">Explore Further</a></p> -->
			</div>
		</div>
	</div>

</section>







<!-- Кнопки выбора предложений, использование JS для вызова функций -->
<div class="col-lg-sm text-center mt-4">
	<h1 style="text-align: center;font-weight: 500; " class="p-5">Наши предложения</h1>
	<button onclick="pj();" style="border:none;background: transparent;font-size: 18px; border-radius: 4px; font-weight: 400; box-shadow: 0 0 10px rgba(0,0,0,0.5); /* Параметры тени */">Продажа жилых помещений</button>
	<button onclick="pk();" style="border:none;background: transparent;font-size: 18px; border-radius: 4px; font-weight: 400; box-shadow: 0 0 10px rgba(0,0,0,0.5); /* Параметры тени */">Продажа коммерческих помещений</button>
	<button onclick="ak();" style="border:none;background: transparent;font-size: 18px; border-radius: 4px; font-weight: 400; box-shadow: 0 0 10px rgba(0,0,0,0.5); /* Параметры тени */">Аренда коммерческих помещений</button>


</div>


<section class="ftco-section ">
	<div id="sale_jil">
		<div class="container">
			<div class="row justify-content-center mb-4 " >

				<span style="font-size: 23px;color: black; border-bottom: solid 1px;">Продажа жилых помещений</span>
			</div>

			<div class="row">
				<?php 
				// Запрос к БД на языке MySQL , Вывести все записи из таблицы sale_jil (Продажа жил помещений) с условием del= 0 (del (deleted) - обозначает удален 0 или 1 )
				$sql = "SELECT * FROM sale_jil WHERE del=0";
				// Выполнение запроса через php $conn - обозначает соединение с БД , query- Выполнить SQL запрос
				$res = $conn->query($sql);
				// Для вывода используем цикл while , массив $row - столбец присваевается к выведенной данной по столбцам
				while ($row = $res->fetch_assoc()){
					// Вывод, используем html разметку для размещений выведенных данных из БД 
					echo '  <div class="col-lg-3 p-2">
					<div class="photo" data-toggle="modal" data-target=".bs-example-modal-lg'.$row['id'].'"><img src="admin/'.$row['photo'].'" style="border-radius:4px;" alt="" width="200" height="200"></div>
					</div>
					<div class="col-lg-7 mt-3" id="photo"><h5 style="font-size:24px;">'.$row['name'].'</h5><span style="font-size:18px;">'.$row['description'].'</span></div>
					<div class="col-lg-2 mt-5" style="font-size:20px;">'.$row['price'].' <span>$</span> </div><br/>

					<div class="modal fade bs-example-modal-lg'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
					<div class="modal-content">
					<div id="carousel-example-generic'.$row['id'].'" class="carousel slide" data-ride="carousel">



					<!-- Wrapper for slides -->
					<div class="carousel-inner">
					<div class="item active">
					<img class="img-responsive" src="admin/'.$row['photo1'].'" width="1000"  alt="...">
					<div class="carousel-caption">

					</div>
					</div>
					';
					// Для вывода фото в слайдер используем оператор if , Если столбец не пуст вывести данные
					// Если не использовать оператор то слайдер может работать не корректно в связи с отсутсвием данных
					if (!empty($row['photo2'])){
						echo '
						<div class="item">
						<img class="img-responsive" src="admin/'.$row['photo2'].'"  width="1000" alt="...">
						<div class="carousel-caption">

						</div>
						</div>';}
						// Для вывода фото в слайдер используем оператор if , Если столбец не пуст вывести данные
						if (!empty($row['photo3'])){
							echo '
							<div class="item">
							<img class="img-responsive" src="admin/'.$row['photo3'].'"  width="1000" alt="...">
							<div class="carousel-caption">

							</div>
							</div>';}
							echo ' 
							</div>

							<!-- Controls -->
							// Управление слайдером 
							<a class="left carousel-control" href="#carousel-example-generic'.$row['id'].'" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic'.$row['id'].'" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
							</div>
							</div>
							</div>
							</div>



							';            }
							?>



						</div>
					</div>
				</div>





				<div id="sale_kom" style="display: none;">
					<div class="container">
						<div class="row justify-content-center mb-4  ">

							<span style="font-size: 23px;color: black; border-bottom: solid 1px;">Продажа коммерческих помещений</span>
						</div>

						<div class="row">
							<?php 
							$sql = "SELECT * FROM kom_predl WHERE del=0";
							$res = $conn->query($sql);
							$n_r=$res->num_rows;
							while ($row = $res->fetch_assoc()){

								echo '  <div class="col-lg-3 p-2">
								<div class="photo" data-toggle="modal" data-target=".bs-example-modal-lg'.$row['id'].'"><img src="admin/'.$row['photo'].'" style="border-radius:4px;" alt="" width="200" height="200"></div>
								</div>
								<div class="col-lg-7 mt-3" id="photo"><h5 style="font-size:24px;">'.$row['name'].'</h5><span style="font-size:18px;">'.$row['description'].'</span></div>
								<div class="col-lg-2 mt-5" style="font-size:20px;">'.$row['price'].' <span>$</span> </div><br/>

								<div class="modal fade bs-example-modal-lg'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
								<div class="modal-content">
								<div id="carousel-example-generic'.$row['id'].'" class="carousel slide" data-ride="carousel">



								<!-- Wrapper for slides -->
								<div class="carousel-inner">
								<div class="item active">
								<img class="img-responsive" src="admin/'.$row['photo1'].'" width="1000"  alt="...">
								<div class="carousel-caption">

								</div>
								</div>
								';
								if (!empty($row['photo2'])){
									echo '
									<div class="item">
									<img class="img-responsive" src="admin/'.$row['photo2'].'"  width="1000" alt="...">
									<div class="carousel-caption">

									</div>
									</div>';}
									if (!empty($row['photo3'])){
										echo '
										<div class="item">
										<img class="img-responsive" src="admin/'.$row['photo3'].'"  width="1000" alt="...">
										<div class="carousel-caption">

										</div>
										</div>';}
										echo ' 
										</div>

										<!-- Controls -->
										<a class="left carousel-control" href="#carousel-example-generic'.$row['id'].'" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										</a>
										<a class="right carousel-control" href="#carousel-example-generic'.$row['id'].'" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										</a>
										</div>
										</div>
										</div>
										</div>




										';            }
										?>



									</div>
								</div>
							</div>



							<div id="arenda_kom" style="display: none;">
								<div class="container">
									<div class="row justify-content-center mb-4  ">

										<span style="font-size: 23px;color: black; border-bottom: solid 1px;">Аренда коммерческих помещений</span>
									</div>

									<div class="row">
										<?php 
										$sql = "SELECT * FROM arenda_kom WHERE del=0";
										$res = $conn->query($sql);
										while ($row = $res->fetch_assoc()){
											echo '  <div class="col-lg-3 p-2">
											<div class="photo" data-toggle="modal" data-target=".bs-example-modal-lg'.$row['id'].'"><img src="admin/'.$row['photo'].'" style="border-radius:4px;" alt="" width="200" height="200"></div>
											</div>
											<div class="col-lg-7 mt-3" id="photo"><h5 style="font-size:24px;">'.$row['name'].'</h5><span style="font-size:18px;">'.$row['description'].'</span></div>
											<div class="col-lg-2 mt-5" style="font-size:20px;">'.$row['price'].' <span>$</span> </div><br/>

											<div class="modal fade bs-example-modal-lg'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
											<div class="modal-content">
											<div id="carousel-example-generic'.$row['id'].'" class="carousel slide" data-ride="carousel">



											<!-- Wrapper for slides -->
											<div class="carousel-inner">
											<div class="item active">
											<img class="img-responsive" src="admin/'.$row['photo1'].'" width="1000"  alt="...">
											<div class="carousel-caption">

											</div>
											</div>';

											if (!empty($row['photo2'])){
												echo '
												<div class="item">
												<img class="img-responsive" src="admin/'.$row['photo2'].'"  width="1000" alt="...">
												<div class="carousel-caption">

												</div>
												</div>';}
												if (!empty($row['photo3'])){
													echo '
													<div class="item">
													<img class="img-responsive" src="admin/'.$row['photo3'].'"  width="1000" alt="...">
													<div class="carousel-caption">

													</div>
													</div>';}
													echo '
													</div>

													<!-- Controls -->
													<a class="left carousel-control" href="#carousel-example-generic'.$row['id'].'" role="button" data-slide="prev">
													<span class="glyphicon glyphicon-chevron-left"></span>
													</a>
													<a class="right carousel-control" href="#carousel-example-generic'.$row['id'].'" role="button" data-slide="next">
													<span class="glyphicon glyphicon-chevron-right"></span>
													</a>
													</div>
													</div>
													</div>
													</div>




													';              }
													?>



												</div>
											</div>
										</div>
									</section>




									<section class="ftco-section bg-light">
										<div class="container">
											<div class="row">
												<div class="col-md-4">
													<div class="row">
														<div class="col-md-12 heading-section ftco-animate mb-3">
															<h1 class="mb-4" style="font-weight: 400;">Наши проекты</h1>
															<p>Лучшие предложения для вас  </p>
														</div>
													</div>
													<a  class="portfolio ftco-animate">
														<div class="d-flex icon justify-content-center align-items-center">

														</div>
														<div class="d-flex heading align-items-end">
															<h3>
																<br>

															</h3>
														</div>
														<img src="images/port/nur2.png" class="img-fluid" alt="">
													</a>
													<a  class="portfolio ftco-animate">
														<div class="d-flex icon justify-content-center align-items-center">

														</div>
														<div class="d-flex heading align-items-end">
															<h3>
                   <!--  <span></span><br>
                   	Work 02 -->
                   </h3>
               </div>
               <img src="images/port/inter/01.png" class="img-fluid" alt="">
           </a>
           <a  class="portfolio ftco-animate">
           	<div class="d-flex icon justify-content-center align-items-center">

           	</div>
           	<div class="d-flex heading align-items-end">
           		<h3>

           		</h3>
           	</div>
           	<img src="images/port/duman.jpg" class="img-fluid" alt="">
           </a>
       </div>
       <div class="col-md-8">
       	<a  class="portfolio ftco-animate">
       		<div class="d-flex icon justify-content-center align-items-center">

       		</div>
       		<div class="d-flex heading align-items-end">
       			<h3>
                    <!-- <span>Residence</span><br>
                    	Work 04 -->
                    </h3>
                </div>
                <img src="images/port/taurus.jpg" class="img-fluid" alt="">
            </a>
            <div class="row">
            	<div class="col-md-6">
            		<a  class="portfolio ftco-animate">
            			<div class="d-flex icon justify-content-center align-items-center">

            			</div>
            			<div class="d-flex heading align-items-end">
            				<h3>
                      <!--   <span>Residence</span><br>
                      	Work 05 -->
                      </h3>
                  </div>
                  <img src="images/port/inter/unnamed.jpg" class="img-fluid" alt="">
              </a>
          </div>
          <div class="col-md-6">
          	<a href="portfolio.html" class="portfolio ftco-animate">
          		<div class="d-flex icon justify-content-center align-items-center">

          		</div>
          		<div class="d-flex heading align-items-end"   >
          			<h3>

          			</h3>
          		</div>
          		<img src="images/port/inter/666.jpg"  class="img-fluid" alt="">
          	</a>
          </div>
      </div>
      <div class="row">
      	<div class="col-md-8">
      		<a href="portfolio.html" class="portfolio ftco-animate">
      			<div class="d-flex icon justify-content-center align-items-center">

      			</div>
      			<div class="d-flex heading align-items-end">
      				<h3>

      				</h3>
      			</div>
      			<img src="images/port/nurlytau.png" class="img-fluid" alt="">
      		</a>
      	</div>
      	<div class="col-md-4">
      		<a href="portfolio.html" class="portfolio ftco-animate">
      			<div class="d-flex icon justify-content-center align-items-center">

      			</div>
      			<div class="d-flex heading align-items-end">
      				<h3>

      				</h3>
      			</div>
      			<img src="images/port/salem.jpg" class="img-fluid" alt="" style="height: 355px;">
      		</a>
      	</div>
      </div>
  </div>

</div>

</div>

<div id="logo"></div>
</section>




<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">

		<div class="row">
			<div class="col-md-12 text-center">

				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					&copy;<script>document.write(new Date().getFullYear());</script> Все права защищены  <a href="№" target="_blank"></a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>

	<!-- loader -->

</div>

<!-- Modal -->

</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/main.js"></script>
<!-- Скрипт переключения между предложениями -->
<script>
	var div1 = document.getElementById('arenda_kom');
	var div2 = document.getElementById('sale_kom');
	var div3 = document.getElementById('sale_jil');
	var photo = document.getElementById('photo');
	function ak(){

		div1.style.display="block";
		div2.style.display="none";
		div3.style.display="none";

	}

	function pk(){
		div1.style.display="none";
		div2.style.display="block";
		div3.style.display="none";
	}

	function pj(){
		div1.style.display="none";
		div2.style.display="none";
		div3.style.display="block";
	}


</script>
</body>
</html>