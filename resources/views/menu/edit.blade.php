@extends('layouts.app')

@section('content')

    <form action="{{url("menu")}}" method="post">

        @csrf

        <div id="clone-box">

            @foreach ($items as $item)
                <div class="clone-row">
                    <div class="row">

                        @include('fragments.clone_trash', ['row_counts'=> count($items)])

                        <div class="col-md-1 my-2">
                            <label for="position"> ترتیب </label>
                            <input type="number" id="position" name="position[]" value="{{$item->position}}" class="form-control" required>
                        </div>
                        <div class="col-md-2 my-2">
                            <label for="name"> نام </label>
                            <input type="text" id="name" name="name[]" value="{{$item->name}}" class="form-control">
                        </div>
                        <div class="col-md-3 my-2">
                            <label for="icon">
                                آیکون
                                <a href="https://fontawesome.com/v4.7.0/icons/" class="mr-1" target="_blank"> مشاهده لیست آیکون ها </a>
                            </label>
                            <input type="text" id="icon" name="icon[]" value="{{$item->icon}}" class="form-control">
                        </div>
                        <div class="col-md-3 my-2">
                            <label for="external-link"> لینک خارجی </label>
                            <input type="text" id="external-link" name="external_link[]" value="@unless($item->link[0] == '#') {{$item->link}} @endunless" class="form-control">
                        </div>
                        <div class="col-md-2 my-2">
                            <label for="internal-link"> لینک داخلی </label>
                            <select class="form-control" name="internal_link[]" id="internal-link">
                                <option value=""> -- انتخاب کنید -- </option>
                                @foreach ($sections as $section)
                                    <option value="{{$section->id}}" @if($item->section_id() == $section->id) selected @endif>
                                        {{$section->position}} -
                                        {{translate_section_type($section->type)}}
                                        ({{$section->title}})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

        @include('fragments.cloner')

    </form>

@endsection
