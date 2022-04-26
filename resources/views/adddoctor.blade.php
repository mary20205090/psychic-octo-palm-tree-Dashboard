<h1>Add Doctors</h1>
<form  method="POST" action="adddoctor">
    @csrf
    <input type="text" name="name" placeholder="Enter name"> <br> <br>
    <input type="text" name="email" placeholder="Enter email"> <br> <br>
    <button type="submit">Add Doctors</button>




</form>