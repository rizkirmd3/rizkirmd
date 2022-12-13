@extends('admin.index')
@section('Judul','Smartphone Vivo')
@section('Content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Produk Smartphone Vivo</h1>

 <div style="float:right;">
  <form class="" action="/cari_vivo" method="get">
    <div class="input-group mb-3">
      <div class="input-group-prepend col-3">
          <button class="btn btn-primary" type="submit">cari</button>
           </div>
           <input type="text" name="keyword" type="search" class="form-control  col-8" placeholder="cari product"
                aria-label="" aria-describedby="basic-addon1">
      </div>
   </form>
 </div>
 
    <div>
    <a href="/tambah_vivo" class="btn btn-primary">Tambah produk Vivo</a>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tipe</th>
      <th scope="col">Harga</th>
      <th scope="col">Spesifikasi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  @foreach($vivo as $v)
  <tbody>
    <tr>
      <th scope="row">{{$vivo->firstItem() + $loop->index}}</th>
      <td>{{$v->type}}</td>
      <td>{{$v->harga}}</td>
      <td>{{$v->spesifikasi}}</td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/smartphone/{{ $v->id }}" method="post">
                  @method('delete')
                  @csrf
                  <button type="submit" onclick="return confirm('yakin mau menghapus data?')" class="btn btn-danger">Hapus</button>
                  <a href="/edit_vivo/{{$v->id}}"class="btn btn-warning">edit</a>
                  <a href="/lihat_vivo/{{$v->id}}"class="btn btn-success">lihat</a>
              </form>
      </td>
    </tr>
    <tbody>
    @endforeach
</table>
<div style="">
  {{$vivo->links()}}
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
   
@endsection