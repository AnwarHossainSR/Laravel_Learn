<h1>User's List</h1>

<h2><a href={{"/add"}}>Add User</a></h2><br>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Action</td>
    </tr>
    @foreach($users as $key => $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['address']}}</td>
            <td>
                <a href={{"edit/".$user['id']}}>Edit</a>
                <a href={{"delete/".$user['id']}}>Delete</a>
            </td>
        </tr>
    @endforeach
</table>