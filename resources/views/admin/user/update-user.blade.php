@extends('template.template')
@section('content')
@section('title', 'Data')
@section('pertama', 'Data Produk')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update</h4>
        <p class="card-description">
          Update User
        </p>
        <form class="forms-sample" action="/user-update/{{$user->id}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$user->name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputName1" value="{{$user->email}}">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="/data-user" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection
