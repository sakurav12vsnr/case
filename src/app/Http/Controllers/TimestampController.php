<?php

namespace App\Http\Controllers;

use App\Models\Stamp;
use App\Models\Rest;
use Auth;
use Carbon\Carbon;

class TimestampController extends Controller
{
    public function clockIn()
    {
        $user = Auth::user();
        $timestamp = new Stamp;
        $timestamp = Stamp::where('user_id', $user->id)->latest()->first();
        $timestamp->date=new Carbon('today');
        $timestamp->clock_in=new Carbon('now');
        $timestamp->clock_out=new Carbon('now');
        $timestamp->work_hour=0;
        $timestamp->save();
            return redirect('/');
    }

    public function clockOut()
    {
        $user = Auth::user();
        $timestamp = new Stamp;
        $timestamp = Stamp::where('user_id', $user->id)->latest()->first();
        $timestamp->date=new Carbon('today');
        $timestamp->clock_out=new Carbon('now');
        $timestamp->work_hour=strtotime('clock_out')-strtotime('clock_in');
        $timestamp->save();
            return redirect('/');
    }

    public function breakStart()
    {
        $user = Auth::user();
        $timestamp = Stamp::where('user_id', $user->id)->latest()->first();
        $rest = new Rest;
        $rest->stamp_id=$timestamp->id;
        $rest->start=new Carbon('now');
        $rest->end=new Carbon('now');
        $rest->total=0;
        $rest->save();
            return redirect('/');
    }

    public function breakEnd()
    {
        $user = Auth::user();
        $timestamp = Stamp::where('user_id', $user->id)->latest()->first();
        $rest = new Rest;
        $rest = Rest::where('stamp_id', $timestamp->id)->latest()->first();
        $rest->end = new Carbon('now');
        $rest->total = strtotime('end') - strtotime('start');
        $rest->save();
        return redirect('/');
    }
}