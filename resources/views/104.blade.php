<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            Hello {{$user->name}} and welcome to CodeQuest! Please, choose a place to sit.

        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~    Hmmm, I see a few empty seats in the classroom. I must quickly chose what I do now!</p>
                <form action="/seats" method="POST">
                    @csrf
                    <input type="radio" name="card" value="Stickman-partyhat-04.svg" id="option1"><label for="option1"><img src="..\media\cards\"></label>
                    <input type="radio" name="card" value="Stickman-partyhat-04.svg" id="option2"><label for="option2"><img src="..\media\cards\"></label>
                    <input type="radio" name="card" value="Stickman-partyhat-04.svg" id="option3"><label for="option3"><img src="..\media\cards\"></label>
                    <input type="radio" name="card" value="Stickman-partyhat-04.svg" id="option4"><label for="option4"><img src="..\media\cards\"></label>
                    <input type="radio" name="card" value="Stickman-partyhat-04.svg" id="option5"><label for="option5"><img src="..\media\cards\"></label>
                    <input type="radio" name="card" value="Stickman-partyhat-04.svg" id="option6"><label for="option6"><img src="..\media\cards\"></label>
                <button>> Let's own this descision</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        <div class="basile"><img src="..\media\stickmen\Stickman.svg" alt=""></div>
        <div class="you"><img src="..\media\stickmen\{{ $user->character }}" alt=""></div>
    </main>
</body>
</html>