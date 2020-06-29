{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('nb_unicorn', 'Nb_unicorn:') !!}
			{!! Form::text('nb_unicorn') !!}
		</li>
		<li>
			{!! Form::label('unit_cost_HT', 'Unit_cost_HT:') !!}
			{!! Form::text('unit_cost_HT') !!}
		</li>
		<li>
			{!! Form::label('gender', 'Gender:') !!}
			{!! Form::text('gender') !!}
		</li>
		<li>
			{!! Form::label('owner_id', 'Owner_id:') !!}
			{!! Form::text('owner_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}