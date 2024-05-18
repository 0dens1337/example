<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body class="bg-dark text-white">
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 bg-dark text-white border-bottom">


        <span class="fs-4 text-white">Главная</span>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-white" href="/">Главная</a>
            <a class="me-3 py-2 text-white" href="/about">Про нас</a>
        </nav>
        <a class="btn btn-warning" href="/review">Отзывы</a>
    </div>



    <div class="container">@yield('main_content')</div>





</body>
</html>
