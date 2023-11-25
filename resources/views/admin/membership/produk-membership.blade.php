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
                        @if ($item->user_id == 1)
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
                            <button class="btn btn-primary">Validasi</button>
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
