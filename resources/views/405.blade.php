<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
        <main class="star">
            <div class="whiteBlock">
            @csrf
            @if ($user->track_second === "null")
                <p>Congratz! Your unlocked a Softskill:</p>
                <h2>{{$user->track_first}}</h2>
            @else
                <p>Congratz! You unlocked 2 Softskills:</p>
                <h2>{{$user->track_first}} and {{$user->track_second}}</h2>
            @endif
            <button class="pixel skipBtn"><p class="matrix-text">I'm happy!</p></button>
            </div>
        </main>
</body>
</html>