<x-layout>
    @include('_posts-header')

    {{-- Main Article --}}
    <main class="mx-auto mt-6 max-w-6xl space-y-6 lg:mt-20">
        <x-post-featured-card></x-post-featured-card>

        {{-- Second Row --}}
        <div class="lg:grid lg:grid-cols-2">
            <x-post-card />
            <x-post-card />
        </div>

        {{-- Third Row --}}
        <div class="lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div>
    </main>
    {{-- @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {!! $post->title !!}
                </a>
            </h1>
            <p>
                By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <div>
                {!! $post->excerpt !!}
            </div>

            <a href="/">Go Back</a>
        </article>
    @endforeach --}}
</x-layout>
