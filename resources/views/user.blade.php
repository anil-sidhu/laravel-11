<div>
    <h1>User Login</h1>
    <form action="user" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter user name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter user password">
        <br>
        <br>
        <button>Login</button>
        
    </form>
</div>
