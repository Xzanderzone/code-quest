<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            Alias repellendus sapiente soluta quo. Similique illum pariatur quae tempore dolore ipsa necessitatibus reprehenderit! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium consequatur corporis blanditiis minus ab dolores fugiat illum, odit, sapiente maxime magnam optio nemo facilis sed commodi? Et dignissimos accusantium laudantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias non iste repudiandae sunt sed, laborum dicta error laboriosam nisi repellendus dolorem exercitationem id iusto consequuntur nostrum quam sequi quidem esse?
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">HAMILTON ~ I'm new here, my name is:</p>
                <form action="/02" method="get" class="login">
                    <input type="text" name="name" placeholder="▋name">
                    <input type="password" name="password" placeholder="▋password">
                    <button>> LOGIN</button>
                </form>
                <p class="matrix-text">HAMILTON ~ Don’t you recognize me? It’s me:</p>
                <form action="/02" method="get" class="login">
                    <input type="text" name="name" placeholder="▋name">
                    <input type="password" name="password" placeholder="▋password">
                    <input type="password" name="password-check" placeholder="▋password check">
                    <button>> REGISTER</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        <div class="basile"><img src="media\stickmen\Stickman.svg" alt=""></div>
        <div class="you"></div>
    </main>
</body>
</html>