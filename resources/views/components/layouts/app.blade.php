<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/gaya.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="container">
              <header>Beritaku</header>
              <nav>
                  <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/settings">Settings</a></li>
                  </ul>
                </nav>
                {{ $slot }}
                <footer>
                    <div id="column">
                        <h2>Dapatkan Bantuan dan Dukungan</h2>
                        Untuk mendapatkan petunjuk atau dukungan dari kami, kunjungi situs <a href="#">support.rpl.com</a> dan submit form anda.
                    </div>
                    <div id="column">
                        <h2>Hubungi Kami</h2>
                        Jl. Melati 25<br>
                        Cilandak Barat<br>
                        Jakarta Selatan
                    </div>
                    <div id="column">
                        <h2>Temukan Kami di ...</h2>
                        <a href="#">Facebook</a><br>
                        <a href="#">Twitter</a>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
