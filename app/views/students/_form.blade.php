{{ Form::model($student, ['route' => $route, 'method' => $method]) }}

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
{{ Form::label('photorelease', 'photorelease: ') }}
{{ Form::text('photorelease', null, ['size' => 40, 'maxlength' => 40]) }}
</p>

<p>
{{ Form::label('sex', 'sex: ') }}
{{ Form::text('sex', null, ['size' => 40, 'maxlength' => 40]) }}
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
{{ Form::label('birthdate', 'birthdate: ') }}
{{ Form::text('birthdate') }}
</p>

<p>
{{ Form::label('grade_id', 'grade_id: ') }}
{{ Form::text('grade_id') }}
</p>

<p>
{{ Form::label('dismissal_id', 'dismissal_id: ') }}
{{ Form::text('dismissal_id') }}
</p>

<p>
{{ Form::label('allergies', 'allergies: ') }}
{{ Form::text('allergies') }}
</p>

<p>
{{ Form::label('homephone', 'homephone: ') }}
{{ Form::text('homephone') }}
</p>

<p>
{{ Form::label('homeroom_teacher_id', 'homeroom_teacher_id: ') }}
{{ Form::text('homeroom_teacher_id') }}
</p>

<p>
{{ Form::label('dadname', 'dadname: ') }}
{{ Form::text('dadname') }}
</p>

<p>
{{ Form::label('dadphone', 'dadphone: ') }}
{{ Form::text('dadphone') }}
</p>

<p>
{{ Form::label('dademail', 'dademail: ') }}
{{ Form::text('dademail') }}
</p>

<p>
{{ Form::label('momname', 'momname: ') }}
{{ Form::text('momname') }}
</p>

<p>
{{ Form::label('momphone', 'momphone: ') }}
{{ Form::text('momphone') }}
</p>

<p>
{{ Form::label('momemail', 'momemail: ') }}
{{ Form::text('momemail') }}
</p>

<p>
{{ Form::label('attendschurch_id', 'attendschurch_id: ') }}
{{ Form::text('attendschurch_id') }}
</p>

<p>
{{ Form::submit() }}
</p>

{{ Form::close() }}
