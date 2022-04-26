<h1>Add Users</h1>
<form  method="POST" action="adduser">
    @csrf
    <input type="text" name="name" placeholder="Enter name"> <br> <br>
    <input type="text" name="email" placeholder="Enter email"> <br> <br>
    <input type="text" name="department" placeholder="Enter department"> <br> <br>
    <button type="submit">Add Users</button>




</form>