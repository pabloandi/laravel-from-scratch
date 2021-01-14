<div id="menu">
    <ul>
        <li class="{{ request()->path() === '/' ? 'current_page_item' : '' }}"><a href="#" accesskey="1" title="">Homepage</a></li>
        <li class="{{ request()->path() === 'clients' ? 'current_page_item' : '' }}"><a href="#" accesskey="2" title="">Our Clients</a></li>
        <li class="{{ request()->is('about*') ? 'current_page_item' : '' }}"><a href="/articles" accesskey="3" title="">About Us</a></li>
        <li class="{{ request()->path() === 'careers' ? 'current_page_item' : '' }}"><a href="#" accesskey="4" title="">Careers</a></li>
        <li class="{{ request()->path() === 'contact' ? 'current_page_item' : '' }}"><a href="#" accesskey="5" title="">Contact Us</a></li>
    </ul>
</div>
