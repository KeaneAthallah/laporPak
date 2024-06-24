<nav id="nav">
    <ul>
        <li class="current"><a href="index.html">Welcome</a></li>
        <li class="submenu">
            <a href="#">Layouts</a>
            <ul>
                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                <li><a href="no-sidebar.html">No Sidebar</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="submenu">
                    <a href="#">Submenu</a>
                    <ul>
                        <li><a href="#">Dolore Sed</a></li>
                        <li><a href="#">Consequat</a></li>
                        <li><a href="#">Lorem Magna</a></li>
                        <li><a href="#">Sed Magna</a></li>
                        <li><a href="#">Ipsum Nisl</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="button primary">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="button primary">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="button primary">Register</a>
                    @endif
                @endauth
            @endif
        </li>
    </ul>
</nav>
