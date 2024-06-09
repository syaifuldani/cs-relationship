@extends('layouts.user-dashboard');
@section('content')
    <div class="container my-5">
        <h2 class="text-center mb-4">Bottle Order Form</h2>
        <form action='' method=''>
            <div class="form-group">
                <label for="warnagelas">Warna Gelas:</label>
                <input type="text" class="form-control" id="warnagelas" name="warnagelas" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <input type="text" class="form-control" id="kategori" name="kategori" required>
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas:</label>
                <input type="number" class="form-control" id="kapasitas" name="kapasitas" required>
            </div>
            <div class="form-group">
                <label for="tinggi">Tinggi:</label>
                <input type="number" class="form-control" id="tinggi" name="tinggi" required>
            </div>
            <div class="form-group">
                <label for="berat">Berat:</label>
                <input type="number" class="form-control" id="berat" name="berat" required>
            </div>
            <div class="form-group">
                <label for="diameter">Diameter:</label>
                <input type="number" class="form-control" id="diameter" name="diameter" required>
            </div>
            <div class="form-group">
                <label for="designbotol">Design Botol (upload foto):</label>
                <input type="file" class="form-control-file" id="designbotol" name="designbotol" required>
            </div>
            <div class="form-group">
                <label for="labelbotol">Label Botol (upload foto):</label>
                <input type="file" class="form-control-file" id="labelbotol" name="labelbotol" required>
            </div>
            <div class="form-group">
                <label for="kuantum">Kuantum:</label>
                <input type="number" class="form-control" id="kuantum" name="kuantum" required>
            </div>
            <div class="form-group">
                <label for="jenis_pembayaran">Jenis Pembayaran:</label>
                <select class="form-control" id="jenis_pembayaran" name="jenis_pembayaran" required>
                    <option value="Kredit">Kredit</option>
                    <option value="Transfer bank">Transfer bank</option>
                    <option value="Digital">Digital</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jangka_pembayaran">Jangka Pembayaran:</label>
                <select class="form-control" id="jangka_pembayaran" name="jangka_pembayaran" required>
                    <option value="30">30</option>
                    <option value="60">60</option>
                    <option value="120">120</option>
                    <option value="180">180</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jenis_pajak">Jenis Pajak:</label>
                <select class="form-control" id="jenis_pajak" name="jenis_pajak" required>
                    <option value="2.5">2.5</option>
                    <option value="3.5">3.5</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_pembayaran">Jumlah Pembayaran:</label>
                <input type="number" class="form-control" id="jumlah_pembayaran" name="jumlah_pembayaran" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
@endsection
