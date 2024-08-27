<!DOCTYPE html>
<html lang="en" dir="ltr" data-color-theme="light">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>PharmaErp</title>
</head>

<body class="bg-gray-100">

    <!-- Page content -->
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex-shrink-0 flex flex-col justify-between">
            <div>
                @include('layouts.sidebar')
            </div>
            <!-- Footer aligned with sidebar width -->
            <footer class="">
                @include('layouts.footer')
            </footer>
        </div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col">

            <!-- Navbar -->
            <header class="bg-gray-800 text-white p-4">
                @include('layouts.navigation')
            </header>

            <!-- Inner content -->
            <main class="flex-1 p-6">
                @yield('content')
            </main>
           
        </div>
        <!-- /main content -->

    </div>

    @section('content')
    @component('components.page-header')
        @slot('title') Home @endslot
        @slot('subtitle') Members @endslot
    @endcomponent
    @endsection

</body>

</html>
