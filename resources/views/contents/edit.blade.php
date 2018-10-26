@extends('layouts.app')
@section('content')

    <form action="{{url("contents/$section->id")}}" method="post" enctype="multipart/form-data">

        @csrf

        <div id="clone-box">
            @foreach ($contents as $content)
                <div class="clone-row">
                    <div class="row">

                        <div class="col-md-1 my-2">
                            <a class="btn btn-link delete-clone-row" title="حذف" @if(count($contents) == 1) style="display:none" @endif>
                                <i class="fa fa-trash text-danger fa-2x m-3"></i>
                            </a>
                        </div>
                        <div class="col-md-2 my-2">
                            <label for="position"> ترتیب </label>
                            <input type="number" id="position" name="position[]" class="form-control" value="{{$content->position}}" required>
                        </div>

                        @foreach ($section->inputs() as $input)
                            @include("contents.partials.$input")
                        @endforeach

                    </div>
                    <hr>
                </div>
            @endforeach
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
