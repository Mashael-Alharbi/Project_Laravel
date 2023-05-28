@extends('layouts.app')
@section('title','phone')
@section('content')

<div class="container">


    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">{{$phone->Name}}</h6>
              <small class="text-muted">{{$phone->Name}}</small>
            </div>
            <span class="text-muted">{{$phone->Price}}</span>
          </li>

          <li class="list-group-item d-flex justify-content-between">
            <span>Total (RS)</span>
            <strong>{{$phone->Total}}</strong>
          </li>
        </ul>


      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3 text-dark text-center" style="background-color:rgb(173, 201, 173)"><b>{{$phone->Name}}</b></h4>
        <div class="contianer">
          <form action="{{route('invoic')}}" method="POST">
            @csrf
            <input type="hidden" name="Productname" id="Productname" value={{$phone->Name}}>
            <input type="hidden" name="Total" id="Total" value={{$phone->Total}}>

          <div class="row">
            <div class="col">
              <label for="fullname">Full Name:</label>
              <input type="text" name="fullname" id="fullname" class="form-control" placeholder="your full name" required>
            </div>
            <div class="col">
              <label for="country"> Choose your country:</label> <br>
              <select name="country" id="country" class="form-control">
                <option> Riyadh</option>
                <option> Dammam</option>
                <option> Al-Hassa</option>
                <option> Tabuk</option>
                <option> Al Qassim</option>
              </select>
            </div>
            <div class="col">
              <label for="date"> Date of purchase:</label> <br>
              <input type="date" name="date" id="date" class="form-control" required>
            </div>

          </div>
          <div class="row">
            <div class="col">
              <label for="Phone">Phone Naumber:</label>
              <input type="text" name="Phone" id="Phone" class="form-control" placeholder=" your Phone" required>
            </div>
            <div class="col">
              <label for="email">Email:</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="your email" required>
            </div>
            <div class="col">
              <label for="Address">Address:</label>
              <input type="text" name="Address" id="Address" class="form-control" placeholder="your address" required>
            </div>
          </div>
          <div class="row m-5 text-center">
            <div class="col">
                <button type="submit" class="btn btn-outline-success btn-lg"> Submit the form</button>
            </div>
          </div></form>
        </div>


      </div>
    </div>


  </div>


@endsection
