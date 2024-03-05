
@extends('backend.master')

@section('content')
<h1>Create new Category</h1>


<form>

  <div class="form-group">
    <label for="">Category Name</label>
    <input type="text" class="form-control" id="" placeholder="Enter Category name">
  </div>


  
  <div class="form-group">
    <label for="">Description</label>
    <textarea name="" id="" class="form-control" placeholder="Enter description" ></textarea>
  </div>

  

  <div class="form-group">
    <label for="">Upload Image</label>
    <input type="file" class="form-control" id="" placeholder="Enter product quantity">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection