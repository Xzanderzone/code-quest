<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    <header>
        <div id="logo"> 
            <img src="..\media\logo\Logo.svg" alt="Code Guest Logo">
        </div>
        <div id="title">
            <h1>
                <a href="/" title="Go back to the landing page">> A WEB DEV JOURNEY</a>
            </h1>
        </div>
        <div id="cv-emblem">
            @auth
            <a href="/story">back to story</a>
            @endauth
        </div>
    </header>
    <main class="cv">
        <div class="full">
        <div class="left">
            <div class="image">
            @if(!empty($user->character))
            <img src="..\media\stickmen\{{ $user->character }}" alt="">
            @endif
            </div>
            <div class="Contact">
                <h2>Contact</h2>
                <p>
                      <b>Username:</b>
                        </br>{{ $user->name }}
                  </p>
                <p>
                      <b>Favorite Pet:</b></br>Cow
                  </p>
            </div>
            <div class="Summary">
                <h2>Summary</h2>
                <p>
                    Beautiful moustache man. 
                </p>
            </div>
            <div class="Language">
                <h2>Language</h2>
                <ul>
                    <li>English</li>
                    <li>Hindi</li>
                </ul>
            </div>
            <div class="Hobbies">
                <h2>Hobbies</h2>
                <ul>
                    <li>Playing cricket</li>
                    <li>Swimming</li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="name">
                <h1>{{ $user->name }}</h1>
            </div>
            <div class="title">
                <p>Web Developer</p>
            </div>
            <div class="SoftSkills">
                <h2>Soft Skills</h2>
                <ul>
                    <li title="First soft skill">{{$user->card_reason}} •</li>
                    <li>Test •</li>
                    <li>Test •</li>
                    <li>Test •</li>
                    <li>Test •</li>
                    <li>Test •</li>
                </ul>
            </div>
            <div class="TechSkills">
                <h2>Tech Skills</h2>
                <ul>
                    <li>Java •</li>
                    <li>Back end •</li>
                    <li>HTML •</li>
                    <li>Salesforce •</li>
                    <li>Express •</li>
                </ul>
            </div>
            <div class="project">
                <h2>Code>Quest</h2>
                <table>
                    <tr>
                        <th>Chosen card:</th>
                        <th>Points:</th>
                    </tr>
                    <tr>
                        <td>
                            @if(!empty($user->card))
                            <img src="..\media\cards\{{ $user->card }}" alt="">
                            @endif
                        </td>    
                        <td class="points">666</td>   
                    </tr>
                </table>
            </div>
            <div class="Education">
                <h2>Education</h2>
                <b>Becode │ {{now()->year}}</b>
            </div>
        </div>
    </div>
    </main>
</body>
</html>