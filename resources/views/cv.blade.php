<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    <header>
        <div id="logo"> 
        <a href="/" title="Go back to the landing page">
        <img class="logoBlack" src="..\media\logo\Logo.svg" alt="Code Guest Logo">
        <img class="logoWhite" src="..\media\logo\Logo-white.svg" alt="Code Guest Logo Hover">
        </a>
    </div>
    <div id="title">
        <h1>
             A WEB DEV JOURNEY
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
                    @if($user->card_reason)<li title="Card choice">{{$user->card_reason}} •</li>@endif
                    @if($user->toilet_choice !== "null")<li title="Bonasi's choice">{{$user->toilet_choice}} •</li>@endif
                    @if($user->extra_toilet)<li title="">{{$user->extra_toilet}} •</li>@endif
                    @if($user->guessing)<li title="Guessing Persile's age">{{$user->guessing}} •</li>@endif
                    @if($user->tech_talk !== "null")<li title="Tech Talk topic">{{$user->tech_talk}} •</li>@endif
                    @if($user->feedback !== "null")<li title="Tech Talk feedback">{{$user->feedback}} •</li>@endif
                    @if($user->track_first)<li title="">{{$user->track_first}} •</li>@endif
                    @if($user->track_second !== "null")<li title="">{{$user->track_second}} •</li>@endif
                    @if($user->celebration)<li title="">Networking •</li>@endif
                </ul>
            </div>
            <div class="TechSkills">
                <h2>Tech Skills</h2>
                <ul>
                @if($user->mastermind !== "null")<li title="">{{$user->mastermind}} •</li>@endif
                @if($user->rockps !== "null")<li title="">{{$user->rockps}} •</li>@endif
                @if($user->memory1 !== "null")<li title="">{{$user->memory1}} •</li>@endif
                @if($user->memory2 !== "null")<li title="">{{$user->memory2}} •</li>@endif
                @if($user->memory3 !== "null")<li title="">{{$user->memory3}} •</li>@endif
                @if($user->slider !== "null")<li title="">{{$user->slider}} •</li>@endif
                </ul>
            </div>
            <div class="project">
                <h2>Code>Quest</h2>
                <table>
                    @if(!empty($user->card))
                    <tr>
                        <th>Chosen card:</th>
                        <th>Points:</th>
                    </tr>
                    <tr>
                        <td>
                            <img src="..\media\cards\{{ $user->card }}" alt="">
                        </td>    
                        <td class="points">{{$user->score}}</td>   
                    </tr>
                    @endif
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