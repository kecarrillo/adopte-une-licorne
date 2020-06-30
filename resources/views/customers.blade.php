{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('firstname', 'Firstname:') }}
			{{ Form::text('firstname') }}
		</li>
		<li>
			{{ Form::label('lastname', 'Lastname:') }}
			{{ Form::text('lastname') }}
		</li>
		<li>
			{{ Form::label('company_id', 'Company_id:') }}
			{{ Form::text('company_id') }}
		</li>
		<li>
			{{ Form::label('companies_id', 'Companies_id:') }}
			{{ Form::text('companies_id') }}
		</li>
		<li>
			{{ Form::label('entity_id', 'Entity_id:') }}
			{{ Form::text('entity_id') }}
		</li>
		<li>
			{{ Form::label('bred_id', 'Bred_id:') }}
			{{ Form::text('bred_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}