@extends('layouts.main')

@section('perpus')
<h1>Create Book</h1>

<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <form action="/insertdata" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Judul</label>
                      <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pengarang</label>
                        <input type="text" name="pengarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    <button type="submit" class="btn btn-primary">Buat</button>
                  </form>
            </div>
        </div>
    </div>
</div>

@endsection