<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            <p>Now you have an important choice to make!<br>
            On your journey to be a Web Developer, you can follow different tracks: Salesforce, Java or Full-Stack. Each of them have their own languages and skills to develop, and this will affect your final CV.
            </p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~  What path do you choose?</p>
                <br>
                <form action="/track" method="POST">
                    @csrf
                    <div class="options">
                        <input type="radio" name="track" value="Salesforce" id="option1"><label for="option1">a) I want to be a Salesforce Developer!</label> 
                        <br>
                        <input type="radio" name="track" value="Full-Stack" id="option2"><label for="option2">b) Full-Stack is my jam.</label>
                        <br>
                        <input type="radio" name="track" value="Java" id="option3"><label for="option3">c) Java is the superior language.</label>
                    </div> 
                    <br>
                    <button id="radioOptionButton" class='nextBtn buttonGrey'>> This is the way</button>
                </form>
            </div>
        </div>
 
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings")

    </main>
</body>
</html>