@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                      <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ route('destroy', $user->id) }}" class="btn btn-danger" onclick="return confirm('Vas a borrar un usuario')"><span class="glyphicon glyphicon-remove"></span></a> <a href="{{ route('edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
