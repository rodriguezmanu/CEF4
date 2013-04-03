{{ Form::model($worker, ['route' => $route, 'method' => $method]) }}

<p>
{{ Form::label('lastname', 'lastname: ') }}
{{ Form::text('lastname', null, ['size' => 40, 'maxlength' => 40]) }}
</p>

<p>
{{ Form::label('firstname', 'firstname: ') }}
{{ Form::text('firstname', null, ['size' => 40, 'maxlength' => 40]) }}
</p>

<p>
{{ Form::label('status', 'status: ') }}
{{ Form::text('status', null, ['size' => 40, 'maxlength' => 40]) }}
</p>

<p>
{{ Form::label('address1', 'address1: ') }}
{{ Form::text('address1') }}
</p>

<p>
{{ Form::label('address2', 'address2: ') }}
{{ Form::text('address2') }}
</p>

<p>
{{ Form::label('city', 'city: ') }}
{{ Form::text('city') }}
</p>

<p>
{{ Form::label('state', 'state: ') }}
{{ Form::text('state') }}
</p>

<p>
{{ Form::label('zip', 'zip: ') }}
{{ Form::text('zip') }}
</p>

<p>
{{ Form::label('homephone', 'homephone: ') }}
{{ Form::text('homephone') }}
</p>

<p>
{{ Form::label('cellphone', 'cellphone: ') }}
{{ Form::text('cellphone') }}
</p>

<p>
{{ Form::label('workphone', 'workphone: ') }}
{{ Form::text('workphone') }}
</p>

<p>
{{ Form::label('email', 'email: ') }}
{{ Form::text('email') }}
</p>

<p>
{{ Form::label('tagname', 'tagname: ') }}
{{ Form::text('tagname') }}
</p>

<p>
{{ Form::label('backgroundcheckdate', 'backgroundcheckdate: ') }}
{{ Form::text('backgroundcheckdate') }}
</p>

<p>
{{ Form::label('attendschurch_id', 'attendschurch_id: ') }}
{{ Form::select('attendschurch_id', $church_options) }}
</p>

<p>
{{ Form::label('church_id', 'church_id: ') }}
{{ Form::text('church_id') }}
</p>

<p>
{{ Form::submit() }}
</p>

{{ Form::close() }}
