<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1">
        <title>Ввод данных</title>
    </head>
    <body>
         
          <form method="get">
            <lable>Введите имя</lable> <br>
            <input type = "text" name = "name"> <br>

            <lable>Введите номер телефона</lable> <br>
            <input type = "text" name = "number"> <br>
            <br>
            <input type = "submit" name = "formSubmit" value = "Отправить">
          </form>
          
          <?php
          if (isset($_GET['formSubmit'])) {
          $nameform=$_GET['name'];
          $numberform=$_GET['number'];
          $mysql = mysqli_connect('localhost', 'root', '', 'user');
          if ($mysqli->connect_errno) {
          echo "Извините, возникла проблема";
          exit;
          }
          $name='"'.$mysqli->real_escape_string($nameform).'"';
          $number='"'.$mysqli->real_escape_string($numberform).'"';
          $query = "INSERT INTO `user` (`name`, `number`) VALUES ($name,$number)";
          $result = $mysqli->query($query);
          if($result){
          print('Успешно!''<br>');
          }
          $mysqli->close();
          }

        ?>
          
    </body>
</html>