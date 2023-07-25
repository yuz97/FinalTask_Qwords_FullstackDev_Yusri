@extends('layouts.app')


@push('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
@endpush

@section('content')
    @include('section.section1')
    @include('section.section2')
    @include('section.section3')
    @include('section.section4')
    @include('section.section5')
    @include('section.section6')
    @include('section.section7')
    @include('section.section8')
    @include('section.section9')
    @include('section.section10')
    @include('section.section11')
@endsection

@push('scripts')
    <script>
        let navEl = document.querySelector('.navbar');
        let btnTop = document.querySelector('.button-to-top')
        window.addEventListener('scroll', () => {

            if (window.scrollY >= 56) {

                navEl.classList.add("navbar-scroll")

                navEl.classList.remove('bg-transparent')

            } else if (window.scrollY < 56) {
                navEl.classList.add('bg-transparent')
                navEl.classList.remove('navbra-scroll')

            }
        })

        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                btnTop.classList.add("back-to-top")
            } else {
                btnTop.classList.remove("back-to-top")

            }
        })
    </script>
@endpush
