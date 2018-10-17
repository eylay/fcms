@extends('layouts.master')

@section('content')

    @if ($header->preloader)
        @include('partials.preloader')
    @endif

    @include('partials.menu')

    @if ($header->visible)
        @include('partials.header')
    @endif

    @foreach ($sections as $section)
        @include("partials.$section->type")
    @endforeach

    {{-- @include('partials.testimonial') --}}

    @if ($footer->visible)
        @include('partials.footer')
    @endif


@endsection
