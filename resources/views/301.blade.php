<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            <p>Weeks passed by quickly, and your skills as a Web Developer are sharpening up! Persile tells the class that he wants each of you to prepare a presentation - a 'Tech Talk' - about a topic that relates with technology.<br><br><br>
            Any topic is valid, except talking about tech billionaires and cryptocoins.
            </p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~    It's my time to present! Which topic should I choose for the Tech Talk?</p>
                <br>
                <form action="/tech-talk" method="POST">
                    @csrf
                    <div class="options">
                        <input type="radio" name="tech_talk" value="null" id="option1"><label for="option1">a) How investing in HabibiCoins can make you become the next Melon Dusk!</label> 
                        <br>
                        <input type="radio" name="tech_talk" value="Growth Mindset" id="option2"><label for="option2">b) Present a new coding tool that can be useful for my colleagues.</label>
                        <br>
                        <input type="radio" name="tech_talk" value="Storytelling" id="option3"><label for="option3">c) Spaceships! Replicators! Lightsabers! Weeeeeeee!</label>
                    </div> 
                    <br>
                    <button id="radioOptionButton" class="nextBtn buttonGrey">> Present my tech talk!</button>
                </form>
            </div>
        </div>
 
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings")

    </main>
</body>
</html>