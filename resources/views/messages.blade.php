@extends('layouts.app')

@section('title-block')All messages @endsection

@section('content')
<div class="content-message">
    <h1>All messages</h1>
    @foreach($data as $tmp)
        <div class="alert-msg">
            <h3>{{ $tmp->name }}</h3>
            <p>{{ $tmp->email }} </p>
            <p>{{ $tmp->message }} </p>
            <p><small>{{$tmp->created_at}}</small></p>
            <a href="{{ route('contact-data-one', $tmp->id) }}"><button class="btn btn-success">Details</button></a>
        </div>
    @endforeach
</div>
@endsection


