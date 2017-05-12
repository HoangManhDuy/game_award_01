<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GameController extends Controller
{
	function home() {
		return view('game.home');
	}

	function topgame() {
		return view('game.topgame');
	}

	function toptype() {
		return view('game.toptype');
	}

	function allgame() {
		return view('game.allgame');
	}

	function event() {
		return view('game.event');
	}

	function signin() {
		return view('game.signin');
	}

	function account() {
		return view('game.account');
	}

	function prize() {
		return view('game.prize');
	}

	function search() {
		return view('game.search');
	}
}

