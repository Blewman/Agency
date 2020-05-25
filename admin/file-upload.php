<?php
include_once 'db.php';
ini_set('display_errors','On');
error_reporting(E_ALL | E_STRICT);
//Обработка
	 if(isset($_POST['upload'])){
	 		$desc = $_POST['desc'];
	 		$adress = $_POST['adress'];
	 		$tel = $_POST['tel'];
			$descr=$conn->real_escape_string($desc);
			$adress=$conn->real_escape_string($adress);
			$tel=$conn->real_escape_string($tel);

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
				
				//Если директория для загрузки существует - грузим, если нет - то создаем и грузим. 
				if(file_exists('images/')){
											
			          if(move_uploaded_file($_FILES['file_name']['tmp_name'], $upload)) { 
			          
			          			          $img_save  = "INSERT INTO p_img (`dest`,`name`,`adress`,`tel`) VALUES ('$upload','$descr','$adress','$tel')";
			         $s=  $conn->query($img_save);
			         	if ($s) {
			         	 	header('Location: portfolio.php');
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
				          if(move_uploaded_file($_FILES['file_name']['tmp_name'], $upload))  echo 'Файл успешно загружен! 2'; 
				          else echo 'Ошибка при загрузке';  
				}
			}
			else echo 'Файл большого объема'.'<br>'; 
		}
		else exit('Тип файла не подходит'.'<br>'); 



	}

?>
