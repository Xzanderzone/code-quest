<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            Welcome {{ $user->name }}, I need your details for the VdeyaB please choose a picture i can use to finish your form
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{ $user->name }} ~ I look like this broh</p>
                <form class="choose-character" method="POST" action="/choose-character"> 
                    @csrf
                    <div class="options">
                        <input type="radio" name="character" value="Stickman-partyhat-04.svg" id="partyhat"><label for="partyhat"><img src="..\media\stickmen\Stickman-partyhat-04.svg"></label>
                        <input type="radio" name="character" value="Stickman-moustache.svg" id="moustache"><label for="moustache"><img src="..\media\stickmen\Stickman-moustache.svg"></label>
                        <input type="radio" name="character" value="Stickman-hair-02.svg" id="hair"><label for="hair"><img src="..\media\stickmen\Stickman-hair-02.svg"></label>
                        <input type="radio" name="character" value="Stickman-glasses-03.svg" id="glasses"><label for="glasses"><img src="..\media\stickmen\Stickman-glasses-03.svg"></label>
                        <input type="radio" name="character" value="Stickman-dab-06.svg" id="dab"><label for="dab"><img src="..\media\stickmen\Stickman-dab-06.svg"></label>
                        <input type="radio" name="character" value="Stickman-dab-05.svg" id="nose"><label for="nose"><img src="..\media\stickmen\Stickman-dab-05.svg"></label>
                    </div>
                    <button>> This is me</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        <div class="basile"><img src="..\media\stickmen\Stickman.svg" alt=""></div>
    </main>
</body>
</html>