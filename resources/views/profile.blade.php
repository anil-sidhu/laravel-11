<div>
    <h1>Profile Page</h1>
@if(session('user'))
<h2>Welcome, {{session('user')}}</h2>
@else
<h2>No user found in session <a href="login">login</a> </h2>
   @endif 
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>
<a href="logout">Logout</a>

{{print_r(session('allData')['user'])}}

