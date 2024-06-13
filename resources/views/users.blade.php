<div>
    <h1>Users Data</h1>

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
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>
