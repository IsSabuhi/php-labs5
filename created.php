<?php
$host = '127.0.0.1'; 
$database = 'laba5'; 
$user = 'root'; 
$password = 'root';
?>

<?php
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка ".mysqli_error($link));

$query ="CREATE Table if not exists account
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Имя VARCHAR(200) NOT NULL,
    Фамилия VARCHAR(200) NOT NULL,
    Отчество VARCHAR(200) NOT NULL,
    Email VARCHAR(200) NOT NULL,
    Телефон BIGINT(20) NOT NULL,
    Город VARCHAR(200) NOT NULL,
    Страна VARCHAR(200) NOT NULL,
    Цвет VARCHAR(200) NOT NULL,
    Тип VARCHAR(200) NOT NULL,
    Доставка VARCHAR(200) NOT NULL
)";
$result = mysqli_query($link, $query) or die("Ошибка ".mysqli_error($link));
if($result)
{
    print ("");
}
else
{
    print ("Таблица не существует<br>");
}
$query = 'ALTER TABLE `account` ADD UNIQUE(`Фамилия`);'; 
mysqli_close($link);
?>