<div>
    <h1>Image List</h1>

    <a href="/upload">Upload more file</a>
    <br/>
    <br/>

    @foreach($imageData as $img)
    <img style="width:200px; margin:20px"  src="{{url('storage/'.$img->path)}}" alt="">
    @endforeach
</div>
