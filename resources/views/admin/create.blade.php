@extends('layouts.layout')

@section('content')

      <div style="padding: 80px 0; text-align: center;">

            <h1>Create lesson</h1>
            <br><br>

            <form action="/courses" method="POST">
                  @csrf
                  <div class="row g-3 align-items-center justify-content-center">
                        <div class="col-auto">
                              <label class="col-form-label" >Course:</label>
                        </div>
                        <div class="col-auto">
                              <input type="text" class="form-control" name="course">
                        </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center justify-content-center">
                        <div class="col-auto">
                              <label class="col-form-label">Lessons:</label>
                        </div>
                        <div class="col-auto">
                              <input type="text" class="form-control" name="lessons">
                        </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center justify-content-center">
                        <div class="col-auto">
                              <label class="col-form-label">Professor:</label>
                        </div>
                        <div class="col-auto">
                              <input type="text" class="form-control"  name="professor">
                        </div>
                  </div>
                  <br>
                  <a class="btn btn-primary" href="/courses" role="button">Back</a> <button type="submit" class="btn btn-primary">Submit</button>
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