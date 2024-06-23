<div>
    <h1>Display Images</h1>
   
    @foreach($images as $img)
    <img style="width:100px" src="{{url('storage/'.$img)}}" />
    @endforeach
</div>
