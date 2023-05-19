@extends('layouts.main1')
@section('bayu')



<section id="register" class="register" style="margin: 150px 0 150px 0">
    <h1 class="text-center mb-5" style="color: #AAC4FF; font-weight: bold">Pendaftaran Pemeriksaan</h1>
    <div class="d-flex justify-content-center">
        <div class="col-lg-10">
            <form action="">
                @csrf
                <div class="card" style="border-radius: 5px;">
                    <div class="card-body my-3">
                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">Tanggal Periksa</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                       <input type='text' class="form-control" style="border: 3px solid #AAC4FF;" />
                                       <span class="input-group-addon">
                                       <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                                        <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                      </svg></span>
                                       </span>
                                    </div>
                                 </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">Spesialis</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan nama lengkap anda">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">Nomor Rekam Medis</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan no telepon anda">
                            </div>
                        </div>


                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">NIK</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan email anda">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">Nama Lengkap</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" style="border: 3px solid #AAC4FF;" class="form-control" placeholder="Masukkan alamat anda">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">keluhan </label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-select" style="border: 3px solid #AAC4FF;" aria-label="Default select example">
                                    <option disabled="disabled" selected="selected"></option>
                                    <option value="1">Pria</option>
                                    <option value="2">Wanita</option>
                                </select>
                            </div>

                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3" >
                                <label for="" style="font-weight: bold; font-size: 25px">Cara Bayar </label>
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

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
     </script>
</section>

@endsection
