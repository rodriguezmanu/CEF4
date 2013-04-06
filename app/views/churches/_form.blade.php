{{ Form::model($church, ['route' => $route, 'method' => $method]) }}

<fieldset>
	<legend>Contact</legend>
	<div><label for="name">Name</label> <input id="name" name="name"></div>
	<fieldset class="radio">
		<legend><span>Gender</span></legend>
		<ul>
			<li><input type="radio" id="male" name="male"> <label for="male">Male</label></li>
			<li><input type="radio" id="female" name="female"> <label for="female">Female</label></li>
		</ul>
	</fieldset>
</fieldset>



<table>
<tr>
<td>
{{ Form::label('name', 'Name: ', array('class' => 'frmlabel')) }}
{{ Form::text('name', null, ['size' => 40, 'maxlength' => 40]) }}
</td>
</tr>
<tr>
<td>
{{ Form::label('address1', 'address1: ') }}
{{ Form::text('address1') }}
</td>
</tr>
</table>
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

{{ Form::token() . Form::close() }}
