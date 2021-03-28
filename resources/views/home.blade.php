<x-layouts>
    <div class="container">
        <div class="row">
            @foreach ($videos as $video)
            <div class="col-4">
                <video  class="embed-responsive embed-responsive-16by9 videoplayer">
                    <source src="{{$video->path}}" type="video/mp4">
                 </video>
            </div>
            @endforeach
        </div>
    </div>
</x-layouts>