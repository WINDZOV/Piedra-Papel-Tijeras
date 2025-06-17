<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GameController extends Controller
{
public function index()
{
$last_games = DB::table('game_statistics')
->orderBy('created_at', 'desc')
->limit(8)
->get();
return view('game', ['last_games' => $last_games]);
}


public function play(Request $request)
{
$last_games = DB::table('game_statistics')
->orderBy('created_at', 'desc')
->limit(8)
->get();
$playerChoice = $request->input('choice');
$playerChoice = $request->input('choice');
// Генерируем случайный ход для компьютера
$computerChoice = rand(1, 3);
if ($computerChoice == 1) {
$computerChoice = 'rock';
} elseif ($computerChoice == 2) {
$computerChoice = 'paper';
} else {
$computerChoice = 'scissors';
}
if ($playerChoice == $computerChoice) {
$result = 'tie';
} elseif (($playerChoice == 'rock' && $computerChoice ==
'scissors') || ($playerChoice == 'paper' && $computerChoice ==
'rock') || ($playerChoice == 'scissors' && $computerChoice ==
'paper')) {
$result = 'win';
} else {
$result = 'lose';
}

DB::table('game_statistics')->insert([
'player_name' => 'Player 1',
'computer_choice' => $computerChoice,
'player_choice' => $playerChoice,
'result' => $result,
'created_at' => now(),
'updated_at' => now(),
]);

return view('game', ['result' => $result, 'player_choice'
=> $playerChoice, 'computer_choice' => $computerChoice,
'last_games' => $last_games]);
}
}


