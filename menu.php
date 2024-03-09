<input type="checkbox" class="menu-icon" id="menu-icon" name="menu-icon">
<label for="menu-icon"></label>
<nav class="nav">
    <ul class="pt-5">
        <li><a href="http://localhost/social/">Главная</a></li>
        <?php
        // isset — Определяет, была ли установлена переменная значением, отличным от null
        if (isset($_SESSION['id'])) {
            echo '<li><a href="http://localhost/Social/profile/accaunt.php">Личный кабинет</a></li>';
        } else {
            echo '<li><a href="http://localhost/Social/auth.php">Личный кабинет</a></li>';
        }
        ?>
        <li><a href="">Чат</a></li>
        <li><a href="">Новости</a></li>
    </ul>
</nav>