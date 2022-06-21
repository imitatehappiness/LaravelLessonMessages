@extends('layouts.app')

@section('title-block')Current Message @endsection

@section('content')
<div class="content-message">
    <h1>Current message</h1>
        <div class="alert-msg">
            <h3>{{ $data->name }}</h3>
            <p>{{ $data->email }} </p>
            <p>{{ $data->message }} </p>
            <p><small>{{$data->created_at}}</small></p>
            <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-success">Edit</button></a>
            <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Delete</button></a>
        </div>
</div>
@endsection


