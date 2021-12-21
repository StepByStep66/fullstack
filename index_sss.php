<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class='container mt-5'>

<?php

include 'db.php';

$query = "SELECT users.id, users.login, users.name, users.city_id, cities.name as gorod FROM fullstack2.users LEFT JOIN cities ON users.city_id = cities.id;";
$res = $pdo->query($query);
$users = $res->fetchAll();

$query = "SELECT * FROM cities";
$res = $pdo->query($query);
$cities = $res->fetchAll();

echo "
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>id</th>
            <th>Логин</th>
            <th>Имя</th>
            <th>id города</th>
            <th>Действие</th>
        </tr>
    </thead>
    <tbody>
";

foreach ($users as $user) {
    // if ($user['city_id']) {
    //     $city = $user['city_id'];
    // } else {
    //     $city = '-';
    // }

    $city = $user['city_id'] ? $user['gorod'] : '-';

    echo "
        <tr>
            <td>{$user['id']}</td>
            <td>{$user['login']}</td>
            <td>{$user['name']}</td>
            <td>{$city}</td>
            <td>
                <form method='post' action='actions/del_user.php'>
                <input type='hidden' name='id' value='{$user['id']}'>
                    <button class='btn btn-danger'>x</button>
                </form>
            </td>
        </tr>
    ";
}

echo "</tbody>
</table>";

?>

            <form method="POST" action="form.php">
                <input required class="form-control mb-2" placeholder="Имя" name='name'>
                <input class="form-control mb-2" placeholder="Логин" name='login'>
                <input class="form-control mb-2" type="password" placeholder="Пароль" name='password'>
                <select class="form-control mb-2" name="city_id">
                    <option selected disabled>-- Выберите город --</option>
                    <?php
                        foreach ($cities as $city) {
                            echo "<option value='{$city['id']}'>{$city['name']}</option>";
                        }
                    ?>
                </select>
                <button type="submit" class="btn btn-success w-100">Отправить</button>
            </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>