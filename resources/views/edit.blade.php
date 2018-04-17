@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {{$user->name}}</div>

                <div class="panel-body">
					<form method="POST" action="{{route('update', $user->id)}}">
						{{ method_field('PUT') }}
						{{ csrf_field() }}
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" value="{{$user->name}}" class="form-control">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" value="{{$user->email}}" class="form-control">
						</div>
						<div class="form-group">
					        <button type="submit" class="btn-u btn-u-lg">
					            Confirm
					        </button>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection