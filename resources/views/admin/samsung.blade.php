@extends('admin.index')
@section('Judul','/samsung')
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
    <h1>Produk samsung</h1>
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
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>samsung a32</td>
      <td>Rp 2,399,000</td>
      <td>6/128GB</td>
      <td>Aurora-Mall</td>
      <td>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Lihat</button>
      <button type="button" class="btn btn-info">Edit</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>samsung a52</td>
      <td>Rp 3.999.000</td>
      <td>8/128 GB</td>
      <td>Distributor Ponsel</td>
      <td>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Lihat</button>
      <button type="button" class="btn btn-info">Edit</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>samsung a72</td>
      <td>Rp 1,799,000</td>
      <td>3/32 GB</td>
      <td>Distributor Ponsel</td>
      <td>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Lihat</button>
      <button type="button" class="btn btn-info">Edit</button>
      </td>
      <tr>
      <th scope="row">4</th>
      <td>samsung s25 pro</td>
      <td>Rp 11,999,000</td>
      <td>12/256GB</td>
      <td>Aurora-Mall</td>
      <td>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Lihat</button>
      <button type="button" class="btn btn-info">Edit</button>
      </td>
      <tr>
      <th scope="row">5</th>
      <td>samsung s10 pro</td>
      <td>Rp 3,399,000</td>
      <td>8/128GB</td>
      <td>Aurora-Mall</td>
      <td>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Lihat</button>
      <button type="button" class="btn btn-info">Edit</button>
      </td>
    </tr>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

@endsection