
<form action="{{ route('query.get') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input  type="text" name="id" class="form-control" placeholder="Id" />
    </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
</form>