<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            Now that everyone has a seat, I want to explain how this training is going to work. You are here to learn some programming skills: HTML, CSS and Javascript, for start. After that, you will choose which path you want to follow: to become a Salesforce Consultant, a Java or a Full-Stack Developer. And don’t forget, this training is not only about hard skills! During this journey, you will also have to make some decisions that will impact your career! These are opportunities to develop new soft skills and improve your CV. The ultimate goal is to get a job or an internship, and I am sure that each and every one of you can do it. We believe in you, so you have to believe in yourself too.
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ Yeah!</p>
                <a href="/104">> I feel motivated!</a>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        <div class="basile"><img src="..\media\stickmen\Stickman.svg" alt=""></div>
        <div class="you"><img src="..\media\stickmen\{{ $user->character }}" alt=""></div>
    </main>
</body>
</html>