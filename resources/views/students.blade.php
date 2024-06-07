<div>
    <h1>Student List</h1>
   
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach($data as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->batch}}</td>
        </tr>
        @endforeach
    </table>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
