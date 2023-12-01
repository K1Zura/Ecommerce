@extends('template.template')
@section('content')
@section('title', 'Data')
@section('pertama', 'Data Produk')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Product Data</h4>
        <a href="/data-produk" class="btn btn-primary">Back</a>
        <div class="my-3 d-flex justify-content-center">
            @if($barang->image != '')
                <img src="{{asset('storage/photo/'.$barang->image)}}" alt="" width="300px">
            @endif
        </div>
        <form action="/detail-produk" method="GET">
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
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                          <td>
                            {{$barang->name}}
                          </td>
                          <td>
                            {{$barang->deskripsi}}
                          </td>
                          <td>
                            {{$barang->kategori}}
                          </td>
                          <td>
                            {{$barang->created_at}}
                          </td>
                        </tr>
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
