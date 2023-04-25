<!DOCTYPE html>
<html>
<head>
	<title>Регулярные выражения</title>
</head>
<body>
	<?php include 'regular12.php'; ?>
	<form method="POST">
		<p><b>Из полного имени файла (например, picture.jpg) получите его расширение (например, jpg)</b></p>
		<p><input name="expansion" value="<?= isset($_POST['expansion']) ? $_POST['expansion']:''?>"></p>
		<p><input type="submit"></p>
		<?php 
		if(!empty($_POST['expansion'])){ 
			$var1=$_POST['expansion']; 
			echo expansion($var1); 
		} 
		else{ 
			echo "Введите данные"; 
		}
		?>


        <p><b>По полному имени файла проверьте соответствует ли оно: а) архиву, б) аудиофайлу, в) видеофайлу, г) картинке</b></p>
		<p><input name="file_name" value="<?= isset($_POST['file_name']) ? $_POST['file_name']:''?>"></p>
		<p><input type="submit"></p>
		<?php 
		if(!empty($_POST['file_name'])){ 
			$var2=$_POST['file_name']; 
			echo file_name($var2); 
		} 
		else{ 
			echo "Введите данные"; 
		}
		?>

        <p><b>В произвольном HTML-коде найдите строку, заключенную в теги title</b></p>
		<p><input name="tags" value="<?= isset($_POST['tags']) ? $_POST['tags']:''?>"></input></p>
		<p><input type="submit"></p>
		<?php 
		if(!empty($_POST['tags'])){ 
			$var3=$_POST['tags']; 
			echo tags($var3); 
		} 
		else{ 
			echo "Введите данные"; 
		}
		?>

		<p><b>В произвольном HTML-коде найдите все ссылки в тегах <a> (атрибут href)</b></p>
		<p><input name="href" value="<?= isset($_POST['href']) ? $_POST['href']:''?>"></input></p>
		<p><input type="submit"></p>
		<?php 
		if(!empty($_POST['href'])){ 
			$var4=$_POST['href']; 
			echo href($var4); 
		} 
		else{ 
			echo "Введите данные"; 
		}
		?>

		<p><b>В произвольном HTML-коде найдите все ссылки на картинки в тегах img (атрибут src)</b></p>
		<p><textarea name="Pictures" value="<?= isset($_POST['Pictures']) ? $_POST['Pictures']:''?>"></textarea></p>
		<p><input type="submit"></p>
		<?php 
		if(!empty($_POST['Pictures'])){ 
			$var5=$_POST['Pictures']; 
			echo Pictures($var5); 
		} 
		else{ 
			echo "Введите данные"; 
		}
		?>

		<p><b>В произвольном тексте найдите и подсветите с помощью тега <strong> заданную строку</b></p>
		<p><textarea name="text" value="<?= isset($_POST['text']) ? $_POST['text']:''?>"></textarea></p>
		<p><textarea name="str" value="<?= isset($_POST['str']) ? $_POST['str']:''?>"></textarea></p>
		<p><input type="submit"></p>
		<?php 
		if(!empty($_POST['text']) && !empty($_POST['str'])){
			$var6=$_POST['text']; 
			$var7=$_POST['str']; 
			echo string_strong($var6, $var7); 
		} 
		else{ 
			echo "Введите данные"; 
		}
		?>

		<p><b>В произвольном тексте найдите определенный набор текстовых смайликов :), ;), :(на соответствующие им картинки </b></p>
		<p><textarea name="Smiles" value="<?= isset($_POST['Smiles']) ? $_POST['Smiles']:''?>"></textarea></p>
		<p><input type="submit"></p>
		<?php
		 if(!empty($_POST['Smiles'])){
			$var8=$_POST['Smiles']; 
			echo Smiles($var8);
		}
		else{ 
			echo "Введите данные"; 
		}
		?>
		

		<p><b>В заданной строке избавьтесь от случайных повторяющихся пробелов</b></p>
		<p><input name="probel" value="<?= isset($_POST['probel']) ? $_POST['probel']:''?>"></input></p>
		<p><input type="submit"></p>
		<?php
		if(!empty($_POST['probel'])){
			$var9=$_POST['probel']; 
			echo probel($var9); 
		} 
		else{ 
			echo "Введите данные"; 
		}
		?>

</form>
</body>
</html>