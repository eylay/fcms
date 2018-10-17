@extends('layouts.app')

@section('content')

    <div class="text-left">
        <a href="{{url("sections/create")}}" class="btn btn-primary"> <i class="fa fa-plus ml-1"></i> بخش جدید </a>
    </div>

    <h2 class="dinar text-center text-primary"> نقشه سایت </h2>
    <hr>

    <div class="text-center p-3">

        <div class="card my-2">
            <div class="card-body">
                <span class="lead"> مدیریت منو </span>
            </div>
            <div class="card-footer text-left">
                <a href="#" class="text-decoration-none mx-1 text-success"> <i class="ti-pencil s-1-5x" title="ویرایش"></i> </a>
                @if (true)
                    <a href="#" class="text-decoration-none mx-1 text-warning"> <i class="ti-na s-1-5x" title="عدم نمایش"></i> </a>
                @else
                    <a href="#" class="text-decoration-none mx-1 text-warning"> <i class="ti-eye s-1-5x" title="نمایش"></i> </a>
                @endif
            </div>
        </div>

        <div class="card my-2">
            <div class="card-body">
                <span class="lead"> مدیریت هدر </span>
            </div>
            <div class="card-footer text-left">
                <a href="{{url('headers/1/edit')}}" class="text-decoration-none mx-1 text-success"> <i class="ti-pencil s-1-5x" title="ویرایش"></i> </a>
                @if (true)
                    <a href="#" class="text-decoration-none mx-1 text-warning"> <i class="ti-na s-1-5x" title="عدم نمایش"></i> </a>
                @else
                    <a href="#" class="text-decoration-none mx-1 text-warning"> <i class="ti-eye s-1-5x" title="نمایش"></i> </a>
                @endif
            </div>
        </div>

        <div class="card my-2">
            <div class="card-body">
                <span class="lead"> مدیریت فوتر </span>
            </div>
            <div class="card-footer text-left">
                <a href="{{url("footers/1/edit")}}" class="text-decoration-none mx-1 text-success"> <i class="ti-pencil s-1-5x" title="ویرایش"></i> </a>
                @if (true)
                    <a href="#" class="text-decoration-none mx-1 text-warning"> <i class="ti-na s-1-5x" title="عدم نمایش"></i> </a>
                @else
                    <a href="#" class="text-decoration-none mx-1 text-warning"> <i class="ti-eye s-1-5x" title="نمایش"></i> </a>
                @endif
            </div>
        </div>

    </div>

@endsection
