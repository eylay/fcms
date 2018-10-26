@extends('layouts.app')
@section('content')

    <form action="{{url("contents/$section->id")}}" method="post" enctype="multipart/form-data">

        @csrf

        <div id="clone-box">
            <div class="clone-row">
                <div class="row">

                    <div class="col-md-3 my-2">
                        <label for="position"> ترتیب </label>
                        <input type="number" name="position[]" class="form-control" value="">
                    </div>

                    @foreach ($section->inputs() as $input)
                        @include("contents.partials.$input")
                    @endforeach

                </div>
                <hr>
            </div>
        </div>

        <div class="add-row bg-dark">
            <div class="row">
                <div class="col-md-2 my-2 ml-auto">
                    <a class="btn btn-success text-light btn-block" id="cloner"> <i class="fa fa-plus ml-1"></i> مورد جدید </a>
                </div>
                <div class="col-md-2 my-2 mr-auto">
                    <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-check ml-1"></i> تایید </button>
                </div>
            </div>
        </div>

    </form>

@endsection
