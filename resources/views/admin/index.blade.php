@extends('layouts.layout')

@section('content')

      <div style="padding: 80px 0;">

            <h1 style='text-align:center;'>Courses</h1>
            <br>
      
            @foreach ($courses as $course)
                  <p class='display-6'> {{$course->course}}  </p>
                  <ul class="list-group list-group-flush">
                         <form action="/courses/{{$course->id}}/" method="POST">
                               @csrf    
                               @method('delete')
                               <li class="list-group-item"><b>Lessons:</b> {{ $course->lessons }} </li>
                               <li class="list-group-item"><b>Professor:</b> {{ $course->professor }} </li>
                               <input type="hidden" name="course_id" value="{{$course->id}}">            
                               <li class="list-group-item text-right"><a class="btn btn-primary" href="courses/{{$course->id}}/edit" role="button">Edit</a>  <button type="submit" class="btn btn-danger">delete</button></li>
                        </form>
                  </ul>
                  <br>
            @endforeach 
            
            <ul class="pagination pagination-lg justify-content-center"> 
                  <li class="page-item"><a class="page-link" href="/">Back</a></li>
                  <li class="page-item"><a class="page-link" href="courses/create">Create Lesson</a></li>
            </ul>
      </div>
        
@endsection