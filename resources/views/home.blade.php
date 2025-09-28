<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Шапка -->
    <header>
        <div class="logo">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Логотип">
        </div>
        <nav>
            <ul class="main-menu">
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('array') }}">Каталог</a></li>
            </ul>
        </nav>
    </header>

    <!-- Контентная часть -->
    <main>
        <div class="content">
            <h1>Энгри бердс</h1>
            <img src="{{ Vite::asset('resources/images/main-image.png') }}" alt="Основное изображение">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </main>

    <!-- Подвал -->
    <footer>
        <div class="footer-content">
            <p>&copy; Сурков Дмитрий Евгеньевич 2025</p>
        </div>
    </footer>
</body>
</html>