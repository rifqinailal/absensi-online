<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex justify-center py-5 bg-[#345831]">
    <div class="flex gap-5 text-white font-semibold">
        <a href="#">Beranda</a>
        <a href="#">Absensi</a>
        <a href="#">Lihat Jadwal</a>
    </div>
</div>
<div class="shadow-lg border border-white my-4 mx-4 rounded-lg">
    @yield('content')
</div>
</body>
</html>
