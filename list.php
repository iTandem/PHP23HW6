<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Список тестов</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Список тестов</h1>
    <nav>
        <ul>
            <li><a href="admin.php" title="Загрузка теста">Загрузка теста</a></li>
            <li>Список тестов</li>
        </ul>
    </nav>
    <hr>
    <?php
        $testsPath = 'tests/tests.json';
        if (file_exists($testsPath)) {
            $json = file_get_contents($testsPath);
            $data = json_decode($json, true);
            foreach ($data as $test) {
                echo '<p><a href="test.php?id='.$test['id'].'">'.
                    $test['id'].'. '.$test['name'].'</a></p>';
            }
        }
        else {
            echo '<p class="alert">Список тестов пуст!</p>';
        }
    ?>
</div>
</body>
</html>
    /**
     * Created by PhpStorm.
     * User: konstantin
     * Date: 16.05.2018
     * Time: 11:50
     */