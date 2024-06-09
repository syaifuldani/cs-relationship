@extends('layouts.user-dashboard');
@section('content')
    <div class="my-5">
        <h1>Pesanan Anda</h1>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-default mb-2" data-toggle="modal" data-target="#modal-default">
                            Tambah Pesanan
                        </button>
                        <!-- /.card -->
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID PERMINTAAN</th>
                                            <th>WARNA GELAS</th>
                                            <th>KATEGORI</th>
                                            <th>TINGGI</th>
                                            <th>BERAT</th>
                                            <th>DIAMETER</th>
                                            <th>DESIGN BOTOL</th>
                                            <th>LABEL BOTOL</th>
                                            <th>KUANTUM</th>
                                            <th>JENIS PEMBAYARAN</th>
                                            <th>JANGKA PEMBAYARAN</th>
                                            <th>JANGKA PAJAK</th>
                                            <th style="width: 100px;">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                bening
                                            </td>
                                            <td>
                                                Kaca
                                            </td>
                                            <td>
                                                25cm
                                            </td>
                                            <td>
                                                100gram
                                            </td>
                                            <td>
                                                10
                                            </td>
                                            <td>
                                                ini
                                            </td>
                                            <td>
                                                ini
                                            </td>
                                            <td>
                                                100
                                            </td>
                                            <td>
                                                Transfer
                                            </td>
                                            <td>
                                                30
                                            </td>
                                            <td>
                                                2.5
                                            </td>
                                            <td>
                                                <button type="submit" data-toggle="modal" data-target="#modal-edited"
                                                    name="t_edit" class="btn btn-success btn-sm">Edit</button>
                                                <button type="submit" data-toggle="modal" data-target="#modal-delete"
                                                    name="t_delete" id="t_delete"
                                                    class="btn btn-danger btn-sm">Hapus</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                bening
                                            </td>
                                            <td>
                                                Kaca
                                            </td>
                                            <td>
                                                25cm
                                            </td>
                                            <td>
                                                100gram
                                            </td>
                                            <td>
                                                10
                                            </td>
                                            <td>
                                                ini
                                            </td>
                                            <td>
                                                ini
                                            </td>
                                            <td>
                                                100
                                            </td>
                                            <td>
                                                Transfer
                                            </td>
                                            <td>
                                                30
                                            </td>
                                            <td>
                                                2.5
                                            </td>
                                            <td>
                                                <button type="submit" data-toggle="modal" data-target="#modal-edited"
                                                    name="t_edit" class="btn btn-success btn-sm">Edit</button>
                                                <button type="submit" data-toggle="modal" data-target="#modal-delete"
                                                    name="t_delete" id="t_delete"
                                                    class="btn btn-danger btn-sm">Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID PERMINTAAN</th>
                                            <th>WARNA GELAS</th>
                                            <th>KATEGORI</th>
                                            <th>TINGGI</th>
                                            <th>BERAT</th>
                                            <th>DIAMETER</th>
                                            <th>DESIGN BOTOL</th>
                                            <th>LABEL BOTOL</th>
                                            <th>KUANTUM</th>
                                            <th>JENIS PEMBAYARAN</th>
                                            <th>JANGKA PEMBAYARAN</th>
                                            <th>JANGKA PAJAK</th>
                                            <th style="width: 100px;">AKSI</th>
                                        </tr>
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
    </div>
@endsection
