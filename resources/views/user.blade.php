<h1>Add user</h1>
<form action="" method="post">
    {{csrf_field()}}
    Name:<br>
    <input type="text" name="name"> <br>
    E-mail:<br>
    <input type="email" name="email"><br>

    <br>
    <button TYPE="submit">Add user</button>
</form>