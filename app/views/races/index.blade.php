@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Races
@stop

{{-- Content --}}
@section('content')

	<h1>Races</h1>
	<div class="well">
		<table class="table">
			<thead>
				<th>Name</th>
				@if(Sentry::getUser() && Sentry::getUser()->hasAccess('admin'))
				<th>Options</th>
				@endif
			</thead>
			<tbody>
				@foreach ($races as $race)
					<tr>
						<td><a href="{{ URL::to('races/') }}/{{ $race->slug }}">{{ $race->name }}</a></td>
						@if(Sentry::getUser() && Sentry::getUser()->hasAccess('admin'))
						<td><button class="btn" onClick="location.href='{{ URL::to('races/edit') }}/{{ $race->slug}}'">Edit</button> <button class="btn action_confirm" href="{{ URL::to('races/delete') }}/{{ $race->slug}}" data-token="{{ Session::getToken() }}" data-method="delete">Delete</button></td>
						@endif
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop
