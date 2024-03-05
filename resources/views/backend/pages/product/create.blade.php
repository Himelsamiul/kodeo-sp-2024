

@extends('backend.master')

@section('content')
<h1>Create new product</h1>


<form>

  <div class="form-group">
    <label for="">Product Name</label>
    <input type="text" class="form-control" id="" placeholder="Enter product name">
  </div>


  
  <div class="form-group">
    <label for="">Product Price</label>
    <input type="text" class="form-control" id="" placeholder="Enter product price">
  </div>

  
  <div class="form-group">
    <label for="">Product Quantity</label>
    <input type="text" class="form-control" id="" placeholder="Enter product quantity">
  </div>

  <div class="form-group">
    <label for="">Upload Image</label>
    <input type="file" class="form-control" id="" placeholder="Enter product quantity">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection