<!DOCTYPE html>
<html lang="en" class="">
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/base16/railscasts.min.css">
</head>
<body class="bg-black text-white space-y-4">
    @yield('content')
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('code').forEach((el) => {
            console.log(el.innerHTML)
            el.innerHTML = hljs.highlightAuto(el.dataset.code).value;
        });
    });
    </script>
    @yield('body_inject')
    
</body>
</html>