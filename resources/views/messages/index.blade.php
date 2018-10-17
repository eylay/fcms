@extends('layouts.app')

@section('content')

    <table class="table table-bordered">
        <thead>
            <tr>
                <th> نام </th>
                <th> موضوع </th>
                <th> ایمیل </th>
                <th> متن پیام </th>
                <th> عملیات </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td> {{$message->name}} </td>
                    <td> {{$message->subject ?? '[بدون عنوان]'}} </td>
                    <td> {{$message->email}} </td>
                    <td> {{$message->body}} </td>
                    <td align="center">
                        <a href="{{url("messages/delete/$message->id")}}"> <i class="fa fa-trash text-danger s-1-5x"></i> </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{$messages->links()}}
    </div>

@endsection
