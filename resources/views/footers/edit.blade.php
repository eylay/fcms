@extends('layouts.app')

@section('content')

    <form action="{{url("footers/$footer->id")}}" method="post">

        @csrf
        {{ method_field('PUT') }}

        <div class="row">

            <div class="col-md-4 my-2">
                <label for="title"> عنوان فوتر </label>
                <input type="text" name="title" id="title" value="{{$footer->title}}" class="form-control">
            </div>

            <div class="col-md-8 my-2">
                <label for="address"> آدرس </label>
                <input type="text" name="address" id="address" value="{{$footer->address}}" class="form-control">
            </div>

            <div class="col-md-6 my-2">
                <label for="description_1"> توضیحات اول فوتر </label>
                <textarea name="description_1" rows="4" class="form-control" id="description_1">{{$footer->description_1}}</textarea>
            </div>

            <div class="col-md-6 my-2">
                <label for="description_2"> توضیحات دوم فوتر </label>
                <textarea name="description_2" rows="4" class="form-control" id="description_2">{{$footer->description_2}}</textarea>
            </div>

            <div class="col-md-6 my-2">
                <label for="telephones"> شماره تلفن ها </label>
                <textarea name="telephones" rows="4" class="form-control" id="telephones">{{$footer->telephones_with_line_breaks()}}</textarea>
            </div>

            <div class="col-md-6 my-2">
                <label for="emails"> ایمیل ها </label>
                <textarea name="emails" rows="4" class="form-control" id="emails">{{$footer->emails_with_line_breaks()}}</textarea>
            </div>

            <div class="col-md-2 my-2">
                <label class="open-sans" for="facebook"> Facebook </label>
                <input type="text" name="facebook" id="facebook" value="{{$footer->facebook}}" class="form-control">
            </div>

            <div class="col-md-2 my-2">
                <label class="open-sans" for="twitter"> Twitter </label>
                <input type="text" name="twitter" id="twitter" value="{{$footer->twitter}}" class="form-control">
            </div>

            <div class="col-md-2 my-2">
                <label class="open-sans" for="google"> Goolgle </label>
                <input type="text" name="google" id="google" value="{{$footer->google}}" class="form-control">
            </div>

            <div class="col-md-2 my-2">
                <label class="open-sans" for="linkedin"> LinkedIn </label>
                <input type="text" name="linkedin" id="linkedin" value="{{$footer->linkedin}}" class="form-control">
            </div>

            <div class="col-md-2 my-2">
                <label class="open-sans" for="instagram"> Instagram </label>
                <input type="text" name="instagram" id="instagram" value="{{$footer->instagram}}" class="form-control">
            </div>

            <div class="col-md-2 my-2">
                <label class="open-sans" for="telegram"> Telegram </label>
                <input type="text" name="telegram" id="telegram" value="{{$footer->telegram}}" class="form-control">
            </div>

        </div>

        <hr>

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
