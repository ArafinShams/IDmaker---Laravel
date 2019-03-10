@extends('layouts.master')
@section('content')

<div class="container">

  <div class="card mt-3 col-md-8">


    <div class="card-body">
      <form>
       <div class="form-row">
          <div class="form-group col-md-12">
            <label for="nameEnglish">Name (English) :</label>
            <input type="text" class="form-control" id="nameEnglish" placeholder="Name">
          </div>
       </div>
       <div class="form-row">
          <div class="form-group col-md-12">
            <label for="nameBangla">Name (Bengali):</label>
            <input type="text" class="form-control" id="nameBangla" placeholder="Name">
            </div>
       </div>
        
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputState">Blood Group :</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
                <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-8">
            <label for="inputNid">Email Address :</label>
            <input type="text" class="form-control" id="inputNid" placeholder="">
          </div>
        </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputAddress">Contact Number</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="8801717000000">
        </div>

        <div class="form-group col-md-6">
          <label for="inputAddress">Emergency Contact Number</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="8801717000000">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="inputState">Designation :</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="form-group col-md-7">
          <label for="inputNid">NID Number :</label>
          <input type="text" class="form-control" id="inputNid" placeholder="">
        </div>
      </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block" >Sign in</button>
      </form>
    </div>
  </div>
</div>

@endsection