@extends('frontend.layouts.default')

@section('content')
    <main id="fhm-homepage" class="position-relative">

        @include('frontend.element.banner_home')

        @include('frontend.element.home_benefits')

        @include('frontend.element.home-collection')

        @include('frontend.element.testimonial')

    </main>

@endsection
