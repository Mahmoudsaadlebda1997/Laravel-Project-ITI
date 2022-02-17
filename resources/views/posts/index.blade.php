<html>
    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>  
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
    </body>
</html>