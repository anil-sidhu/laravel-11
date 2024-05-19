<h1>Home Page</h1> 

<h1>{{$name}}</h1>
<!-- <h1>{{rand()}}</h1> -->

<!-- <h1>{{$users[0]}}</h1> -->

<div>
    @if($name=='anil')
    <h2>this is anil</h2>
    @elseif($name=='sam')
    <h2>this is same</h2>
    @else
    <h2>other user</h2>
    @endif
</div>

<div>
    @foreach($users as $user)
    <h3>{{$user}}</h3>
    @endforeach
</div>

<div>
    @for($i=0;$i<=10;$i++)
    <h4>{{$i}}</h4>
    @endfor
</div>