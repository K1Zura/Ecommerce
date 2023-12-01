@extends('template.template')
@section('content')
@section('title', 'Home')
@section('pertama', 'Data Membership')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Product Data</h4>
        <form action="/data-produk" method="GET">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Barang
                          </th>
                          <th>
                            Deskripsi
                          </th>
                          <th>
                            Kategori
                          </th>
                          <th>
                            Image
                          </th>
                          <th>
                            Dibuat Tanggal
                          </th>
                          <th>
                            Validasi
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($barang as $item)
                        @foreach($user as $users)
                        @if ($users->role_id == 3)
                            <tr>
                          <td>
                            {{$item->name}}
                          </td>
                          <td>
                            {{$item->deskripsi}}
                          </td>
                          <td>
                            {{$item->kategori}}
                          </td>
                          <td>
                            {{asset('storage/photo/'.$item->image)}}
                          </td>
                          <td>
                            {{$item->created_at}}
                          </td>
                          <td>
                            @if($item->validated)
                                <span class="badge badge-success">Validated</span>
                            @else
                                <a href="{{url('/validate')}}/{{$item->id}}?page={{app('request')->page??1}}" class="btn btn-primary btn-sm">Validate</button>
                            @endif
                          </td>
                          <td>
                            <button class="btn btn-info">Detail</button>
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
