@extends('layouts.master')

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 ">Corrective</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Corrective</h6>
</div>
<div class="card-body">
        <a href="#" class="btn mb-3 btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#insertModal">
        <span class="icon text-white-50">
            <i class="fas fa-check"></i>
        </span>
        <span class="text">Tambah Data Corrective</span>
    </a>
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th >No Laporan Audit</th>
            <th>Judul Laporan</th>
            <th>Tipe Audit</th>
            <th>Auditor</th>
            <th>Tahun Audit</th>
            <th>Kriteria Audit</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Akhir</th>
            <th>Evidence</th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
        <tbody>
        <tr>
            <td>1</td>
            <td>Judul</td>
            <td>Tipe</td>
            <td>Udin Sanjaya</td>
            <td>2021</td>
            <td>Kriteria</td>
            <td>Awal</td>
            <td>Akhir</td>
            <td>
                <input type="file" id="files" style="display:none;" accept=".pdf,.jpg,.jpeg,.png"/>
                <label for="files">Select file</label>
            </td>
            <td class="text-center">
                <a class="btn btn-danger btn-icon-split btn-sm" type="submit">
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
        </tbody>
        </thead>
    </table>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="insertModal">Input Corrective</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        </div>
    </div>
</div>
@endsection