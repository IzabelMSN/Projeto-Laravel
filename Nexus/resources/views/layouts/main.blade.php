<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',

            pagination: {
                el: '.swiper-pagination',
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="nave">
            <a href="/"><img src="/img/logo/logo.png" alt="Nexus" id="nave_logo"></a>
            <h2 class="nave_h2">Quem somos</h2>
            <h2 class="nave_h2">Planos e Serviços</h2>
            <h2 class="nave_h2">Fale conosco</h2>
       </nav>
    </header>

    @yield('content')

    <footer>
        <a href="/"><img src="/img/logo/logo.png" alt="Nexus" id="footer-logo"></a>
        <div class="footer-sep">
            <p>(51) XXXXX-XXXX</p>
            <p>R.5731 Jaskolski Lock Suite 699 - Southaven, VT, CEP: 00000-000</p>
            <p>&copy;Nexus 2008. Todos os direitos reservados</p>
        </div>
    </footer>    
</body>
</html>