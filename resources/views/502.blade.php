<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            <p>You all decide to go out and celebrate the end of the training together! There are a couple of suggestions flying around, and your vote is the decisive one.</p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~  Where should we go?</p>
                <br>
                <form action="/celebration" method="POST">
                    @csrf
                    <div class="options">
                        <input type="radio" name="celebration" value="Comic Sans" id="option1"><label for="option1">a) We should go to Comic Sans, they have the best overpriced cocktails in town!</label> 
                        <br>
                        <input type="radio" name="celebration" value="CodeQuest" id="option2"><label for="option2">b) Everyone can bring something to eat and drink, we can have a celebration at CodeQuest headquarters :)</label>
                        <br>
                        <input type="radio" name="celebration" value="Karaoke" id="option3"><label for="option3">c) CE-LE-BRA-TE GOOD TIMES, COME ON! Karaoke it is!</label>
                    </div> 
                    <br>
                    <button class='nextBtn'>> Here we go!</button>
                </form>
            </div>
        </div>
 
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings")

    </main>
</body>
</html>