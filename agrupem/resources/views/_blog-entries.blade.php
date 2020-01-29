<section id="blog_home_container" class="mt-5 mb-4">
    <header id="home_blog_entries_title" class="title">
        <h3>@lang('home.blog')</h3>
    </header>
    <div id="home_blog_entries" class="d-flex flex-wrap justify-content-around">
    @foreach ($posts as $post)
        <section class="card col-md-4 col-sm-12 p-0">
            <a id="blog_entries_button" class="btn btn-primary" href="/post/{{$post->id}}">
            <header>
                <h2 id="title">{{$post->getLocalTitle()}}</h2>
            </header>
            <article>
                <p id="content">{!! Str::words($post->getLocalContent(), 25,"...")!!}</p>
            </article>
            </a>
        </section>
    @endforeach
    </div>
</section>