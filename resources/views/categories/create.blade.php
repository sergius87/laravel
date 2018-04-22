@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Category</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('categories.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn-u btn-u-lg">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Categories list</div>

                <div class="panel-body">
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Name of category</th>
                        <th>ID</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                      <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->id }}</td>
                        <td><a href="{{ route('categories.destroy', $category->id) }}" class="btn btn-danger" onclick="return confirm('Vas a borrar un usuario')"><span class="glyphicon glyphicon-remove"></span></a></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  {!! $categories->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection