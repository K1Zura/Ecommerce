@extends('template.template')
@section('content')
@section('title', 'Home')
@section('pertama', 'Data User')
@php
use Illuminate\Support\Facades\Crypt;
@endphp
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">user Data</h4>
        <form action="/data-user" method="GET">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            User
                          </th>
                          <th>
                            First name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Created Date
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($user as $item)
                        @if ($item->role_id == 2)
                            <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td>
                            {{$item->name}}
                          </td>
                          <td>
                            {{$item->email}}
                          </td>
                          <td>
                            {{$item->created_at}}
                          </td>
                          <td>
                            <form action="/user-update/{{$item->id}}">
                                <button class="btn btn-warning">Update</button>
                            </form>
                            <form action="/user-delete/{{$item->id}}" method="POST">
                                @method('DELETE')
                                @csrf   
                                <button class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection
