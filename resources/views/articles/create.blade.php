<x-layout>
    <x-header></x-header>
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">

                <form action="/articles" method="post">
                    <input type="text" name="title" id="title">
                    <input type="text" name="excerpt" id="excerpt">
                    <textarea name="body" id="body"  ></textarea>
                </form>
            </div>


        </div>
    </div>
    <x-footer></x-footer>


</x-layout>

