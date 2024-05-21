<div>
    <h2>Add New User</h2>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User name" name="username">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User email" name="email">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User city" name="city">
        </div>
        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>
<style>
   input{
    border: orange 1px solid;
    height: 35px;
    width: 200px;
    border-radius: 2px;
    color: orange;
}
.input-wrapper{
    margin:10px
}
button{
    border: orange 1px solid;
    height: 35px;
    width: 200px;
    border-radius: 2px;
    color: orange;
    background-color: #fff;
    cursor: pointer;
}
</style>