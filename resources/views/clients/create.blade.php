@extends('layouts.layout')

@section('content')

      <div style="padding: 80px 0; text-align: center;">

            <h1>Create Client</h1>
            <br><br>

            <form action="/clients" method="POST">
                  @csrf
                  <div class="row g-3 align-items-center justify-content-center">
                        <div class="col-auto">
                              <label class="col-form-label" >Name:</label>
                        </div>
                        <div class="col-auto">
                              <input type="text" class="form-control" name="name">
                        </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center justify-content-center">
                        <div class="col-auto">
                              <label class="col-form-label">Surname:</label>
                        </div>
                        <div class="col-auto">
                              <input type="text" class="form-control" name="surname">
                        </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center justify-content-center">
                        <div class="col-auto">
                              <label class="col-form-label">Email:</label>
                        </div>
                        <div class="col-auto">
                              <input type="text" class="form-control"  name="email">
                        </div>
                  </div>
                  <br>
                  <a class="btn btn-primary" href="/clients" role="button">Back</a> <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <br><br>
            
            @if ($errors->any())
                <div class="alert alert-danger text-center" role="alert">
                        @foreach ($errors->all() as $error)
                              <li class="text-red-500 list-none">
                                    {{$error}}
                              </li>         
                        @endforeach
                </div>
            @endif
        
@endsection