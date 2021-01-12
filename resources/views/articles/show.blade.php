<x-layout>
    <x-header></x-header>
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">

                <div class="title">
                    <h2>{{ $article->title }}</h2>
                    <span class="byline">{{ $article->excerpt }}</span>
                </div>
                <p>{{ $article->body }}</p>
            </div>


        </div>
    </div>
    <x-footer></x-footer>


</x-layout>

