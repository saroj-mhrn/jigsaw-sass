<header class="header {{ isset($stickyHeader) ? 'header-sticks' : false }}">
    <a href="#" class="log">Logo</a>
    @if(isset($showNav))
    <nav id="nav">
        <ul>
            <li><a href="/">Home</a></li>
        </ul>
    </nav>
    @endif
</header> 