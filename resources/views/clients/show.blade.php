@extends('layouts.layout')

@section('content')

      <div style="padding: 80px 0; text-align: center;">

            <h1> Information Client </h1>
            <hr>

            <p class="display-6"><b>Name:</b> {{ $client->name }}</p>
            <p class="display-6"><b>Surname: </b>{{ $client->surname }}</p>
            <p class="display-6"><b>Email: </b> {{ $client->email }}</p>
            <br>
            <p class="display-6"><b>Courses</b></p>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Lessons</th>
                    <th scope="col">Professor</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($client->courses as $course)
                    <tr>
                        <td>{{ $course->course }}</td>
                        <td>{{ $course->lessons }}</td>
                        <td>{{ $course->professor }}</td>
                    </tr>
                @empty
                    <p style='color:red;'><b>No course payment</b></p>
                @endforelse
                </tbody>
            </table>

            <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item"><a class="page-link" href="/clients">Back</a></li>
                <li class="page-item"><a class="page-link" href="/clients/{{$client->id}}/courses">Buy Course</a></li>
            </ul>

      </div>     
@endsection