<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            I need your details for the VdeyaB please choose a picture i can use to finish your form
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">HAMILTON ~ I look like this broh</p>
                <form class="choose-character">
                    <select name="stickmen" size="6">
                        <option value="partyhat"><img src="..\media\stickmen\Stickman-partyhat-04.svg" alt=""></option>
                        <option value="moustache"><img src="..\media\stickmen\Stickman-moustache.svg" alt="">
                        <option value="hair"><img src="..\media\stickmen\Stickman-hair-02.svg" alt="">
                        <option value="glasses"><img src="..\media\stickmen\Stickman-glasses-03.svg" alt="">
                        <option value="dab"><img src="..\media\stickmen\Stickman-dab-06.svg" alt="">
                        <option value="nose"><img src="..\media\stickmen\Stickman-dab-05.svg" alt="">
                    </select>
                    <button>> This is me</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        <div class="basile"><img src="..\media\stickmen\Stickman.svg" alt=""></div>
        <div class="you"><img src="..\media\stickmen\Stickman-glasses-03.svg" alt=""></div>
    </main>
</body>
</html>