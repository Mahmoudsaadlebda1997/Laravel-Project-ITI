<html>
    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>  
        <div class="container col-md-5">
            <form action="/posts/{{$id}}" method="post">
                    <!-- To Save My Values i use CSRF -->
                @csrf
                @method("PATCH")
                <div class="mb-3">
                    <label for="exampleInputID" class="form-label">ID</label>
                    <input type="number" value="{{$id}}" class="form-control" id="exampleInputID">
                </div>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Title</label>
                    <input type="text" name="title" value="{{$title}}" class="form-control" id="exampleInputName">
                </div>
                <div class="mb-3">
                    <label for="exampleInputbody" class="form-label">Description</label>
                    <input type="text" name="description" value="{{$description}}" class="form-control" id="exampleInputbody">
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </body>
    </div>
    </html>