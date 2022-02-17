<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="container col-md-5">
<form action="/users" method="post">
    <!-- To Save My Values i use CSRF -->
    @csrf
  <!-- <div class="mb-3">
    <label for="exampleInputID" class="form-label">ID</label>
    <input type="number" value="" class="form-control" id="exampleInputID">
  </div> -->
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text"value="{{old('name')}}"
 name="name" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputbody" class="form-label">Email</label>
    <input type="email" value="{{old('email')}}"
 name="email" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputbody" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Add User</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>