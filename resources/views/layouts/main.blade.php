<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="main-body">
    <header class="main-header">
        <div class="main-header-container">
            Нарушений<span class="main-header-c">.нет</span>
        </div>
        
    </header>

    <main class="main-main">
        <div class="main-main-container">
            @yield('content')
        </div>
        
    </main>

    <footer class="main-footer">
        © Хайруллин Давид Сухробович 2024г
    </footer>
</body>
</html>