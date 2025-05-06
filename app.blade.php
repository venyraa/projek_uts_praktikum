<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-image: url('{{ asset('aset/close-up-stuffed-toy-against-white-background_1048944-28528681[1].png')}}'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh;" class="flex flex-col min-h-screen">

    @include('components.navbar')

    <main class="flex-grow container mx-auto p-6">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
