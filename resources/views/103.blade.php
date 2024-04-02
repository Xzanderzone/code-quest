<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            Now that everyone has a seat, I want to explain how this training is going to work. You are here to learn some programming skills: HTML, CSS and Javascript, for a starter. 
            <br> During this journey, you will also have to make some decisions that will impact your path! These are opportunities to develop new soft skills and improve your CV. The ultimate goal is to get a job or an internship. We believe in you, so you have to believe in yourself too.
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ Yeah!</p>
                <a href="/next" id="hoverOnlyButton">> I feel motivated!</a>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings") 
    </main>
</body>
</html>