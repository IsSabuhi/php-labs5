
<?php
$host = '127.0.0.1'; 
$database = 'laba5'; 
$user = 'root'; 
$password = 'root';
 require_once 'created.php';
 $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка ".mysqli_error($link));

if (isset($_POST['name']) && 
    isset($_POST['second_name']) && 
    isset($_POST['otche']) && 
    isset($_POST['email']) && 
    isset($_POST['phone']) && 
    isset($_POST['city']) && 
    isset($_POST['country']) &&
    isset($_POST['color'])&&
    isset($_POST['tip'])&&
    isset($_POST['dost'])
    )

{ 
    $db_table = "account";

    $name = $_POST['name'];
    $second_name = $_POST['second_name'];
    $otche = $_POST['otche'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $color = $_POST['color'];
    $tip = $_POST['tip'];
    $dost = $_POST['dost'];

    $mysqli = new mysqli($host,$user,$password,$database);
    if ($mysqli->connect_error) 
    {
        die('Ошибка: ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
    }

    $result = $mysqli -> query("INSERT INTO ".$db_table." (Имя,Фамилия,Отчество,Email,Телефон,Город,Страна,Цвет,Тип,Доставка) VALUES ('$name','$second_name','$otche','$email','$phone','$city','$country','$color','$tip','$dost')");
    if ($result == true)
    {
        print ("Ваш заказ оформлен");
    }
    else
    {
        print ("Ошибка" .mysqli_error($link));
    }
}

print ('<br><a href="index.php"><input type="button" value="Назад"></a>');
?>
