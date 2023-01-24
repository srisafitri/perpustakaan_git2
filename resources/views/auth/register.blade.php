@extends('layouts.app')

@section('title', 'Register')

@section('content')
<main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registrasi</h3></div>
                                    <div class="card-body">
                                        <form action="{{url('/proses-register')}}" method="POST" enctype="multipart/from-data">
                                            @csrf

                                            <div class="row mb-3">
                                                <div class="col">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="name" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">Nama</label>
                                                        @error('name')
                                                        <div class="alert alert-danger">
                                                            <span class="text-danger"> Nama Harus Diisi </span>
                                                            @enderror
                                                    </div>
                                                </div>

                                                <!-- <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div> -->

                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                <div class="col filter-form mt-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  name="no_telepon" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">No. Telepon</label>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                <div class="col filter-form mt-3" >
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <textarea name="alamat" id="inputAlamat" cols="30" rows="10" class="form-control" placeholder="Masukkan Alamat Anda..."></textarea>
                                                        <label for="inputAlamat">Alamat</label>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                <div class="col filter-form mt-3">
                                                       <label for="uploadFoto">Upload Foto</label>
                                                       <input name="foto_profil" id="uploadfoto" type="file" class="form-control">
                                                    </div>
                                                </div>

                                                <!-- <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Register</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection