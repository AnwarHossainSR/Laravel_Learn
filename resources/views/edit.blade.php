<h2>Update Users</h2>

<form action="/edit" method="POST">
    @csrf
    <fieldset>
    <legend>Personalia:</legend>
    <input type="text" id="id" name="id" value="{{$data['id']}}" hidden>
    <label for="email">Email:</label>
    <label for="username">Username:</label>
    <input type="text" id="name" name="name" value="{{$data['name']}}"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{$data['email']}}"><br><br>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="{{$data['address']}}"><br><br>
    <input type="submit" value="Update">
    </fieldset>
</form>