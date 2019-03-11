@extends('layouts.master')
@section('content')

<div class="container">

    <div class="card mt-3 col-md-8">

        <div class="card-body">
            <form action="{{ route('createId') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="nameEnglish">Name (English) :</label>
                        <input type="text" class="form-control" name="name-english" id="nameEnglish" placeholder="Name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="nameBangla">Name (Bengali):</label>
                        <input type="text" class="form-control" name="name-bengali" id="nameBangla" placeholder="Name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputState">Designation :</label>
                        <select name="designation" id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option value="DG">DG</option>
                            <option value="Secretary">Secretary</option>
                            <option value="Admin">Admin</option>

                        </select>
                    </div>

                    <div class="form-group col-md-7">
                        <label for="contactNumber">Contact Number</label>
                        <input type="text" class="form-control" name="contact-number" id="contactNumber" placeholder="8801717000000">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputState">Blood Group :</label>
                        <select name="blood-group" id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option value="A+"> A+ (A Positive)</option>
                            <option value="A-">A- (A Negative)</option>
                            <option value="A-">B+ (B Positive)</option>
                            <option value="A-">B- (B Negative)</option>
                            <option value="A-">O+ (O Positive)</option>
                            <option value="A-">O- (O Negative)</option>
                            <option value="A-">AB+ (AB Positive)</option>
                            <option value="A-">AB- (AB Negative)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-7">
                        <label for="inputNid">NID Number :</label>
                        <input type="text" class="form-control" name="nid-number" id="inputNid" placeholder="">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="emergencyContact">Emergency Contact Number</label>
                        <input type="text" class="form-control" name="emergency-contact" id="emergencyContact"
                            placeholder="8801717000000">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="emailAddress">Email Address :</label>
                        <input type="text" class="form-control" name="email-address" id="emailAddress" placeholder="">
                    </div>
                </div>

                <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
            </form>
        </div>
    </div>
</div>

@endsection
