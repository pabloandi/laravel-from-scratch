 <x-layout>
     @section('head')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
     @endsection

    <x-header></x-header>
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <h1 class="heading has-text-weight-bold is-size-4">Edit Article {{ $article->title }}</h1>

                <form action="{{ route('articles.update', $article) }}" method="POST">
                    @method('PUT')
                    @include('articles._form', compact('article'))
                </form>
            </div>


        </div>
    </div>
    <x-footer></x-footer>


</x-layout>

