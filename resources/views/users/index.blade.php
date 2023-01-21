@extends('layouts.app')
@section('content')
<div class="card" style="margin:auto; width:38rem;">
    <table class="table table-striped table-hover" >
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created At</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
              </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection