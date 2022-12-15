<?php include_once 'PHPWord.php'; //подключение библиотеки
                        $word = new PHPWord(); //создание документа
                        // New portrait section
                        $document = $word->loadTemplate('Kuply.docx'); //загрузка шаблона документа
                        $document->setValue('DateNow', $a); //заполнение метки значением
                        $document->setValue('familia', $Familka);
                        $document->setValue('imia', $Imka);
                        $document->setValue('otchestvo', $Otchek);
                        $document->setValue('mark', $modelviv);
                        $document->setValue('VIN', $VINO); 
                        $document->setValue('Year', $godik);
                        $document->setValue('probeg', $Prob); 
                        $document->setValue('dvigatel', $Engine);
                        $document->setValue('color', $Cvetok); 
                        $document->save('Kuplya_vih.docx'); //сохранение файла в файловой системе bitrix
            ?>