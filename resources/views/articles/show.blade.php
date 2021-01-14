<x-layout>
    <x-header></x-header>
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">

                <div class="title">
                    <h2>{{ $article->title }}</h2>
                </div>
                <p>{{ $article->excerpt }}</p>
                <p>{{ $article->body }}</p>
                <p style="margin-top: 1em">
                    @foreach ($article->tags as $tag)
                        <a href="/articles/tag/{{ $tag->name }}">{{ $tag->name }}</a>
                    @endforeach
                </p>

            </div>


        </div>
    </div>
    <x-footer></x-footer>


</x-layout>

