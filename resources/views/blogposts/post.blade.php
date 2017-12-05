<!-- Blog Post Start -->
<div class="col-md-12 blog-post">
    <div class="post-title">
        <a href="blog/{{ $blogpost->slug }}">
            <h1>{{ $blogpost->title }}</h1>
        </a>
    </div>
    <div class="post-info">
        <span>{{ $blogpost->created_at }} / írta: <span class="author">{{ $blogpost->author }}</span></span>
    </div>
    <div class="post-image">
        <img src="{{ $blogpost->image }}" alt="">
    </div>
    <p class="lead">{{ $blogpost->lead }}</p>
    <a href="blog/{{ $blogpost->slug }}" class="button button-style button-anim fa fa-long-arrow-right"><span>Olvass tovább...</span></a>
</div>
<!-- Blog Post End -->