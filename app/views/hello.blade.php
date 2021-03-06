@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Homepage
@stop

{{-- Content --}}
@section('content')

<h2>Miles for Myeloma</h2>
<div class="well">
	<p>
		Miles for Myeloma is an organization dedicated to raising funds for Myeloma research. To accomplish this goal, we organize an annual walk/run in Iowa City, Iowa.  All funds raised are donated to the Multiple Myeloma Research Foundation.
	</p>
	<p> To get started, sign up for the walk/run, volunteer to help out, or donate to Miles for Myeloma.</p>
    <a href="/races/current/signup/create/racer" class="btn btn-primary">Sign up to Walk (or run)</a> <a href="/races/current/signup/create/volunteer" class="btn btn-primary">Sign Up to Volunteer</a> <a href="/races/current/signup/create/donate" class="btn btn-primary">Donate</a>
</div>

@stop