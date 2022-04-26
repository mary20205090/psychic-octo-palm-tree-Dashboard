<h1>Add Patient</h1>
<form  method="POST" action="addpatient">
    @csrf
    <input type="text" name="name" placeholder="Enter name"> <br> <br>
    <input type="text" name="email" placeholder="Enter email"> <br> <br>
    <button type="submit">Add Patients</button>




</form>