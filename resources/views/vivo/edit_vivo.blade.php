@extends('admin.index')
@section('Judul','Smartphone Vivo')
@section('Content')

<h1 class="mt-3">edit produk vivo</h1>

    <form method="post" action='/proseseditvivo/{{$vivo->id}}' enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="mb-1 col-5">
            <label for="type" class="form-label">type</label>
            <input class="form-control @error('type') is-invalid @enderror" id="type" placeholder="masukan type" name="type" value="{{$vivo->type}}" require>
         </div>
         <div class="mb-3 col-5">
            <label for="harga" class="form-label">harga</label>
            <input class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="masukan harga" name="harga" value="{{$vivo->harga}}" require>
         </div>
         <div class="mb-3 col-5">
            <label for="spesifikasi" class="form-label">spesifikasi</label>
            <input class="form-control @error('spesifikasi') is-invalid @enderror" id="spesifikasi" placeholder="masukan spesifikasi" name="spesifikasi" value="{{$vivo->spesifikasi}}" require>
         </div>
         <div class="form-group mb-3 col-5">
            <label for="image">pilih foto</label>
            <input type="file" class="form control file" id="image" name="image">
         </div>
         <div class="" style="margin-left:15px;">
          <img src="/image/{{ $vivo->image }}" alt=""  widht="90" height="90">
         </div>
         <br>
         <button type="submit" class="btn btn-primary" style="margin-left:15px">edit</button>
         </form>

@endsection