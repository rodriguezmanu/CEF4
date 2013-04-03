{{ Form::model($church, ['route' => $route, 'method' => $method]) }}

<p>
{{ Form::label('name', 'Name: ') }}
{{ Form::text('name', null, ['size' => 40, 'maxlength' => 40]) }}
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
{{ Form::label('phone', 'phone: ') }}
{{ Form::text('phone') }}
</p>

<p>
{{ Form::label('fax', 'fax: ') }}
{{ Form::text('fax') }}
</p>

<p>
{{ Form::label('pastor_last_name', 'pastor_last_name: ') }}
{{ Form::text('pastor_last_name') }}
</p>

<p>
{{ Form::label('pastor_first_name', 'pastor_first_name: ') }}
{{ Form::text('pastor_first_name') }}
</p>

<p>
{{ Form::label('pastor_email', 'pastor_email: ') }}
{{ Form::text('pastor_email') }}
</p>

<p>
{{ Form::submit() }}
</p>

{{ Form::close() }}
