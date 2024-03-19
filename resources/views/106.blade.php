
<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="star">
        <p>Congratz! You earned your first Softskill:</p>
        <h2>{{$user->card_reason}}</H2>
            <a class="pixel" href="/107"><p class="matrix-text">I'm happy!</p></a>
    </main>
</body>
</html>