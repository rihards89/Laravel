@extends('dashboard')

@section('content')
<div> 
    <button class="uppercase">
        <a href="{{ route('posts.create') }}">
           Create 
        </a>
    </button>
</div>


<table style="
background-image: url(https://i.stack.imgur.com/7YKUD.jpg);
"
class="text-white"
>

    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
        <th>Author name</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->author_name }}</td>
                <td>
                    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                    Show
                    </a>
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
                    Edit
                    </a>
                    <a href="{{ route('posts.delete', ['post' => $post->id]) }}">
                    Delete
                    </a>
                </td>
            </tr>
        @endforeach
    <tbody>
</table>

@endsection