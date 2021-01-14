<x-layout>
    <x-header></x-header>
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                @forelse($articles as $article)
                    <div class="title">
                        <h2><a href="{{ $article->path() }}">{{ $article->title }}</a></h2>
                        <span class="byline">{{ $article->excerpt }}</span>
                    </div>
                    <p>{{ $article->body }}</p>
                    <p style="margin-top: 1em">
                        @foreach ($article->tags as $tag)
                            <a href="/articles/tag/{{ $tag->name }}">{{ $tag->name }}</a>
                        @endforeach
                    </p>
                @empty
                    <p>No relevant articles yet</p>

                @endforelse
            </div>


        </div>
    </div>
    <x-footer></x-footer>


</x-layout>

