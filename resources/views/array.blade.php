<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы товаров</title>
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
                <li><a href="{{ route('array') }}">Массивы</a></li>
            </ul>
        </nav>
    </header>

    <!-- Контентная часть -->
    <main>
        <div class="products-grid">
            <h1>Наши товары</h1>
            <div class="products-container">
                @foreach($array as $product)
                <div class="product-card">
                    <img src="{{ Vite::asset('resources/images/' . $product['path']) }}" alt="{{ $product['title'] }}">
                    <h3>{{ $product['title'] }}</h3>
                    <p class="price">{{ $product['price'] }} руб.</p>
                </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- Подвал -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Иванов Иван Иванович. Все права защищены.</p>
        </div>
    </footer>
</body>
</html>