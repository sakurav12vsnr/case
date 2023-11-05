@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="css/index.css">
<div class="work_container">
    <h2><?php $user = Auth::user(); ?>{{ $user->name }}さんお疲れ様です！</h2>
    <div class="work">
        <ul class="work-nav">
            <li>
                <form action="{{ route('clockIn') }}" method="post">
                    @csrf
                    <button class="work_start" type="submit">勤務開始</button>
                </form>
            </li>
            <li>
                <form action="/clockOut" method="post">
                    @csrf
                    <button class="work_end" type="submit">勤務終了</button>
                </form>
            </li>
        </ul>
    </div>
    <div class="break">
        <ul class="break-nav">
            <li>    
                <form action="{{ route('breakStart') }}" method="post">
                    @csrf
                    <button class="break_start" type="submit">休憩開始</button>
                </form>
            </li>
            <li>
                <form action="/breakEnd" method="post">
                    @csrf
                    <button class="break_end" type="submit">休憩終了</button>
                </form>
            </li>
        </ul>
    </div>
</div>
@endsection