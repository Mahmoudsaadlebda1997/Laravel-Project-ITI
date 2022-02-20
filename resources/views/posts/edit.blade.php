@extends("site_layouts.app")
@section('content')
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
            @include('shared.errors')
@endsection