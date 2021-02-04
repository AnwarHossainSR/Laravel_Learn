<h2>Login Form</h2>

<form action="personApi" method="POST">
    @csrf
    <input type="text" name="person" placeholder="Enter your username"><br><br>
    <input type="text" name="password" placeholder="ENter your password"><br><br><br><br>
    <button>Submit</button>
</form>