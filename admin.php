<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Загрузка файла</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Загрузка теста</h1>
    <nav>
        <ul>
            <li>Загрузка теста</li>
            <li><a href="list.php" title="Список тестов">Список тестов</a></li>
        </ul>
    </nav>
    <hr>
    
    <form action="admin.php" enctype="multipart/form-data" method="post">
        <label>Выберите файл</label>
        <input type="file" name="file"><br>
        <input type="submit" name="submit" value="Загрузить">
    </form>
    <?php
        if (isset($_FILES['file'])) {
            
            $type = $_FILES['file']['type'];
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $extension = array_pop(explode('.', $name));
            {
                move_uploaded_file($tmpName, 'tests/tests.json');
                header("Location: list.php");
            }
        }
    ?>
</div>
</body>
</html>
    /**
     * Created by PhpStorm.
     * User: konstantin
     * Date: 16.05.2018
     * Time: 11:49
     */