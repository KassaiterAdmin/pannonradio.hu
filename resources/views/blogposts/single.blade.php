@extends ('layout')

@section('content')
    <div class="sub-title">
        <a href="/" title="Vissza"><h2>Vissza a főoldalra</h2></a>
    </div>


    <div class="col-md-12 content-page">
        <div class="col-md-12 blog-post">
            <div class="post-title">
                <h1>{{ $slug->title }}</h1>
            </div>

            <div class="post-info">
                <span>November 23, 2016 / írta <span class="author">{{ $slug->author }}</span></span>
            </div>

            {!! $slug->body !!}
        </div>
    </div>
@endsection
