@extends('layouts.main')

@section('dimas')
<section class="register" id="register" style="margin: 120px 0 150px 0">
    <h1 class="text-center mb-5" style="color: #AAC4FF">REGISTER</h1>
    <h4 class="text-center mb-5" style="color: #AAC4FF">Please fill in the information below:</h4>
    <form action="" method="POST">
        @csrf
        <div class="d-flex justify-content-center mb-4">
                <input type="text" class="form-control-lg" placeholder="First Name" style="background-color: #EEF1FF; width: 50%">
        </div>
        <div class="d-flex justify-content-center mb-4">
            <input type="text" class="form-control-lg" placeholder="Last Name" style="background-color: #EEF1FF; width: 50%">
        </div>
        <div class="d-flex justify-content-center mb-4">
            <input type="text" class="form-control-lg" placeholder="Email" style="background-color: #EEF1FF; width: 50%">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <input type="text" class="form-control-lg" placeholder="Password" style="background-color: #EEF1FF; width: 50%">
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 50px">
            <button class="btn text-white btn-lg" type="submit"  style="background-color: #B1B2FF; width: 50%">REGISTER</button>
        </div>
    </form>
</section>
@endsection
