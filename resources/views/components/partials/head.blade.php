<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="@yield('meta_description')"/>
<meta name="keywords" content=""/>

{{-- Facebook Meta --}}
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="{{ config('app.url') }}/@yield('og:image')">
<meta property="og:title" content="@yield('og:title')" />

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
<script src="{{ asset('js/main.js') }}" defer></script>
<script src="{{ asset('js/drop-down.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>

<title>PSTU|VT</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

<livewire:styles>
