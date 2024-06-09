@extends('layouts.admin-dashboard')
@section('content')
    {{-- ==================================CONTENT MAIN ========================================= --}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Order Permintaan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Order Permintaan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-2">
                    <!-- /.card -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID PERMINTAAN</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Status Order</th>
                                        <th>Tanggal Permintaan</th>
                                        <th>Jangka Pembayaran</th>
                                        <th>Jenis Pajak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#">1 adalah ketuhanan yang maha esa</a>
                                        </td>
                                        <td>
                                            Bejo Makmur Group
                                        </td>
                                        <td>
                                            Draf
                                        </td>
                                        <td>
                                            09 Juni 2024
                                        </td>
                                        <td>
                                            30 Hari
                                        </td>
                                        <td>
                                            PPN 2.5 %
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    {{-- <tr>
                                        <th>ID PERMINTAAN</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Status Order</th>
                                        <th>Tanggal Permintaan</th>
                                        <th>Jangka Pembayaran</th>
                                        <th>Jenis Pajak</th>
                                    </tr> --}}
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
