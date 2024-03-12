<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>To Do List</title>
  @vite('resources/css/app.css')
</head>

<body>
  {{-- navbar --}}
  {{-- include untuk menambahkan codingan dari file yang dipanggil - statis --}}
  @include('layouts.navbar')
  {{-- akhir navbar --}}

  {{-- content --}}
  {{-- berisikan konten dinamis yang terhubung oleh @extends dan diisi oleh @section .. @endsection --}}
  @yield('contect')
  {{-- akhir content --}}

  {{-- footer --}}
  @include('layouts.footer')
  {{-- akhir footer --}}
</body>

</html>