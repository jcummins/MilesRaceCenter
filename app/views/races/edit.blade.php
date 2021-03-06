@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Edit Race
@stop

{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
	{{ Form::open(array('url' => URL::to('races/'.$race->slug), 'method' => 'put')) }}
		<div class="form-group {{ ($errors->has('slug')) ? 'error' : '' }}" for="slug">
            <h2>Edit Race</h2>
            <label class="control-label" for="slug">Slug</label>
            <div class="controls">
                <input name="slug" id="slug" value="{{{ (Request::old('slug')) ? Request::old("slug") : $race->slug }}}" type="text" class="form-control" placeholder="Slug">
                {{ ($errors->has('slug') ? $errors->first('slug') : '') }}
            </div>
        </div>

                <div class="form-group {{ ($errors->has('name')) ? 'error' : '' }}" for="name">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
                <input name="name" id="name" value="{{{ (Request::old('name')) ? Request::old("name") : $race->name }}}" type="text" class="form-control" placeholder="Name">
                {{ ($errors->has('name') ? $errors->first('name') : '') }}
            </div>
        </div>

        <div class="form-group {{ ($errors->has('description')) ? 'error' : '' }}" for="description">
            <label class="control-label" for="description">Description</label>
            <div class="controls">
                <input name="description" id="description" value="{{{ (Request::old('description')) ? Request::old("description") : $race->description }}}" type="text" class="form-control" placeholder="Description">
                {{ ($errors->has('description') ? $errors->first('description') : '') }}
            </div>
        </div>

        <div class="form-group {{ ($errors->has('timezone')) ? 'error' : '' }}" for="timezone">
            <label class="control-label" for="timezone">Timezone</label>
            <div class="controls">
                {{ Form::select('timezone', Config::get('app.timezoneSelectList',''), Request::old('timezone') ? Request::old('timezone') : $race->timezone, array('class'=>'form-control')) }}
                {{ ($errors->has('timezone') ? $errors->first('timezone') : '') }}
            </div>
        </div>

		<div class="form-group {{ ($errors->has('startLocal')) ? 'error' : '' }}" for="startLocal">
            <label class="control-label" for="startLocal">Start</label>
            <div class="controls">
                <input name="startLocal" id="startLocal" value="{{{ (Request::old('startLocal')) ? Request::old("startLocal") : $race->startLocal['string'] }}}" type="text" class="form-control" placeholder="Start">
                {{ ($errors->has('startLocal') ? $errors->first('startLocal') : '') }}
            </div>
        </div>

		<div class="form-group {{ ($errors->has('endLocal')) ? 'error' : '' }}" for="endLocal">
            <label class="control-label" for="endLocal">End</label>
            <div class="controls">
                <input name="endLocal" id="endLocal" value="{{{ (Request::old('endLocal')) ? Request::old("endLocal") : $race->endLocal['string'] }}}" type="text" class="form-control" placeholder="End">
                {{ ($errors->has('endLocal') ? $errors->first('endLocal') : '') }}
            </div>
        </div>

		<div class="form-group {{ ($errors->has('website')) ? 'error' : '' }}" for="website">
            <label class="control-label" for="website">Website</label>
            <div class="controls">
                <input name="website" id="website" value="{{{ (Request::old('website')) ? Request::old("website") : $race->website }}}" type="text" class="form-control" placeholder="Website">
                {{ ($errors->has('website') ? $errors->first('website') : '') }}
            </div>
        </div>

		<div class="form-actions">
	    	<input class="btn-primary btn" type="submit" value="Edit">
	    	<input class="btn " type="reset" value="Reset">
	    </div>

	{{ Form::close() }}
    </div>
</div>
@stop