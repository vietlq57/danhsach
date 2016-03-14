@extends('layouts.app')

@section('title', 'Edit Person')

@section('content')
	@include('common.errors')
	<div class="text-center">
		<h1>Edit {{ $person->FirstName . ' ' . $person->LastName }}</h1>
		{{ Form::model($person, array('route' => array('person.update', $person->PersonId), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
		<div class="form-group">
			{!! Form::label('firstname', 'FirstName', array('class'=>'control-label col-sm-2')) !!}
			{!! Form::text('firstname', $person->FirstName, array('class' => 'col-sm-10'))  !!}
			<br />
		</div>
		
		<div class="form-group">
			{!! Form::label('lastname', 'LastName',array('class'=>'control-label col-sm-2')) !!}
			{!! Form::text('lastname', $person->LastName, array('class' => 'col-sm-10')) !!} 
			<br />
		</div>
			
		<div class="form-group">	
			{!! Form::label('email', 'Email',array('class'=>'control-label col-sm-2')) !!}
			{!! Form::text('email', $person->Email, array('class' => 'col-sm-10')) !!}
			<br />
		</div>
		
		<div class="form-group">
			{!! Form::label('phone', 'Phone',array('class'=>'control-label col-sm-2')) !!}
			{!! Form::text('phone',$person->Phone, array('class' => 'col-sm-10')) !!}
			<br />
		</div>
			
			{!! Form::submit('Edit', array('class' => 'btn btn-info')) !!}
		{!! Form::close() !!} 
	</div>
@endsection
	
