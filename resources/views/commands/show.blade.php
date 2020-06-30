{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('is_breeder', 'Is_breeder:') }}
			{{ Form::text('is_breeder') }}
		</li>
		<li>
			{{ Form::label('company_name', 'Company_name:') }}
			{{ Form::text('company_name') }}
		</li>
		<li>
			{{ Form::label('legal_status', 'Legal_status:') }}
			{{ Form::text('legal_status') }}
		</li>
		<li>
			{{ Form::label('customer_id', 'Customer_id:') }}
			{{ Form::text('customer_id') }}
		</li>
		<li>
			{{ Form::label('clientele_id', 'Clientele_id:') }}
			{{ Form::text('clientele_id') }}
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
			{{ Form::label('unicorn_id', 'Unicorn_id:') }}
			{{ Form::text('unicorn_id') }}
		</li>
		<li>
			{{ Form::label('breeding_id', 'Breeding_id:') }}
			{{ Form::text('breeding_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}