<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('admin.index') }}">
            Frostnode CMS
        </a>

        <navbar-burger target="navMenu"></navbar-burger>

    </div>

    <div class="navbar-menu" id="navMenu">

        <div class="navbar-end">
            <a class="navbar-item">
                <span class="badge is-badge-danger" data-badge="88">
                    <span class="icon">
                        <span class="oi" data-glyph="bullhorn"></span>
                    </span>
                    <span class="is-hidden-desktop">Notifications</span>
                </span>
            </a>

            @auth
            <div class="navbar-item has-dropdown is-hoverable">
                <a href="{{ route('admin.users.user.show', Auth::user() ) }}" class="navbar-link">
                    <img class="profile-image" src="https://randomuser.me/api/portraits/men/17.jpg">
                    {{-- <span class="icon">
                        <span class="oi" data-glyph="person"></span>
                    </span> --}}
                    <span class="{{-- is-hidden-desktop --}}">{{ Auth::user()->name }}</span>
                </a>
                <div class="navbar-dropdown is-right">
                    <a href="{{ route('admin.users.user.edit', Auth::user()->id) }}" class="navbar-item">
                        <div class="icon">
                            <span class="oi" data-glyph="cog"></span>
                        </div>
                        <span>Account preferences</span>
                    </a>
                    <hr class="navbar-divider">
                    <a href="{{ route('auth.logout') }}" class="navbar-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <div class="icon">
                            <span class="oi" data-glyph="account-logout"></span>
                        </div>
                        <span>Sign out</span>
                    </a>

                    <!-- Logout form -->
                    <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">@csrf</form>
                </div>
            </div>
            @endauth

        </div>

    </div>

</nav>
