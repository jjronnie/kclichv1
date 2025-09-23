@extends('frontend.layouts.main')

@section('content')

<!-- Navigation -->
@include('frontend.layouts.nav')

<main class="flex-grow">
    {{ $slot }}
</main>

<!-- Footer -->
@include('frontend.layouts.footer')

@endsection