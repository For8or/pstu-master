<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth;">
<head>

    <x-partials.head />

    <style>
        .gradient {
            background: linear-gradient(90deg, #209cfa 0%, #0596D5 100%);
        }

    </style>

</head>

<body class="leading-normal tracking-normal text-white gradient">

    <x-partials.nav />

    <x-ui.alerts />

    <div class="font-sans antialiased text-gray-900">
        {{ $slot }}
    </div>


    <x-partials.footer />

    <livewire:scripts>
</body>
</html>
