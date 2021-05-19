
        <?php
        $host = '127.0.0.1'; 
        $database = 'laba5'; 
        $user = 'root'; 
        $password = 'root';
        ?>

        <?php
        $conn = new mysqli($host, $user, $password, $database);
        if ($conn->connect_error) 
        { 
            die("Ошибка: ".$conn->connect_error);
        }

        $search = $_POST['search'];
        $sql = "SELECT * FROM `account` WHERE `Фамилия` like '%".$search."%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            print ("
            <style>
                table 
                {
                    border-collapse: collapse;
                }   
                th, td 
                {
                    border: 2px solid black;
                    padding: 15px;
                }
            </style>
            <table>
                <tr><th>Id</th><th>Имя</th><th>Фамилия</th><th>Отчество</th><th>Email</th><th>Телефон</th><th>Город</th><th>Страна</th><th>Цвет</th><th>Тип</th><th>Доставка</th></tr>");
            while($row = $result->fetch_assoc()) 
            { 
                print ("<tr><td>".$row["id"]."</td><td>".$row["Имя"]."</td><td>".$row["Фамилия"]."</td><td>".$row["Отчество"]."</td><td>".$row["Email"]."</td><td>".$row["Телефон"]."</td><td>".$row["Город"]."</td><td>".$row["Страна"]."</td><td>".$row["Цвет"]."</td><td>".$row["Тип"]."</td><td>".$row["Доставка"]."</td></tr>");
            }
            print ("</table><br><br>");
        } 
        else 
        {
            print ("Нет результатов<br><br>");
        }
        $conn->close();
        ?>

        <a href="index.php"><input type="submit" value="На главную"></a>
