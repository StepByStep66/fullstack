<?php
$title = 'Список пользователей';
require_once '../../templates/header.php';

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
            <th></th>
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
            <td>
                <a href='pages/user.php?id={$user['id']}'>
                    {$user['name']}
                </a>
            </td>
            <td>{$city}</td>
            <td class='text-center'>
                <form method='post' action='actions/del_user.php'>
                    <input type='hidden' name='id' value='{$user['id']}'>
                    <button type='submit' class='btn btn-danger'>x</button>
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
<?php
require_once '../../templates/footer.php';
?>