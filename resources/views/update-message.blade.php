@extends('layouts.app')

@section('title-block')Update Message @endsection

@section('content')
    <h1>Update Message</h1>

    <form class="form-contact" action={{ route('contact-update-submit', $data->id)}} method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter name</label>
            <input type="text" name="name" value = "{{$data->name}}" placeholder="Enter name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value = "{{$data->email}}" placeholder="Enter email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Enter message</label>
            <textarea name="message"  placeholder="Enter message" id="message" class="form-control" > {{$data->message}} </textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
    
@endsection

@section('aside')
    @parent
@endsection


