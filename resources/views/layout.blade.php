

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Aaron Pickrell - Executive Agile Engineering Leader - @yield('title')</title>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <!--FAVIONS -->
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
            <link rel="manifest" href="{{ asset('site.webmanifest') }}">
            <!-- Styles -->
            <style>
                html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }

                .full-height {
                }

                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }

                .position-ref {
                    position: relative;
                }

                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }

                .content {
                    text-align: center;
                }

                .title {
                    font-size: 84px;
                }

                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 13px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }

                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>
        </head>
        <body>

          <div class="links">
              <a href="/">HOME</a>
              <a href="/experience">EXPERIENCE</a>
              <a href="/references">REFERENCES</a>
              <a href="/mywork">MY WORK</a>
              <a href="/contact">CONTACT</a>
              <a href="/github">GITHUB</a>
          </div>

            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                      @yield('content')
                    </div>

                </div>
            </div>
            @yield('data')
        </body>
    </html>
