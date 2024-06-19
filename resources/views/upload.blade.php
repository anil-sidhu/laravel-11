<div>
    <h1>Upload file</h1>
    <form action="upload" method="post" enctype="multipart/form-data" >
        @csrf
        <input type="file" name="file">
        <button>Upload file</button>
    </form>
</div>
