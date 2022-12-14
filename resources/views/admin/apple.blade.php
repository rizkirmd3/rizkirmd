@extends('admin.index')
@section('Judul','Smartphone Apple')
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
    <h1>Produk Smartphone Apple</h1>
    <div>
    <a href="/tambahapple" class="btn btn-primary">Tambah produk apple</a>
    </div>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tipe</th>
      <th scope="col">Harga</th>
      <th scope="col">Spesifikasi</th>
      <th scope="col">Toko</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  @foreach($apple as $ap)
  <tbody>
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$ap->type}}</td>
      <td>{{$ap->harga}}</td>
      <td>{{$ap->spesifikasi}}</td>
      <td>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Lihat</button>
      <button type="button" class="btn btn-info">Edit</button>
      </td>
    </tr>
    <tbody>
    @endforeach
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

@endsection