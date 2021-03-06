 <x-layout>
     @section('head')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
     @endsection

    <x-header></x-header>
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

                <form action="{{ route('articles.store') }}" method="post">
                    @include('articles._form', compact('article', 'tags'))
                </form>
            </div>


        </div>
    </div>
    <x-footer></x-footer>


</x-layout>

