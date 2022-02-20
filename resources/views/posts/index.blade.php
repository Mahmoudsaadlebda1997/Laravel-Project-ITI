@extends("site_layouts.app")
<!-- 
@section('sidebar')
@parent 
<h2>Heyyy New</h2>

endsection -->
 @section('content')
<a href="/posts/create">Add New Post</a>

    <table border="2" class="table">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created_At</th>
        </tr>
        
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->user->email}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->created_at}}</td>
            <td><a href="/posts/{{$post->id}}">Show</a></td>
            <td><a href="/posts/{{$post->id}}/edit">Edit</a></td>
            <td>
                <form action="/posts/{{$post->id}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" name="delete" value="Delete This Post">
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    {{ $posts->links() }}
@endsection