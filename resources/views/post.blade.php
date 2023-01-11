<x-layout>
    <article>
        <h1>{!! $post->title !!}</h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>
    <p>
        By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>



    <a href="/">Go Back</a>
</x-layout>
