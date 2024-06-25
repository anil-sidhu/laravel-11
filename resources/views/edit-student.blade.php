<div>
    <h1>Update Student Details</h1>

    <form action="/edit-student/{{$data->id}}" method="post">
        <input type="hidden" name="_method" value="put" />
        @csrf
        <input type="text" name="name" value="{{$data->name}}" placeholder="Enter Name" />
        <br><br>
        <input type="text" name="email" value="{{$data->email}}" placeholder="Enter Email" />
        <br><br>
        <input type="text" name="phone" value="{{$data->phone}}" placeholder="Enter Phone" />
        <br><br>
        <button>Update Details</button>
        <a href="/list">Cancel</a>

    </form>
</div>
