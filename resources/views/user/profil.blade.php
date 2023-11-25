@extends('template.template-user')
@section('content')
@section('title', 'Profil')
@section('akhir', 'Profil')
@section('judul', 'Profil')
<br>
<h2>Profil</h2>
<hr>
<div class="billing_details">
    <div class="row">
        <div class="col-lg-8">
            <form class="row contact_form" action="" method="GET">
                @foreach ($user as $item)
                <div class="col-md-12 form-group p_star">
                    <h4>Name :</h4><input type="text" class="form-control" id="first" name="name" placeholder="Name" value="{{$item->name}}" required>
                </div>
                @endforeach

            </form>
        </div>
    </div>
</div>
@endsection
