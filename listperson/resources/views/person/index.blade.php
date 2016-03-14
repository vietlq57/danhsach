@extends('layouts.app')

@section('title', 'List')

@section('content')
{{-- Form::open(['route' => array('person.search',$keys), 'method' => 'GET']) --}}
{{-- Form::open(['route' => array('PersonController@search',$keys), 'method' => 'GET']) --}}
	
	
	
	<!--<form method="GET" action="/person" >
		<input type="text" name="keys" value="asdasda" />
		<input type="submit" />
		
	</form>-->
	<div class="page-header">
		<div class="row">
			<div class="col-sm-8 text-right">
				<h1>List Person</h1>
			</div>
			
			<div class="col-sm-4 text-right">
				{{ Form::open(['route' => 'person.index', 'method' => 'GET']) }}
					{{ Form::text('keys', null, array('placeholder'=>'Search...')) }}
					{{ Form::submit('Search', array('class' => 'btn')) }}
				{{ Form::close() }}
			</div>
			
		</div>
	</div>
	
	
	
	<table class="table table-striped text-center">
		<thead>
			<td>PersonId</td>
			<td>FirstName</td>
			<td>LastName</td>
			<td>Email</td>
			<td>Phone</td>
			<td></td>
		@if(count($person) > 0)
		</thead>
		
			@foreach($person as $p)
				@if($p->PersonId % 2 ==0)
					
					<tr class=".success">
						<td>{{ $p->PersonId }}</td>
						<td>{{ $p->FirstName }}</td>
						<td>{{ $p->LastName }}</td>
						<td>{{ $p->Email }}</td>
						<td>{{ $p->Phone }}</td>
						<td>
							<a href="{{ URL::to('person/' . $p->PersonId . '/edit') }}" class="btn btn-danger">Edit</a>
						</td>
					</tr>
				
					
				@else
					<tr class=".danger">
						<td>{{ $p->PersonId }}</td>
						<td>{{ $p->FirstName }}</td>
						<td>{{ $p->LastName }}</td>
						<td>{{ $p->Email }}</td>
						<td>{{ $p->Phone }}</td>
						<td>
							<a href="{{ URL::to('person/' . $p->PersonId . '/edit') }}" class="btn btn-danger">Edit</a>
						</td>
					</tr>
				@endif
			@endforeach
					
		@endif
	</table>
	
	<div class="text-right">
		<a href="{{ URL::to('person/create') }}"><p class="btn btn-info">Create Person</p></a>
	</div>
	
	
	<div class="text-center">
		{{ $person->links() }}
	</div>
        <!--<form action= "{{ url('person/create') }}" method="POST">
            <input type='submit' value="Add Person" />
        </form>-->
        
        
    
@endsection
