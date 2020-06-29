{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('is_breeder', 'Is_breeder:') !!}
			{!! Form::text('is_breeder') !!}
		</li>
		<li>
			{!! Form::label('company_name', 'Company_name:') !!}
			{!! Form::text('company_name') !!}
		</li>
		<li>
			{!! Form::label('legal_status', 'Legal_status:') !!}
			{!! Form::text('legal_status') !!}
		</li>
		<li>
			{!! Form::label('address_id', 'Address_id:') !!}
			{!! Form::text('address_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}