@extends('layouts.main')

@section('dimas')
<section class="login" id="login" style="margin: 120px 0 150px 0">
    <h1 class="text-center mb-5" style="color: #AAC4FF">LOGIN</h1>
    <h4 class="text-center mb-5" style="color: #AAC4FF">Please enter your e-mail and password:</h4>
    <form action="" method="POST">
        @csrf
        <div class="d-flex justify-content-center mb-4">
                <input type="text" class="form-control-lg" placeholder="Email" style="background-color: #EEF1FF; width: 50%">
        </div>
        <div class="d-flex justify-content-center mb-4">
            <input type="text" class="form-control-lg" placeholder="Password" style="background-color: #EEF1FF; width: 50%">
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 50px">
            <button class="btn text-white btn-lg" type="submit"  style="background-color: #B1B2FF; width: 50%">LOGIN</button>
        </div>
        <div class="d-flex justify-content-center" style="margin-top: 10px">
            <strong class="text-center">Don't have an account?<a style="text-decoration: none" href="/register">Create One</a></strong>
        </div>
    </form>
</section>
@endsection
