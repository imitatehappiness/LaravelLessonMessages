@extends('layouts.app')

@section('title-block')Contact Page @endsection

@section('content')
    <h1>Contact Page</h1>


    <form class="form-contact" action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter name</label>
            <input type="text" name="name" placeholder="Enter name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Enter email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Enter message</label>
            <textarea name="message" placeholder="Enter message" id="message" class="form-control" ></textarea>
        </div>

        <button type="submit" class="btn btn-success">Message Send</button>
    </form>
    
@endsection

@section('aside')
    @parent
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, ab animi nulla aliquam ullam repellat quibusdam nostrum repellendus quasi accusamus cum rerum maiores? Illo, voluptate ducimus. Eius vitae veniam quia.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor deserunt quidem provident repellat, reprehenderit exercitationem tenetur hic sit ut. Deleniti sapiente error, voluptatum natus neque totam molestias rerum nulla placeat.</p>
@endsection


