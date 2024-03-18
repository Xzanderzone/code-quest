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
                <p class="matrix-text">{{$user->name}} ~ It’s my turn. I look at my colleagues and say:</p>
                <form action="/card-reason" method="POST">
                    @csrf
                    <div class="options">
                        @if ({{$user->card === "card1.png"}})
                        <input type="radio" name="card-reason" value="option1A" id="option1A"><label for="option1A">I choose an empty table</label> 
                        <input type="radio" name="card-reason" value="option1B" id="option1B"><label for="option1B">I choose a table that is occupied by a small group, where there is one seat left.</label>
                        @endif
                        @if ({{$user->card === "card2.png"}})
                        <input type="radio" name="card-reason" value="option2A" id="option2A"><label for="option2A">I choose an empty table</label> 
                        <input type="radio" name="card-reason" value="option2B" id="option2B"><label for="option2B">I choose a table that is occupied by a small group, where there is one seat left.</label>
                        @endif
                        @if ({{$user->card === "card3.png"}})
                        <input type="radio" name="card-reason" value="option3A" id="option3A"><label for="option3A">I choose an empty table</label> 
                        <input type="radio" name="card-reason" value="option3B" id="option3B"><label for="option3B">I choose a table that is occupied by a small group, where there is one seat left.</label>
                        @endif
                        @if ({{$user->card === "card4.png"}})
                        <input type="radio" name="card-reason" value="option4A" id="option4A"><label for="option4A">I choose an empty table</label> 
                        <input type="radio" name="card-reason" value="option4B" id="option4B"><label for="option4B">I choose a table that is occupied by a small group, where there is one seat left.</label>
                        @endif
                        @if ({{$user->card === "card5.png"}})
                        <input type="radio" name="card-reason" value="option5A" id="option5A"><label for="option5A">I choose an empty table</label> 
                        <input type="radio" name="card-reason" value="option5B" id="option5B"><label for="option5B">I choose a table that is occupied by a small group, where there is one seat left.</label>
                        @endif
                        @if ({{$user->card === "card6.png"}})
                        <input type="radio" name="card-reason" value="option6A" id="option6A"><label for="option6A">I choose an empty table</label> 
                        <input type="radio" name="card-reason" value="option6B" id="option6B"><label for="option6B">I choose a table that is occupied by a small group, where there is one seat left.</label>
                        @endif
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