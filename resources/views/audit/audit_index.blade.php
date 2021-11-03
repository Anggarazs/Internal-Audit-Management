@extends('layouts.master')

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 ">Audit Report</h1>
</div>

@if(Session::has('berhasil'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Success,</strong>
        {{ Session::get('berhasil') }}
    </div>
@endif

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Laporan Audit</h6>
</div>
<div class="card-body">
        <a href="#" class="btn mb-3 btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#insertModal">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Data Laporan Audit</span>
    </a>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr class="text-center">
                <th >No</th>
                <th>No Laporan Audit</th>
                <th>Judul Laporan</th>
                <th>Tipe Audit</th>
                <th>Auditor</th>
                <th>Kriteria Audit</th>
                <th>Tahun Audit</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Akhir</th>
                <th>Evidence</th>
                <th colspan="2">Action</th>
            </tr>
            <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($audit as $list_audit)
            <tr class="text-center">
                <td>{{ $i++ }}</td>
                <td>{{ $list_audit -> no_audit }}</td>
                <td>{{ $list_audit -> judul_audit }}</td>
                <td>{{ $list_audit -> tipe_audit }}</td>
                <td>{{ $list_audit -> auditor }}</td>
                <td>{{ $list_audit -> kriteria_audit }}</td>
                <td>{{ $list_audit -> tahun_audit }}</td>
                <td>{{ $list_audit -> tanggal_mulai_audit }}</td>
                <td>{{ $list_audit -> tanggal_akhir_audit  }}</td>
                <td >{{ $list_audit -> file }}
                    <!-- <input type="file" id="files"  accept=".pdf,.jpg,.jpeg,.png"/>
                    <label for="files"></label> -->
                </td>
                <td class="text-center">
                    <a href="delete_audit/{{$list_audit->no_audit}}" onclick="return confirm('Apakah anda yakin ingin menghapus akun?')" class="btn btn-danger btn-icon-split btn-sm" type="submit">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Hapus</span>
                    </a>    
                </td>
                <td class="text-center">
                <a class="btn btn-info btn-icon-split btn-sm" type="submit">
                    <span class="icon text-white-50">
                        <i class="fas  fa-edit"></i>
                    </span>
                    <span class="text">Edit</span>
                </a>  
                </td>
            </tr>
            @endforeach
            </tbody>
            </thead>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="insertModal">Input Laporan Audit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">No Laporan</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Judul Laporan</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Tipe Audit</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Eksternal</option>
                            <option>Internal</option>
                          </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Auditor</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Kriteria Audit</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Tahun Audit</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="inputEmail4" placeholder="">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="inputPassword4" placeholder="">
                      </div>
                    </div>
                    <div class="form-row">
                      
                      <div class="file-upload-wrapper">
                        <input type="file" id="input-file-max-fs" class="file-upload" data-max-file-size="2M" />
                      </div>
                     
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Clear</button>
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@push('script')
<script>$('.file-upload').file_upload();</script>
@endpush
@endsection