@extends('layouts.layout')

@section('content')

      <div style="padding: 80px 0; text-align: center;">

            <h1>Clients List</h1>
            <br><br>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Registration Date</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->surname }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->created_at }}</td>
                            <td><ul class="pagination pagination"><li class="page-item"><a class="page-link" href="clients/{{$client->id}}">info</a></li></ul></td>
                            <form action="clients/{{$client->id}}" method="POST">
                              @csrf
                              @method('delete')
                              <td><button type="submit" class="btn btn-danger">Delete</button></td>
                            </form>
                          </tr>
                    @endforeach   
                </tbody>
              </table>

              <br><br>

              <ul class="pagination pagination-lg justify-content-center">
                   <li class="page-item"><a class="page-link" href="/">Back</a></li>
                   <li class="page-item"><a class="page-link" href="clients/create">Create Client</a></li>
              </ul>
              
      </div>
        
@endsection