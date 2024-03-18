<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            <img src="..\media\cards\card1.png">
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ I see some cards scattered around the place. Which one should I choose?! 😱</p>
                <form action="/card-reason" method="POST">
                    @csrf
                    <div class="options">
                        <input type="radio" name="card-reason" value="option1" id="option1"><label for="option1">I choose an empty table</label> 
                        <input type="radio" name="card-reason" value="option2" id="option2"><label for="option2">I choose a table that is occupied by a small group, where there is one seat left.</label>
                    </div> 
                    <button>> This is what I say!</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings") 
    </main>
</body>
</html>