@extends("site_layouts.app")
<!-- 
@section('sidebar')
@parent 
<h2>Heyyy New</h2>

endsection -->
 @section('content')
<table border="2" class="table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Created_At</th>
    </tr>
        <tr>
            <td>{{$id}}</td>
            <td>{{$title}}</td>
            <td>{{$description}}</td>
            <td>{{$created_at}}</td>
        </tr>   
</table>
@endsection