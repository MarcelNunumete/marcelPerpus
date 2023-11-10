@extends('layouts.main')

@section('perpus')
<h1 class="h3 mb-2 text-gray-800">Daftar Buku</h1>
                    <!-- DataTales Example -->

                     <!-- Modal -->

                     
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1">Judul</label>
                <input type="text" class="form-control" placeholder="masukan judul" name="judul">
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Foto</label>
              <input class="form-control" @error('image') is-invalid @enderror type="file" id="image" name="image">
              @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
                
              @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Pengarang</label>
                <input type="text" class="form-control" placeholder="masukan pengarang" name="pengarang">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Penerbit</label>
                <input type="text" class="form-control" placeholder="masukan penerbit" name="penerbit">
              </div>
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                  <option value="Fiksi">Fiksi</option>
                  <option value="Non Fiksi">Non Fiksi</option>
                  </select>
                </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Deskripsi</label>
                <input type="text" class="form-control" placeholder="masukan deskripsi" name="deskripsi">
              </div>
              <button class="btn btn-primary" type="submit">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Tambah +
                          </button>
                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{$message}}
                              </div>                              
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Judul</th>                                       
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Kategori</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $buku)
                                        <tr>
                                            <td> {{$loop->iteration}} </td>
                                            <td> {{$buku->judul}} </td>                                         
                                            <td> {{$buku->pengarang}} </td>
                                            <td> {{$buku->penerbit}} </td>
                                            <td> {{$buku->kategori}} </td>
                                            <td>{{ $buku->created_at->format('D M Y') }}</td>
                                            <td class="d-flex justify-content-center">
                                              <form action="{{ route('buku.destroy', $buku) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"><img src="img/trash-2.png" width="20px" height="19px"></button>
                                                </form>

                                                
                                                {{-- <button class="btn btn-info btn-sm mx-2" ><img src="img/lihat.png" width="20px" height="19px"></button> --}}
                                                <a href="/buku/{{$buku->id}}" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>

                                                <button type="button" class="btn btn-warning btn-sm mx-1" data-toggle="modal" data-target="#edit{{$buku->id}}" ><i class="bi bi-pencil-square"></i></button>
                                                
                                                <div class="modal fade" id="edit{{$buku->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                      <form action="{{ route('buku.update', $buku) }}" method="POST">
                                                          @csrf
                                                          @method('PATCH')
                                                          
                                                          <div class="form-group">
                                                              <label for="exampleInputPassword1">Judul</label>
                                                              <input type="text" class="form-control" name="judul" value="{{$buku->judul}}">
                                                          </div>
                                                        
                                                          <div class="form-group">
                                                              <label for="exampleInputPassword1">Pengarang</label>
                                                              <input type="text" class="form-control" name="pengarang" value="{{$buku->pengarang}}">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="exampleInputPassword1">Penerbit</label>
                                                              <input type="text" class="form-control" name="penerbit" value="{{$buku->penerbit}}">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="exampleInputPassword1">Kategori</label>
                                                              <input type="text" class="form-control" name="kategori" value="{{$buku->kategori}}">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="exampleInputPassword1">Deskripsi</label>
                                                              <input type="text" class="form-control" name="deskripsi" value="{{$buku->deskripsi}}">
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                      </form>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection