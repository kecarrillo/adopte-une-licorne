{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('zip_code', 'Zip_code:') !!}
			{!! Form::text('zip_code') !!}
		</li>
		<li>
			{!! Form::label('town', 'Town:') !!}
			{!! Form::text('town') !!}
		</li>
		<li>
			{!! Form::label('wording', 'Wording:') !!}
			{!! Form::text('wording') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}