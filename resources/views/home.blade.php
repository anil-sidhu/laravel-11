
<x-message-banner msg="User Login Successfully" class="success" />
<x-message-banner msg="User signup Successfully"  class="success"/>

<br>
<br>
<br>

<x-message-banner msg="Password not correct please try again" class="error" />
<x-message-banner msg="Password not correct please try again" class="warning" />



<h1>Home Page</h1> 

<style>
    .success{
        background: lightgreen;
    color: green;
    padding: 3px 10px;
    border-radius: 2px;
    display: inline-block;
    margin: 10px;
}
.error{
    background: #ff000069;
    color: red;
    padding: 3px 10px;
    border-radius: 2px;
    display: inline-block;
    margin: 10px;
}
.warning{
    background: #ffa50073;
    color: orange;
    padding: 3px 10px;
    border-radius: 2px;
    display: inline-block;
    margin: 10px;
}
</style>
