@extends('dashboard')

@section('content')

<h1> {{__('namings.posts.create_post') }} </h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/Posts/create" method="post">
    @csrf
    Title: <input type="text" name="title" value="{{ old('title') }}"><br>
    Body: <input type="text" name="body" value="{{ old('body') }}"><br>
    Author: <input type="text" name="author_name" value="{{ old('author_name') }}"><br>
    <input type="submit">
</form>

@endsection