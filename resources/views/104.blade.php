<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            I always like to start with an ice break game. I want each of you to take a look at these cards and choose one that you can relate to, that has some characteristics that remind you of yourself. 
            <br> After picking your card, you have to explain to the class why you chose it.

        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ I see some cards scattered around the place. Which one should I choose?! 😱</p>
                <form action="/cards" method="POST" class="cards">
                    @csrf
                    <div class="cards">
                        <input type="radio" name="card" value="card1.png" id="option1"><label for="option1"><img src="..\media\cards\card1.png"></label>
                        <input type="radio" name="card" value="card2.png" id="option2"><label for="option2"><img src="..\media\cards\card2.png"></label>
                        <input type="radio" name="card" value="card3.png" id="option3"><label for="option3"><img src="..\media\cards\card3.png"></label>
                        <input type="radio" name="card" value="card4.png" id="option4"><label for="option4"><img src="..\media\cards\card4.png"></label>
                        <input type="radio" name="card" value="card5.png" id="option5"><label for="option5"><img src="..\media\cards\card5.png"></label>
                        <input type="radio" name="card" value="card6.png" id="option6"><label for="option6"><img src="..\media\cards\card6.png"></label>
                    </div>
                <button>> Let's own this descision</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings") 
    </main>
</body>
</html>