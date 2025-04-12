<?php
// Создаем объект DOMDocument для работы с XML
$xml = new DOMDocument;
$xml->load('data.xml'); // Загружаем XML-файл

// Создаем объект DOMDocument для работы с XSL
$xsl = new DOMDocument;
$xsl->load('style.xsl'); // Загружаем XSL-файл

// Создаем XSLT-процессор
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // Импортируем XSL в процессор

echo $proc->transformToXML($xml); // Применяем XSLT к XML и выводим результат
?>
