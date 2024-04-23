<?php
if (isset($_SESSION['user_id'])) {
    $user = $_SESSION['username'];
} else {
    $user = '';
}
?>

<nav class="py-2 border-bottom bg-dark">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="/" class="nav-link px-2 <?= urlIs('/') ? 'text-white fw-bold' : 'text-secondary fw-bold' ?> ">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle px-2 <?= urlIs('/html') ? 'text-white fw-bold' : (urlIs('/css') ? 'text-white fw-bold' : (urlIs('/js') ? 'text-white fw-bold' : 'text-secondary fw-bold')) ?> " data-bs-toggle="dropdown" aria-expanded="false">Free Courses</a>
                <ul class="dropdown-menu" data-bs-theme="dark">
                    <li><a class="dropdown-item" href="/html"><i class="fab fa-html5" style="color: #e34c26;"></i>
                            HTML</a>
                    </li>
                    <li><a class="dropdown-item" href="/css"><i class="fab fa-css3-alt" style="color: #264de4;"></i>
                            CSS</a></li>
                    <li><a class="dropdown-item" href="/js"><i class="fab fa-js-square" style="color: #f7df1e;"></i>
                            JS</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle px-2 <?= has($user) ? urlIs('/html') ? 'text-white fw-bold' : (urlIs('/css') ? 'text-white fw-bold' : (urlIs('/js') ? 'text-white fw-bold' : 'text-secondary fw-bold')) : 'd-none' ?> " data-bs-toggle="dropdown" aria-expanded="false">Paid Courses</a>
                <ul class="dropdown-menu" data-bs-theme="dark">
                    <li><a class="dropdown-item" href="/html"><i class="fab fa-html5" style="color: #e34c26;"></i>
                            HTML</a>
                    </li>
                    <li><a class="dropdown-item" href="/css"><i class="fab fa-css3-alt" style="color: #264de4;"></i>
                            CSS</a></li>
                    <li><a class="dropdown-item" href="/js"><i class="fab fa-js-square" style="color: #f7df1e;"></i>
                            JS</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="/about" class="nav-link px-2 <?= urlIs('/about') ? 'text-white fw-bold' : 'text-secondary fw-bold' ?> ">About</a>
            </li>
        </ul>
        <ul class="nav gap-3">
            <?php if ($user) : ?>
                <li class="nav-item"><a href="/dashboard" class="btn btn-dark fw-semibold"><?= $user ?></a></li>
                <li class="nav-item"><a href="/logout" class="btn btn-light fw-bolder">Logout</a></li>
            <?php endif; ?>
            <?php if (!$user) : ?>
                <li class="nav-item"><a href="/register" class="btn btn-dark fw-semibold">Register</a></li>
                <li class="nav-item"><a href="/login" class="btn btn-light fw-bolder">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>