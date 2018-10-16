@extends('layouts.app')

@section('content')

    <form class="container" action="{{url("headers/$header->id")}}" method="post" enctype="multipart/form-data">

        @csrf
        {{ method_field('PUT') }}

        <div class="row">

            <h3 class="col-12 dinar text-info mb-4"> ویرایش هدر </h3>

            <div class="col-md-3 my-2">
                <label for="title"> عنوان هدر </label>
                <input type="text" name="title" id="title" value="{{$header->title}}" class="form-control">
            </div>

            <div class="col-md-3 my-2">
                <label for="btn-name"> نام دکمه </label>
                <input type="text" name="btn_name" id="btn-name" value="{{$header->btn_name}}" class="form-control">
            </div>

            <div class="col-md-3 my-2">
                <label for="btn-link"> لینک دکمه </label>
                <input type="text" name="btn_link" id="btn-link" value="{{$header->btn_link}}" class="form-control">
            </div>

            <div class="col-md-3 my-2">
                <label for="background"> تصویر پس زمینه </label>
                <input type="file" name="bg_path" id="background" class="form-control">
            </div>

            <div class="col-md-12 my-2">
                <label for="description"> متن هدر </label>
                <input type="text" name="description" id="description" value="{{$header->description}}" class="form-control">
            </div>

            <div class="col-md-6 my-3">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="mobile_visible" value="0">
                    <input type="checkbox" value="1" @if($header->mobile_visible) checked @endif name="mobile_visible" class="custom-control-input" id="mobile">
                    <label class="custom-control-label" for="mobile"> اسلایدر موبایل را نمایش بده </label>
                </div>
            </div>

            <div class="col-md-6 my-3">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="preloader" value="0">
                    <input type="checkbox" value="1" @if($header->preloader) checked @endif name="preloader" class="custom-control-input" id="preloader">
                    <label class="custom-control-label" for="preloader"> loading را نمایش بده </label>
                </div>
            </div>

            <hr class="col-12">
            <h3 class="col-12 dinar text-info mb-4"> عکس های اسلایدر </h3>

            @foreach ($header->photos as $photo)
                <div class="col-md-3 my-2">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset($photo->path)}}" class="img-fluid">
                        </div>
                        <div class="card-footer text-center">
                            <a href="javascript:void" class="delete-photo" data-photo-id="{{$photo->id}}">
                                <i class="ti-trash text-danger s-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            <hr class="col-12">
            <div class="col-md-3 mr-auto ml-auto my-2">
                <label for="slider"> آپلود عکس جدید برای اسلایدر </label>
                <input type="file" name="slider[]" id="slider" class="form-control" multiple>
            </div>

        </div>

        <hr>
        <div id="photos-to-be-deleted">
            {{-- this div will be filled via jQuery --}}
        </div>
        <div class="row">
            <div class="col-md-2 mr-auto ml-auto">
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="ti-check ml-1"></i>
                    تایید
                </button>
            </div>
        </div>

    </form>

@endsection
