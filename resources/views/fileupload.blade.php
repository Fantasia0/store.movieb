<x-layouts>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="{{route('video.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-5">
                <input type="text" name="title" class="form-control" id="text" aria-describedby="Title" placeholder="Title">
                </div>
                <div class="form-group">
                    <select name="category" class="custom-select" id="category">
                        <option selected>Scegli categoria</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>    
                </div>
                <div class="form-group">
                <input type="file" name="file" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</x-layouts>
