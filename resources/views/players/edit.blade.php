<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Players</title>
</head>
<body>
    
    <h1>Edit Players</h1>
    <form method="POST" action="{{route('players.update',['player'=>$player])}}">
        @csrf
        @method('put')
        <div>
            <label>Name:</label>
            <input type="text" name="name" placeholder="Enter your Full Name">
        </div>
        <br>
        <div>
            <label>Sport:</label>
            <input type="text" name="sport" placeholder="Enter your Sport">
        </div>
        <br>
        <div>
            <label>School:</label>
            <input type="text" name="school" placeholder="Name of your School">
        </div>
        <br>
        <div>
            <label>Age:</label>
            <input type="text" name="age" placeholder="Your Age">
        </div>
        <input type="submit" value="Save">
    </form>

</body>
</html>