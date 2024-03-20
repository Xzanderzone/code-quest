<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="introducing">
        <div class="text-balloon">
            Hello and welcome to CodeQuest.  <br>My name is Persile and  I’ll guide you through this course where you’ll learn how to be a Web Developer.<br>
            With this your chances of getting a JOB or an INTERNSHIP will increase! <br><br>
            Tell me fellow student, what is your name?
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">ANONYMOUS ~ I'm new here, my name is:</p>
                <form action="/register" method="post" class="login">
                    @csrf
                    <input type="text" name="name" placeholder="▋name">
                    <input type="password" name="password" placeholder="▋password">
                    <input type="password" name="password-check" placeholder="▋password check">
                    <button>> REGISTER</button>
                </form>
                <p class="matrix-text">ANONYMOUS ~ Don’t you recognize me? It’s me:</p>
                <form action="/login" method="post" class="login">
                    @csrf
                    <input type="text" name="name" placeholder="▋name">
                    <input type="password" name="password" placeholder="▋password">
                    <button>> LOGIN</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings") 
    </main>
</body>
</html>