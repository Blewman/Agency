<?php 
include_once 'db.php';
// Подключение файла соединения с БД
// При нажатии кнопки редактировать/обновить запись
if(isset($_POST['upd_arenda_kom'])){
	// Проверка на пустоту перменной 
	// Если переменная содержит данные то присвоить данные из формы к переменным
	$id=$_POST['id'];
	$name=$_POST['name'];
	$descr=$_POST['descr'];
	$price=$_POST['price'];

	$upd="UPDATE arenda_kom SET name='$name', description = '$descr', price='$price' WHERE id='$id' ";
	// SQL запрос Обновить записть в таблице arenda_kom Задать новые данные в переменные где id соотвествует полученному
	$updd = $conn->query($upd);
	// Обработка запроса
	if ($updd){
		// Если запрос выполнен
		header('Location: typography.php');
		// Перенаправить на страницу со всеми записями 
	}else{
		// В случае если запрос не выполнен вывести сообщение error
		echo "error";
	}
}
 if(isset($_POST['upd_prodaja_kom'])){
 	// При нажатии кнопки редактировать/обновить запись
	// Проверка на пустоту перменной 
	// Если переменная содержит данные то присвоить данные из формы к переменным
	$id=$_POST['id'];
	$name=$_POST['name'];
	$descr=$_POST['descr'];
	$price=$_POST['price'];

	$upd="UPDATE kom_predl SET name='$name', description = '$descr', price='$price' WHERE id='$id' ";
	// SQL запрос Обновить записть в таблице kom_predl Задать новые данные в переменные где id соотвествует полученному
	$updd = $conn->query($upd);
	// Обработка запроса
	if ($updd){
		// Если запрос выполнен
		header('Location: typography.php');
		// Перенаправить на страницу со всеми записями 
	}else{
		echo "Ошибка";
		// В обратном случае вывести сообщение  "Ошибка"
	}
}

 if(isset($_POST['upd_prodaja_jil'])){
 	 	// При нажатии кнопки редактировать/обновить запись
	// Проверка на пустоту перменной 
	// Если переменная содержит данные то присвоить данные из формы к переменным
	$id=$_POST['id'];
	$name=$_POST['name'];
	$descr=$_POST['descr'];
	$price=$_POST['price'];

	$upd="UPDATE sale_jil SET name='$name', description = '$descr', price='$price' WHERE id='$id' ";
	// SQL запрос Обновить записть в таблице sale_jil Задать новые данные в переменные где id соотвествует полученному
	$updd = $conn->query($upd);
	// Обработка запроса
	if ($updd){
		// Если запрос выполнен
		header('Location: typography.php');
		// Перенаправить на страницу со всеми записями 
	}else{
		echo "Ошибка";
		// В обратном случае вывести сообщение  "Ошибка"
	}
}
 ?>
