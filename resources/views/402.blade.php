<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            <p>Addventure sends you a file with everything that they expect to see on your project. The goal is to automate a hiring process in the company, making it easier for recruiters to access all information about candidates and positions.</p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~  You finish reading the document and…</p>
                <br>
                <form action="/track-first-choice" method="POST">
                    @csrf
                    <div class="options">
                        <input type="radio" name="track_first" value="Focus" id="option1"><label for="option1">a) Immediately start working on the project. There is no time to lose!</label> 
                        <br>
                        <input type="radio" name="track_first" value="Collaboration" id="option2"><label for="option2">b) Check with your colleagues what they thought about the assignment, sharing some ideas and tips.</label>
                        <br>
                        <input type="radio" name="track_first" value="Detail Oriented" id="option3"><label for="option3">c) Read the document once more to make sure that you understand every task.</label>
                        <br>
                        <input type="radio" name="track_first" value="Networking" id="option4"><label for="option4">c) Call your buddy on Addventure and ask him how was his experience on this process.</label>
                    </div> 
                    <br>
                    <button>> Let's make it happen</button>
                </form>
            </div>
        </div>
 
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings")

    </main>
</body>
</html>