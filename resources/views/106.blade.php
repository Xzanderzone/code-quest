
<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="star">
        <div class="whiteBlock">
            <p>Congratz! You earned your first Softskill:</p>
            <h2>{{$user->card_reason}}</h2>
            <button class="skipBtn pixel"><p class="matrix-text">I'm happy!</p></button>
        </div>
    </main>
</body>
</html>