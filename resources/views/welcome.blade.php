<h1>I am welcome page</h1>
<h2>Add record</h2>

<form action="/add" method="post">
   {{csrf_field()}}
    Name:<br>
    <input type="text" name="name"> <br>
    E-mail:<br>
    <input type="email" name="E-mail"><br>
    Password:<br>
    <input type="password" name="Password"><br>
    <br>
    <button TYPE="submit">Add record</button>
</form>