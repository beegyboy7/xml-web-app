<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $xml = simplexml_load_file('data.xml'); // Загружаем XML-файл
    $newProduct = $xml->addChild("product"); // Добавляем новый товар
    $newProduct->addChild("id", $_POST['id']); // Устанавливаем ID
    $newProduct->addChild("name", $_POST['name']); // Устанавливаем название
    $newProduct->addChild("price", $_POST['price']); // Устанавливаем цену
    $xml->asXML('data.xml'); // Сохраняем изменения
    echo "Товар успешно добавлен!";
}
?>
