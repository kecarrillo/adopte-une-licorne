{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('age', 'Age:') }}
			{{ Form::text('age') }}
		</li>
		<li>
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
		</li>
		<li>
			{{ Form::label('mating_season', 'Mating_season:') }}
			{{ Form::text('mating_season') }}
		</li>
		<li>
			{{ Form::label('date_start_mating_season', 'Date_start_mating_season:') }}
			{{ Form::text('date_start_mating_season') }}
		</li>
		<li>
			{{ Form::label('nb_mating', 'Nb_mating:') }}
			{{ Form::text('nb_mating') }}
		</li>
		<li>
			{{ Form::label('company_id', 'Company_id:') }}
			{{ Form::text('company_id') }}
		</li>
		<li>
			{{ Form::label('unit_cost_HT', 'Unit_cost_HT:') }}
			{{ Form::text('unit_cost_HT') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}