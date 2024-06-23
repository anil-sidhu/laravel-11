<div>
<h1>Add New Student</h1>
<form action="add" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Name" />
    <br>
    <br>

    <input type="text" name="email" placeholder="Enter Email" />
    <br>
    <br>

    <input type="text" name="phone" placeholder="Enter Phone" />
    <br>
    <br>
    <button>Add Student</button>

</form>
</div>
