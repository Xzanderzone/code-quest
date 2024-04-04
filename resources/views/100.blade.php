<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            <p>Welcome {{ $user->name }}, I need your details for the VdeyaB please choose a picture i can use to finish your form.</p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{ $user->name }} ~    I look like this broh</p>
                <form class="choose-character" method="POST" action="/choose-character"> 
                    @csrf
                    <div class="characters">
                        <input type="radio" name="character" value="partyhat.png" id="partyhat"><label for="partyhat"><img src="..\media\stickmen\partyhat.png"></label>
                        <input type="radio" name="character" value="moustache.png" id="moustache"><label for="moustache"><img src="..\media\stickmen\moustache.png"></label>
                        <input type="radio" name="character" value="hair.png" id="hair"><label for="hair"><img src="..\media\stickmen\hair.png"></label>
                        <input type="radio" name="character" value="glasses.png" id="glasses"><label for="glasses"><img src="..\media\stickmen\glasses.png"></label>
                        <input type="radio" name="character" value="hat.png" id="hat"><label for="hat"><img src="..\media\stickmen\hat.png"></label>
                        <input type="radio" name="character" value="wheelchair.png" id="nose"><label for="nose"><img src="..\media\stickmen\wheelchair.png"></label>
                    </div>
                    <button class='nextBtn'>> This is me</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings") 
    </main>
</body>
</html>