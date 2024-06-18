<div>
    <h1>Add New User</h1>
    @if(session('message'))
    <span class="success-message">{{session('message')}}</span>
    @endif
   
    @if(session('name'))
    <span class="success-message">{{session('name')}}</span>
    @endif

    
    <form action="add" method="post">
        @csrf
        <input type="text" name="username" placeholder="enter name">
        <br>
        <br>
        <input type="text" name="email" placeholder="enter email">
        <br>
        <br>
        <input type="text" name="phone" placeholder="enter phone">
        <br>
        <br>
        <button>Add New User</button>
    </form>
</div>


<style>
    .success-message{
        background-color: darkseagreen;
    padding: 2px 20px;
    margin-bottom: 10px;
    display: inline-block;
    border-radius: 2px;
    }
</style>