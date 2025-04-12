<?php
// Загружаем XML-файл и проверяем его наличие
$xml = simplexml_load_file('data.xml') or die("Ошибка загрузки XML");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Каталог товаров</title>
</head>
<body>
<h1>Каталог товаров</h1>
<ul>
<?php
// Перебираем все товары в XML и выводим их списком
foreach ($xml->product as $product) {
    echo "<li>ID: $product->id | Название: $product->name | Цена: $product->price руб.</li>";
}
?>
</ul>
</body>
</html>
