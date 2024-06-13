<div>
    <h1>User data</h1>
    <table border="1">
<tr>
    <td>Name</td>
    <td>Email</td>
    <td>Phone</td>
</tr>
@foreach($users as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->phone}}</td>

</tr>
@endforeach
    </table>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>
