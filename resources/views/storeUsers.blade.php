<h1>Add New Member</h1>
@if(session('username'))
    <h3>{{session('username')}}' data has been saved successfully' </h3>
@endif
<form action="/storeUserData" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter your username"><br><br>
    <input type="email" name="email" placeholder="Enter your email"><br><br>
    <input type="password" name="password" placeholder="Enter your password"><br><br>
    <button type="submit">Add User</button>
</form>