<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="login-box">

<h2>Login</h2>

<form method="POST" action="/login">
@csrf

<div class="form-group">
<label>Email</label>
<input type="email" name="email" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" required>
</div>

<button type="submit">Login</button>

</form>

@if(session('error'))
<div style="color:red; margin-top:10px;">
{{ session('error') }}
</div>
@endif

</div>