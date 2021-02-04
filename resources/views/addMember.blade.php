<h3>Save Data to Database</h3><br>

<form action="/add" method="POST">
@csrf
 <fieldset>
  <legend>Personalia:</legend>
  <label for="username">Username:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="address">Address:</label>
  <input type="text" id="address" name="address"><br><br>
  <input type="submit" value="Submit">
 </fieldset>
</form>