<!DOCTYPE html>
<html>
<head>
<title>Piedra Papel Tijeras</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
<h1>Rock Paper Scissors</h1>

@if(isset($result))
<p class="juga" id="you">You played: {{ $player_choice }} !!</p>
<p class="juga" id="comp">Comp played: {{ $computer_choice }} !!</p>
<p id="result">You {{ $result }}!</p>
@endif
<div class="container container-flex mt-4">
  <form method="POST" action="{{ route('game.play') }}">
    @csrf

    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="choice" id="rock" value="rock">
      <label class="form-check-label" for="rock">Rock</label>
    </div>

    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="choice" id="paper" value="paper">
      <label class="form-check-label" for="paper" >Paper</label>
    </div>

    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="choice" id="scissors" value="scissors">
      <label class="form-check-label" for="scissors">Scissors</label>
    </div>
 
    <button type="submit" class="btn btn-primary ms-3">Play</button>
  </form>
</div>

<!--<ul>
@foreach ($last_games as $last_game)
<li>
<p id="tuResultado">You {{ $last_game->result }}</p>
<p class="historial">You played {{ $last_game->player_choice }}</p>
<p class="historial">Computer played {{ $last_game->computer_choice }}
</p>
</li>
@endforeach
</ul>-->
<div id="tabla" class="container mt-4" style="max-width: 600px;">
<table class="table table-light table-striped table-sm mt-4">
  <thead class="table-dark">
    <tr>
      <th scope="col">Your Play</th>
      <th scope="col">Computer Play</th>
      <th scope="col">Result</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($last_games as $last_game)
      <tr>
        <td>{{ ucfirst($last_game->player_choice) }}</td>
        <td>{{ ucfirst($last_game->computer_choice) }}</td>
        <td>
          @if ($last_game->result === 'win')
            <span class="text-success fw-bold">You Win</span>
          @elseif ($last_game->result === 'lose')
            <span class="text-danger fw-bold">You Lose</span>
          @else
            <span class="text-warning fw-bold">Draw</span>
          @endif
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>

<footer class="container" id="footer">WiNDZOV 2025 || Creado por Nina K.</footer>
</body>
</html>