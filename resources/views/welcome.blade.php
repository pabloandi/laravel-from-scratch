
<x-layout>
    <x-header></x-header>
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <h1>My site</h1>
                <ul>
                    @can('edit_forum')
                        <li>
                            <a href="#">Edit forum</a>
                        </li>
                    @endcan

                    @can('view_reports')
                        <li>
                            <a href="{{ route('reports') }}">View reports</a>
                        </li>
                    @endcan

                </ul>
            </div>

        </div>
    </div>
    <x-footer></x-footer>


</x-layout>

