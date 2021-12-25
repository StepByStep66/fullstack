<?php
$title = 'Регистрация';
require_once '../templates/header.php';

$query = "SELECT users.id, users.login, users.name, users.city_id, cities.name as gorod FROM fullstack2.users LEFT JOIN cities ON users.city_id = cities.id;";
$res = $pdo->query($query);
$users = $res->fetchAll();

$query = "SELECT * FROM cities";
$res = $pdo->query($query);
$cities = $res->fetchAll();

if (isset($_SESSION['registerError'])) {
    echo 
    "
    <div class='alert alert-warning text-center' role='alert'>
        {$_SESSION['registerError']}
    </div>
    ";
    unset($_SESSION['registerError']);
};

if (isset($_SESSION['error'])) {
    echo 
    "
    <div class='alert alert-danger text-center' role='alert'>
        Ошибка: {$_SESSION['error']}
    </div>
    ";
    unset($_SESSION['error']);
} else if (isset($_SESSION['success'])) {
    echo 
    "
    <div id='alertSuccess' class='alert alert-success text-center' role='alert'>
        Сохранено успешно
    </div>
    ";
    unset($_SESSION['success']);
}

?>
            <form method="POST" action="../actions/register.php">
                <input required class="form-control mb-2" placeholder="Имя" name='name'>
                <input class="form-control mb-2" placeholder="Логин" name='login'>
                <input class="form-control mb-2" type="password" placeholder="Пароль" name='password'>
                <input class="form-control mb-2" type="password" placeholder="Подтвердите пароль" name='repassword'>
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