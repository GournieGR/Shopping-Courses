@extends('layouts.layout')

@section('content')

      <div style="padding: 80px 0; text-align: center;">

          <img style="width:650px; height:400px;"src="/img/course.jpg">
          <br><br>
          <p class="font-weight-normal">You can create a virtual client and shop for language courses you are interested in learning</p>
          <p class="font-weight-normal">What you are ?</p>
          <br>
          <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item"><a class="page-link" href="clients">Client</a></li>
            <li class="page-item"><a class="page-link" href="courses">Admin</a></li>
       </ul>

      </div>
        
@endsection