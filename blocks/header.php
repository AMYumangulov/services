<div class="container">

    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">

            <span class="fs-4">Services</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="../services.php">Мои услуги</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="#">Мои записи</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="/">Все услуги</a>
        </nav>
        <?php
        if ($_COOKIE["user"] == ''):
            ?>
            <a class="btn btn-outline-primary" href="../pages/login.php">Войти</a>
        <?php else: ?>
            <a class="btn btn-outline-primary" href="../valid/exit.php">Выйти</a>
        <?php endif; ?>
    </div>
</div>