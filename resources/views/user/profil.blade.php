@extends('template.template-user')

@section('content')
@section('title', 'Profil')
@section('akhir', 'Profil')
@section('judul', 'Profil')

<br>
<h2>Profil</h2>

<hr>
<div class="billing_details">
    <form action="/profil-add/{{ Auth::guard('user')->user()->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="col-md-12 form-group p_star">
                    <h4>Name :</h4><input type="text" class="form-control" id="first" name="name" placeholder="Name" value="{{ Auth::guard('user')->user()->name }}" required>
                </div>
                <div class="col-md-12 form-group p_star">
                    <h4>Email :</h4><input type="text" class="form-control" id="first" name="email" placeholder="Email" value="{{ Auth::guard('user')->user()->email }}" required>
                </div>
                <div class="col-md-12 form-group p_star">
                    <button class="primary-btn" type="submit">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
