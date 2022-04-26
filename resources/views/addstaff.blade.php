<h1>Add Staff</h1>
<form  method="POST" action="addstaff">
    @csrf
    <input type="text" name="name" placeholder="Enter name"> <br> <br>
    <input type="text" name="email" placeholder="Enter email"> <br> <br>
    <button type="submit">Add Staff</button>




</form>