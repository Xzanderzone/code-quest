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
                    <div class="options">
                        <input type="radio" name="seats" value="empty-table" id="empty-table"><label for="empty-table">1) I choose an empty table</label> 
                        <input type="radio" name="seats" value="occupied-table" id="occupied-table"><label for="occupied-table">2) I choose a table that is occupied by a small group, where there is one seat left.</label>
                    </div> 
                    <button id="animationButton">> Let's own this decision</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings") 
    </main>
</body>
</html>