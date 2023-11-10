@extends('layouts.main')

@section('perpus')
<h1 class="h3 mb-2 text-gray-800">Peminjaman Buku</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama User</th>
                                            <th>Nama Buku</th>
                                            <th>Kategori Buku</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bayu</td>
                                            <td>Malin Kundang</td>
                                            <td>Fiksi</td>
                                            <td>2023-10-29</td>
                                            <td>2023-11-04</td>
                                            <td class="d-flex justify-content-center">
                                                <button class="btn btn-danger btn-sm"><img src="img/sudah.png" width="20px" height="19px"></button>
                                                <button class="btn btn-success btn-sm mx-2"><img src="img/belum.png" width="20px" height="21px"></button>   
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection