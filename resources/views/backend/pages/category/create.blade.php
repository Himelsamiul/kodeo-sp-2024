
@extends('backend.master')

@section('content')
<h1>Create new Category</h1>


<form action="{{route('category.store')}}" method="post">

@csrf
  <div class="form-group">
    <label for="">Category Name</label>
    <input name="cat_name" type="text" class="form-control" id="" placeholder="Enter Category name">
  </div>


  
  <div class="form-group">
    <label for="">Description</label>
    <textarea name="description" id="" class="form-control" placeholder="Enter description" ></textarea>
  </div>

  

  <div class="form-group">
    <label for="">Upload Image</label>
    <input name="image" type="file" class="form-control" id="" placeholder="Enter product quantity">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection