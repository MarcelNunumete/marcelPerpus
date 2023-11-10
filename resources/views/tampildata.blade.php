@extends('layouts.main')

@section('perpus')
<h1>edit Book</h1>

<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Judul</label>
                      <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->judul }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pengarang</label>
                        <input type="text" name="pengarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->pengarang }}>
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->penerbit }}>
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->kategori }}>
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->deskripsi }}>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</div>

@endsection