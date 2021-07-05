@extends('layouts.layout')

@section('content')

      <div style="padding: 80px 0;">

            <h1 style='text-align:center;'>Courses that can buy: {{$client->name}} {{$client->surname}}</h1>
            <br>

            @if (Session::has('error'))
                  <div class="alert alert-danger text-center">
                        {!! Session::get('error') !!}  
                  </div>
            @endif  
      
            @foreach ($courses as $course)
                  <p class='display-6'> {{$course->course}} </p>
                  <ul class="list-group list-group-flush">
                         <form action="/clients/{id}/courses" method="POST">
                               @csrf    
                               <li class="list-group-item"><b>Lessons:</b> {{ $course->lessons }} </li>
                               <li class="list-group-item"><b>Professor:</b> {{ $course->professor }} </li>
                               <input type="hidden" name="client_id" value="{{$client->id}}">
                               <input type="hidden" name="course_id" value="{{$course->id}}">            
                              <li class="list-group-item text-right"><button type="submit" class="btn btn-primary">Buy</button></li>
                        </form>
                  </ul>
                  <br>
            @endforeach 
            
            <ul class="pagination pagination-lg justify-content-center">
                  <li class="page-item"><a class="page-link" href="/clients/{{$client->id}}">Back</a></li>
            </ul>
      </div>
        
@endsection