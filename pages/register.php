<?php
$title = 'Регистрация';
require_once '../templates/header.php';

$query = "SELECT users.id, users.login, users.name, users.city_id, cities.name as gorod FROM fullstack2.users LEFT JOIN cities ON users.city_id = cities.id;";
$res = $pdo->query($query);
$users = $res->fetchAll();

$query = "SELECT * FROM cities";
$res = $pdo->query($query);
$cities = $res->fetchAll();
?>
            <form method="POST" action="../actions/form.php">
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
            <?php
require_once '../templates/footer.php';
?>