@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="css/attendance.css">
<header>
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
        @endif
    </nav>
</header>
<div class="attendance_container">
    <div class="archives-header-text">
        <a href="/attendance/archives/20211031" class="archives-header-day-link__item--prev">
        </a>
        ::before
        <span class="date">2021-11-01</span>
        <a href="/attendance/archives/20211102" class="archives-header-day-link__item--next">
            ::after
        </a>
    </div>
    <div class="attendance-table">
        <table>
            <tr class="table-title">
                <th>名前</th>
                <th>勤務開始</th>
                <th>勤務終了</th>
                <th>休憩時間</th>
                <th>勤務時間</th>
            </tr>
        </table>
    </div>
    <div>
        {{ $works->appends(request()->query()->input())->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection