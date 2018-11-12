@extends('layouts.app')

@section('content')

    <form action="{{url("sections/$section->id")}}" method="post">

        @csrf
        @if ($section->id)
            {{method_field('PUT')}}
        @endif

        <div class="row">
            <div class="col-md-3 my-2 mr-auto">
                <label for="title"> نوع بخش </label>
                <select class="form-control" name="type" required>
                    <option value=""> -- انتخاب کنید -- </option>
                    @foreach ($section_types as $section_type)
                        <option value="{{$section_type}}" @if($section_type == $section->type) selected @endif>
                            {{translate_section_type($section_type)}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 my-2">
                <label for="position"> ترتیب </label>
                <input type="number" name="position" id="position" value="{{ $section->id ? $section->position : $count+1}}" class="form-control" required>
            </div>
            <div class="col-md-3 my-2 ml-auto">
                <label for="title"> عنوان </label>
                <input type="text" name="title" id="title" value="{{$section->title}}" class="form-control">
            </div>
            <div class="col-md-12 my-2 ml-auto">
                <label for="description"> توضیحات </label>
                <textarea name="description" id="description" rows="3" class="form-control">{{$section->description}}</textarea>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-2 mr-auto ml-auto">
                <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-check ml-1"></i> تایید </button>
            </div>
        </div>

    </form>

@endsection
