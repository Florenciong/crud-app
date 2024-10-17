<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Players</title>
</head>
<body>

    <h1>Players</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <br>
    <div>

        <div>
            <button>
                <a href="{{route('players.create')}}">Add New Player</a>
            </button>
            <br>
            <br>
        </div>
        <table border="1">
            <tr>
                <th>ID No.</th>
                <th>Name</th>
                <th>Sport</th>
                <th>School</th>
                <th>Age</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($players as $player )
            <tr>
                <td>{{$player->id}}</td>
                <td>{{$player->name}}</td>
                <td>{{$player->sport}}</td>
                <td>{{$player->school}}</td>
                <td>{{$player->age}}</td>
                <td><a href="{{route('players.edit', ['player' => $player])}}">Edit</a></td>
               <td>
                <form method="POST" action="{{route('players.delete',['player'=>$player])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
               </td>
            </tr>
                
            @endforeach
        </table>
    </div>
    
</body>
</html>