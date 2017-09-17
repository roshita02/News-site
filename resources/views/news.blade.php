<h1>Add news</h1>
<form action="" method="post">
    {{csrf_field()}}
    Title:<br>
    <input type="text" name="title"> <br>
    Category:<br>
    <select name="category">
        <option value="sports">Sports</option>
        <option value="politics">Politics</option>
        <option value="entertainment">Entertainment</option>
    </select>
    <br>
    Image:<br>
    <input type="file" name="image"><br>
    Description:<br>
    <input type="text" name="description"><br>
    <br>

    <button TYPE="submit">Add user</button>
</form>