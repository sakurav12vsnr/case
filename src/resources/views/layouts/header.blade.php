<div class="header">
    <div class="header__inner">
        <h1>
            Atte
        </h1>
        <nav>
            <ul class="header-nav">
                @if (Auth::check())
                <li class="header-nav__item">
                    <a class="header-nav__link" href="/">ホーム</a>
                </li>
                <li class="header-nav__item">
                    <a class="header-nav__link" href="/attendance">日付一覧</a>
                </li>
                <li class="header-nav__item">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="header-nav__button">ログアウト</button>
                    </form>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</div>