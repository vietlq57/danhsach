@extends('layouts.app')

@section('title', 'Create Person')

@section('content')

	@include('common.errors')
	<div class="text-center">
		<h1>Create Person</h1>
		{!! Form::open(array('url' => 'person')) !!}
		<div class="form-group">
			{!! Form::label('firstname', 'FirstName', array('class'=>'control-label col-sm-2')) !!}
			{!! Form::text('firstname', null, array('class' => 'col-sm-10'))  !!}
			<br />
		</div>
		
		<div class="form-group">
			{!! Form::label('lastname', 'LastName',array('class'=>'control-label col-sm-2')) !!}
			{!! Form::text('lastname', null, array('class' => 'col-sm-10')) !!} 
			<br />
		</div>
			
		<div class="form-group">	
			{!! Form::label('email', 'Email',array('class'=>'control-label col-sm-2')) !!}
			{!! Form::text('email', null, array('class' => 'col-sm-10')) !!}
			<br />
		</div>
		
		<div class="form-group">
			{!! Form::label('phone', 'Phone',array('class'=>'control-label col-sm-2')) !!}
			{!! Form::text('phone',null, array('class' => 'col-sm-10')) !!}
			<br />
		</div>
		
			{!! Form::submit('Create', array('class' => 'btn btn-info')) !!}
			
		{!! Form::close() !!}
	</div>
@endsection
	
</body>
</html>

