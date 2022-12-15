<?php

include_once 'PHPWord.php'; //подключение библиотеки
$word = new PHPWord(); //создание документа
// New portrait section
$section = $word->createSection();
$connectio=mysqli_connect('localhost','root','','jdmtest');

if (!$connectio) {
                    die("Ошибка: " . mysqli_connect_error());
                    }
                    $categories = mysqli_query($connectio, "SELECT * FROM `orka`");
                    while( $id = mysqli_fetch_assoc($categories) )
                {



	$section->addText('${IDz}');
$section->addTextBreak(2);
$objWriter = PHPWord_IOFactory::createWriter($word, 'Word2007');
$objWriter->save('TesetViv_.docx');
$document = $word->loadTemplate('TesetViv_.docx'); //загрузка шаблона документа
	$document->setValue('IDz', $id['OrderID']); //заполнение метки значением
	
	$document->save('TesetViv_1.docx'); //сохранение файла в файловой системе bitrix
		

	//--------------------------------------------


	

}

?>
