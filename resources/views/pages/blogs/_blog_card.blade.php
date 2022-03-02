<div class="col col-sm-12 col-12 col-md-4">
    <div class="content">
        <img src="{{ asset($blog->image) }}" alt="" class="w-100">

        <div class="content-text">

            <h5><a href="">{{ $blog->up_title() }}</a></h5>
            <span>{{ $blog->created_at->format('d.m.Y H:i') }}</span>
            <p class="mb-0">{!! $blog->text !!}</p>
            <p class="mb-0">{!! $blog->content != null ? $blogs->content : "content" !!}</p>
        </div>
    </div>
</div>


