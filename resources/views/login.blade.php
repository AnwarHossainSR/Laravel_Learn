<h2>Login Page</h2>

<form action="/user" method="POST">
    @csrf
    <input type="text" name="username" ><br><br>
    <input type="text" name="password" ><br><br>
    <button>Login</button>
</form>