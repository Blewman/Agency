<?php
include_once 'db.php';
// Подключение файла с соединением к БД
ini_set('display_errors','On');
// Включение вывода всех ошибок и предупреждений в коде PHP-скриптов
error_reporting(E_ALL | E_STRICT);
// Выводить все ошибки кроме E_Strict (Включаются для того, чтобы PHP предлагал изменения в коде, которые обеспечат лучшее взаимодействие и совместимость кода.)
//Обработка
	 if(isset($_POST['upload'])){
	 	// Если нажата кнопка создать обьявление 
	 	// Проверка на пустоту переменной , если переменная не пуста , присвоить данные к пеменным
	 		$name = $_POST['name'];
	 		$desc = $_POST['desc'];
	 		$u = $_POST['u'];
	 		// Уникальный id обьявления
	 		$price = $_POST['price'];
	 		// Цена

			$desc=$conn->real_escape_string($desc);
			$name=$conn->real_escape_string($name);
			$u=$conn->real_escape_string($u);
			$price=$conn->real_escape_string($price);
			// использование real_escape sctring - Заданная строка кодируется в экранированную SQL строку, используя текущий набор символов подключения.
	 	//Запрещенные к загрузке файлы. Подтягивает из тхт файла и создаем массив
		$data = file_get_contents('data.txt'); 
		$blacklist = explode("\r\n", $data); 

		//Проверка соответствия загруженного аудиофайла и блэклиста
		foreach($blacklist as $item):
			if(preg_match("/$item$/", $_FILES['file_name']['name'])) exit('Расширение файла не подходит!'); 
		endforeach; 
		//Проверка загружаемого файла через тип MIME
		$type = getimagesize($_FILES['file_name']['tmp_name']);
	
		//Проверка. Если есть тип и он равен одному из разрешенных для загрузки типов, то идем дальше
		if($type && ($type['mime'] == 'image/png' || $type['mime'] == 'image/jpg' || $type['mime'] == 'image/jpeg')){
			
			//Проверка на соответствие определенного размера
			if($_FILES['file_name']['size'] < 1000000 * 1024){
				
				$upload = 'images/'.$_FILES['file_name']['name'];
				
				//Если директория для загрузки существует - загружаем файл 
				if(file_exists('images/')){
											
			          if(move_uploaded_file($_FILES['file_name']['tmp_name'], $upload)) { 
			          // После загрузки файла  выполняем sql запрос Записи данных в таблицу
			          			          $img_save  = "INSERT INTO sale_jil (`uid`,`name`,`photo`,`photo1`,`photo2`,`photo3`,`description`,`price`,`del`) VALUES ('$u','$name','$upload','0','0','0','$desc','$price','0')";
			         $s=$conn->query($img_save);
			         // Обработка запроса
			         	if ($s) {
			         	 	header('Location: index.php');
			         		// Перенаправление на страницу index
			         	}else{
			         		echo "error";
			         		// В случае не выполнения запроса вывести сообщение error
			         	}
			      }
			      // В случае если фото не загружено (не подходящий формат фото) вывести сообщение "Ошибка при загрузке"
				          else {echo 'Ошибка при загрузке'; } 
				}
				// Если директории не существует , То создаем директорию 
				else { 
					mkdir("images/");
					// загружаем файл
				          if(move_uploaded_file($_FILES['file_name']['tmp_name'], $upload))  echo 'Файл успешно загружен!'; 
				          else echo 'Ошибка при загрузке';  
				          // Используем функцию move_upload_file для загрузки фото
				          // Если файл успешно загружен выводим сообщение "Файл успешно загружен", В противном случае "ошибка"
				}
			}
			else echo 'Файл большого объема'.'<br>'; 
		}

		else exit('Тип файла не подходит'.'<br>'); 



	// 2

//  Аналогично загружаются фото в слайдер

			foreach($blacklist as $item):
			if(preg_match("/$item$/", $_FILES['file_name1']['name'])) exit('Расширение файла не подходит!'); 
		endforeach; 
		//Проверка загружаемого файла через тип MIME
		$type = getimagesize($_FILES['file_name1']['tmp_name']);
	
		//Проверка. Если есть тип и он равен одному из разрешенных для загрузки типов, то идем дальше
		if($type && ($type['mime'] == 'image/png' || $type['mime'] == 'image/jpg' || $type['mime'] == 'image/jpeg')){
			
			//Проверка на соответствие определенного размера
			if($_FILES['file_name1']['size'] < 1000000 * 1024){
				
				$upload1 = 'images/'.$_FILES['file_name1']['name'];
				
				//Если директория для загрузки существуем - грузим, если нет - то создаем и грузим. 
				if(file_exists('images/')){
											
			          if(move_uploaded_file($_FILES['file_name1']['tmp_name'], $upload1)) { 
			          
			          			          $img_save  = "UPDATE  sale_jil SET photo1='$upload1' WHERE uid='$u'";
			         $s=  $conn->query($img_save);
			         	if ($s) {
			         	 	header('Location: index.php');
			         		# code...
			         	}else{
			         		echo "error";
			         	}
			      }
				          else {echo 'Ошибка при загрузке'; } 
				}
				else { 
					mkdir("images/");
					//Перемещаем
				          if(move_uploaded_file($_FILES['file_name1']['tmp_name'], $upload))  echo 'Файл успешно загружен! 2'; 
				          else echo 'Ошибка при загрузке';  
				}
			}
			else echo 'Файл большого объема'.'<br>'; 
		}
		// 3

			foreach($blacklist as $item):
			if(preg_match("/$item$/", $_FILES['file_name2']['name'])) exit('Расширение файла не подходит!'); 
		endforeach; 
		//Проверка загружаемого файла через тип MIME
		$type = getimagesize($_FILES['file_name2']['tmp_name']);
	
		//Проверка. Если есть тип и он равен одному из разрешенных для загрузки типов, то идем дальше
		if($type && ($type['mime'] == 'image/png' || $type['mime'] == 'image/jpg' || $type['mime'] == 'image/jpeg')){
			
			//Проверка на соответствие определенного размера
			if($_FILES['file_name2']['size'] < 1000000 * 1024){
				
				$upload2 = 'images/'.$_FILES['file_name2']['name'];
				
				//Если директория для загрузки существуем - грузим, если нет - то создаем и грузим. 
				if(file_exists('images/')){
											
			          if(move_uploaded_file($_FILES['file_name2']['tmp_name'], $upload2)) { 
			          
			          			          $img_save  = "UPDATE  sale_jil SET photo2='$upload2' WHERE uid='$u'";
			         $s=  $conn->query($img_save);
			         	if ($s) {
			         	 	header('Location: index.php');
			         		# code...
			         	}else{
			         		echo "error";
			         	}
			      }
				          else {echo 'Ошибка при загрузке'; } 
				}
				else { 
					mkdir("images/");
					//Перемещаем
				          if(move_uploaded_file($_FILES['file_name2']['tmp_name'], $upload))  echo 'Файл успешно загружен! 2'; 
				          else echo 'Ошибка при загрузке';  
				}
			}
			else echo 'Файл большого объема'.'<br>'; 
		}
		// 4
foreach($blacklist as $item):
			if(preg_match("/$item$/", $_FILES['file_name3']['name'])) exit('Расширение файла не подходит!'); 
		endforeach; 
		//Проверка загружаемого файла через тип MIME
		$type = getimagesize($_FILES['file_name3']['tmp_name']);
	
		//Проверка. Если есть тип и он равен одному из разрешенных для загрузки типов, то идем дальше
		if($type && ($type['mime'] == 'image/png' || $type['mime'] == 'image/jpg' || $type['mime'] == 'image/jpeg')){
			
			//Проверка на соответствие определенного разрешенныхазмера
			if($_FILES['file_name3']['size'] < 1000000 * 1024){
				
				$upload3 = 'images/'.$_FILES['file_name3']['name'];
				
				//Если директория для загрузки существуем - грузим, если нет - то создаем и грузим. 
				if(file_exists('images/')){
											
			          if(move_uploaded_file($_FILES['file_name3']['tmp_name'], $upload3)) { 
			          
			          			          $img_save  = "UPDATE sale_jil SET photo3 = '$upload3' WHERE uid='$u' ";
			         $s=  $conn->query($img_save);
			         	if ($s) {
			         	 	header('Location: index.php');
			         		# code...
			         	}else{
			         		echo "error";
			         	}
			      }
				          else {echo 'Ошибка при загрузке'; } 
				}
				else { 
					mkdir("images/");
					//Перемещаем
				          if(move_uploaded_file($_FILES['file_name3']['tmp_name'], $upload1))  echo 'Файл успешно загружен! 2'; 
				          else echo 'Ошибка при загрузке';  
				}
			}
			else echo 'Файл большого объема'.'<br>'; 
		}


	}
//Вывод всех аудиофайлов
?>
