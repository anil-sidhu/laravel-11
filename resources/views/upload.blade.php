<div>
    <h1>Upload files</h1>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="files[]" multiple />
        <button>Upload Files</button>
    </form>
</div>
