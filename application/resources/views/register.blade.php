@extends('layouts.main')

@section('content')

<div class="row">
  <div class="col-12">
      <h1>Create Writer</h1>
   </div>
  <div class="col-6"> 
   <form action="" method="post">
       @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">First Name</label>
      <input type="text" class="form-control" name="firstname" placeholder="Firstname">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Last Name</label>
      <input type="text" class="form-control" name="lastname" placeholder="Lastname">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Last Name</label>
      <input type="text" class="form-control" name="email" placeholder="Email">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Last Name</label>
      <input type="text" class="form-control" name="password" placeholder="Password">
    </div>
   

    <button type="submit" class="btn btn-primary">Register</button>
  </form>
 </div> 
</div> 
@endsection