{{ Form::model($teacher, ['route' => $route, 'method' => $method]) }}

<p>
{{ Form::label('lastname', 'lastname: ') }}
{{ Form::text('lastname', null, ['size' => 40, 'maxlength' => 40]) }}
</p>

<p>
{{ Form::label('firstname', 'firstname: ') }}
{{ Form::text('firstname', null, ['size' => 40, 'maxlength' => 40]) }}
</p>

<p>
{{ Form::label('school_id', 'school_id: ') }}
{{ Form::select('school_id', $school_options) }}
</p>

<p>
{{ Form::submit() }}
</p>

{{ Form::token() . Form::close() }}
