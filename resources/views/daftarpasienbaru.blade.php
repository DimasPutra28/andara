@extends('layouts.main')
@section('dimas')

<section id="register" class="register" style="margin: 150px 0 150px 0">
    <h1 class="text-center mb-5" style="color: #AAC4FF; font-weight: bold">Pendaftaran Pasien Baru</h1>
    <div class="d-flex justify-content-center">
        <div class="col-lg-10">
            <form action="">
                @csrf
                <div class="card" style="border-radius: 5px;">
                    <div class="card-body my-3">
                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">NIK</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan NIK anda">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">Nama Lengkap</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan nama lengkap anda">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">No Telepon</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan no telepon anda">
                            </div>
                        </div>


                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">Email</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan email anda">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">Alamat</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan alamat anda">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">Jenis kelamin</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-select" style="border: 3px solid #AAC4FF;" aria-label="Default select example">
                                    <option disabled="disabled" selected="selected">Pilih jenis kelamin anda</option>
                                    <option value="1">Pria</option>
                                    <option value="2">Wanita</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="hayo text-end mt-5">
                    <button class="btn btn-light btn-lg text-white" style="background-color: #B1B2FF; padding: 7px 15px 7px 15px" type="submit">CONFIRM</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
