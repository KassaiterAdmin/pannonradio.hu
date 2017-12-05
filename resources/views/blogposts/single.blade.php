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
                <span>{{ $slug->created_at->toFormattedDateString() }}</span>
            </div>

            {!! $slug->body !!}
        </div>
    </div>
@endsection
