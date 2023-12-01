@extends('template.template')
@section('content')
@section('title', 'Data')
@section('pertama', 'Data Produk')
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
                            <a href="/detail-produk/{{$item->id}}" class="btn btn-info">Detail</a>
                                <a class="btn btn-warning" href="/update-produk/{{$item->id}}">Update</a>
                            <form action="/delete-produk/{{$item->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                        <div class="pagination">
                            {{ $barang->appends(request()->query())->links('pagination::bootstrap-5') }}
                        </div>
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
