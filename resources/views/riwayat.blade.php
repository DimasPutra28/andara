@extends('layouts.main1')
@section('bayu')

<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>

<section id="register" class="register" style="margin: 150px 0 150px 0">
    <h1 class="text-center mb-5" style="color: #AAC4FF; font-weight: bold">Pendaftaran Pasien Baru</h1>
    <div class="d-flex justify-content-center">
        <div class="col-lg-10">
            <form action="">
                @csrf
                <div class="card" style="border-radius: 5px;">
                    <div class="card-body my-5 ">

                    </div>
                </div>
                <div class="hayo text-end mt-5">
                    <button class="btn btn-light btn-lg text-white" style="background-color: #B1B2FF; padding: 7px 15px 7px 15px" type="submit">CONFIRM</button>
                </div>
            </form>
        </div>
    </div>
</section>


<script src="assets/plugins/global/plugins.bundle.js"></script>
<script>
    $(document).off('.datepicker.data-api');
    $('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});

</script>

@endsection
