{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('date', 'Date:') !!}
			{!! Form::text('date') !!}
		</li>
		<li>
			{!! Form::label('breeding_id', 'Breeding_id:') !!}
			{!! Form::text('breeding_id') !!}
		</li>
		<li>
			{!! Form::label('customer_id', 'Customer_id:') !!}
			{!! Form::text('customer_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}