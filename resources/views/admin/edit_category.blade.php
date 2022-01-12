@extends('compoent.admin_main')
@section('title','Admin - Dashboard')
@section('content')
@foreach($category as $c)

<form action="/admin/category" method="post" style="margin-top:50px">
@csrf
  <div class="form-group">

    <label for="exampleInputEmail1">Category Name</label>
   
    
  </div>
  <button type="submit" class="btn btn-warning">Edit</button>


</form>
@endforeach
<table class="table table-striped table-bordered" style="margin-top:50px">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $i=>$u)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $u->name }}</td>
                <td>
                    <a onclick="return confirm('Are you sure to delete this category')" class="btn btn-danger" href="/admin/category/{{$u->id}}/delete">Delete</a>
                </td>
                <td>
                    <a class="btn btn-warning" href="/admin/category/{{$u->id}}/edit">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
