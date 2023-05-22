<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {

        $current = CarbonImmutable::now();

        dump(Message::where('created_at', '>=', $current->add(-1, 'seconds'))->get());

    }
}
