@extends('layouts.app')
@section('content')

    <div class="row">
        @foreach ($section->inputs() as $input)
            @include("contents.partials.$input")
        @endforeach
    </div>

@endsection
