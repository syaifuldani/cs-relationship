@extends('layouts.register-menu')
@section('content')
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1"><b>CS</b> - Relations</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form method="POST" action="{{ route('register.submit') }}" autocomplete="on">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="konfirmasi-password">Confirm Password</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" id="konfirmasi-password" name="konfirmasi-password"
                                placeholder="Confirm Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="login-box-msg">Company Information</p>

                    <div class="form-group">
                        <label for="nama_pegawai">Employee Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai"
                                placeholder="Employee Name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Position</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Position">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-briefcase"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bbusaha">Business Form</label>
                        <div class="input-group mb-3">
                            <select class="form-control" id="bbusaha" name="bbusaha">
                                <option value="PT">Limited Liability Company</option>
                                <option value="CV">CV</option>
                                <option value="Perusahaan Negara">State-Owned Company</option>
                                <option value="Koperasi">Cooperative</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_perusahaan">Company Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                placeholder="Company Name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-building"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nohp">Phone Number</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" id="nohp" name="nohp"
                                placeholder="Phone Number">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kbisnis">Business Activity</label>
                        <div class="input-group mb-3">
                            <select class="form-control" id="kbisnis" name="kbisnis">
                                <option value="manufaktur">Manufacturing</option>
                                <option value="Jasa">Services</option>
                                <option value="dagang">Trading</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bindustri">Industry Sector</label>
                        <div class="input-group mb-3">
                            <select class="form-control" id="bindustri" name="bindustri">
                                <option value="makanminuman">Food & Beverages</option>
                                <option value="farmasi">Pharmacy</option>
                                <option value="kimia">Chemicals</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Address</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                placeholder="Address">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-map-marker-alt"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </form>

                <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
@endsection
