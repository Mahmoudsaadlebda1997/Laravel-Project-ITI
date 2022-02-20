@extends("site_layouts.app")
@section('content')
<form action="/posts" method="post">
    <!-- To Save My Values i use CSRF -->
    @csrf
  <!-- <div class="mb-3">
    <label for="exampleInputID" class="form-label">ID</label>
    <input type="number" value="" class="form-control" id="exampleInputID">
  </div> -->
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Title</label>
    <input type="text"
    value="{{old('title')}}"
 name="title" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputbody" class="form-label">Description</label>
    <input type="text"  value="{{old('description')}}"
name="description" class="form-control" >
  </div>

  <button type="submit" class="btn btn-primary">Add Post</button>
</form>
@include('shared.errors')

@endsection