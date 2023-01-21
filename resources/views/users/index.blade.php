@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container" style="text-align:right; width:38rem; margin-bottom:5px; padding:0;">
        <a href="users/create"class="btn btn-success" >Create User</a>
    </div>
</div>
<div class="card" style="margin:auto; width:38rem;">
    <table class="table table-striped table-hover" >
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
                <td>
                  <a href="{{route('users.edit', ['id' => $user->id])}}" class="btn btn-warning">Edit</a>
                  <form method="POST" action="{{route('users.destroy',['id'=>$user->id])}}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection