@extends('layouts.main')

@section('content')

<div class="row">
  <div class="col-12">
      <h1>Create Post</h1>
   </div>
  <div class="col-6"> 
   <form action="" method="post">
       @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control" name="title" placeholder="Title">
    </div>

    <div class="form-group">
      <textarea name="text" id="" cols="57" rows="10" placeholder=" Your Post"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>
  </form>
 </div> 
</div> 
@endsection