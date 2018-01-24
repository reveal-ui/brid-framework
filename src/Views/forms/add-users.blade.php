{!! Form::open(["url" => "/admin/users/"]) !!}
<div class="field">
	<label for="name" class="label">Full Name</label>

	{!! Form::text("name", null, ["class" => "input", "placeholder" => "Your Full Name", "required"]) !!}
<small class="has-text-danger">{{ $errors->first('name') }}</small>
</div>
<div class="field">
	<label for="email" class="label">Your Email</label>
	{!! Form::text("email", null, ["class" => "input", "type" => "email", "placeholder" => "Your Email Address", "required"]) !!}
	<small class="has-text-danger">{{ $errors->first('email') }}</small>
</div>

<div class="field">
	<label for="password" class="label">Password</label>
	{!! Form::password("password",  ["class" => "input", "required"] ) !!}
	<small class="has-text-danger">{{ $errors->first('password') }}</small>
</div>

<div class="field">
	<button class="button is-info">Create User</button> <button class="button" type="reset">Reset</button>
</div>

{!! Form::close() !!}
