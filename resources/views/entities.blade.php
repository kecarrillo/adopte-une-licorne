{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email') }}
		</li>
		<li>
			{{ Form::label('phone', 'Phone:') }}
			{{ Form::text('phone') }}
		</li>
		<li>
			{{ Form::label('wording_address', 'Wording_address:') }}
			{{ Form::text('wording_address') }}
		</li>
		<li>
			{{ Form::label('town', 'Town:') }}
			{{ Form::text('town') }}
		</li>
		<li>
			{{ Form::label('zip_code', 'Zip_code:') }}
			{{ Form::text('zip_code') }}
		</li>
		<li>
			{{ Form::label('country', 'Country:') }}
			{{ Form::text('country') }}
		</li>
		<li>
			{{ Form::label('company_id', 'Company_id:') }}
			{{ Form::text('company_id') }}
		</li>
		<li>
			{{ Form::label('customer_id', 'Customer_id:') }}
			{{ Form::text('customer_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}