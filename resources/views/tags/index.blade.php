@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tags list</div>

                <div class="panel-body">
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Name of tag</th>
                        <th>ID</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                      <tr>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->id }}</td>
                        <td><a href="{{ route('tags.destroy', $tag->id) }}" class="btn btn-danger" onclick="return confirm('Vas a borrar un usuario')"><span class="glyphicon glyphicon-remove"></span></a></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  {!! $tags->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection