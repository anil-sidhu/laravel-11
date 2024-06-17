<div>
    <h1>User Login</h1>
    <form action="login" method="post">
        @csrf
        <input type="text" name="user" placeholder ="Enter Name">
        <br>
        <br>
        <input type="password" name="password" placeholder ="Enter Password">
        <br>
        <br>
        <button>Login</button>

    </form>
</div>
