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
                      <b>Favorite Pet:</b></br>
                      @csrf
                      @if ($user->character === "glasses.png")
                          Fish
                      @elseif ($user->character === "hair.png")
                          Cat
                      @elseif ($user->character === "hat.png")
                          Horse
                      @elseif ($user->character === "moustache.png")
                          Rabbit
                      @elseif ($user->character === "partyhat.png")
                          Dog
                      @elseif ($user->character === "wheelchair.png")
                          Cow
                      @endif
                  </p>
            </div>
            <div class="Summary">
                <h2>Summary</h2>
                <p>
                    @csrf
                    @if ($user->character === "glasses.png")
                        This font is too small.
                    @elseif ($user->character === "hair.png")
                        Metalhead that spend lots of money in hair conditioner.
                    @elseif ($user->character === "hat.png")
                        Some Shakespeare quote.
                    @elseif ($user->character === "moustache.png")
                        Beautiful moustache man. 
                    @elseif ($user->character === "partyhat.png")
                        Party rock is in the house tonight!
                    @elseif ($user->character === "wheelchair.png")
                        Likes rolling around the world.
                    @endif
                </p>
            </div>
            <div class="Language">
                <h2>Language</h2>
                <ul>
                    <li>English</li>
                    <li>Dutch</li>
                </ul>
            </div>
            <div class="Hobbies">
                <h2>Hobbies</h2>
                <ul>
                    @csrf
                    @if ($user->character === "glasses.png")
                        <li>Reading</li>
                        <li>Eating fruits</li>
                    @elseif ($user->character === "hair.png")
                        <li>Playing guitar</li>
                        <li>Cycling</li>
                    @elseif ($user->character === "hat.png")
                        <li>Amateur theatre</li>
                        <li>Rugby</li>
                    @elseif ($user->character === "moustache.png")
                        <li>Horse riding</li>
                        <li>Baking</li>
                    @elseif ($user->character === "partyhat.png")
                        <li>Partying</li>
                        <li>Mangas</li>
                    @elseif ($user->character === "wheelchair.png")
                        <li>Boardgames</li>
                        <li>Travelling</li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="name">
                <h1>{{ $user->name }}</h1>
            </div>
            <div class="title">
                <p>Web Developer 
                    @csrf 
                    @if ($user->track)
                    • {{$user->track}}
                    @endif
                </p>
            </div>
            <div class="SoftSkills">
                <h2>Soft Skills</h2>
                <ul>
                    @if($user->card_reason)<li title="Card choice">{{$user->card_reason}} •</li>@endif
                    @if(!empty($user->toilet_choice) && $user->toilet_choice !== "null")<li title="Bonasi's choice">{{$user->toilet_choice}} •</li>@endif
                    @if($user->extra_toilet)<li title="">{{$user->extra_toilet}} •</li>@endif
                    @if($user->guessing)<li title="Guessing Persile's age">{{$user->guessing}} •</li>@endif
                    @if(!empty($user->tech_talk) && $user->tech_talk !== "null")<li title="Tech Talk topic">{{$user->tech_talk}} •</li>@endif
                    @if(!empty($user->feedback) && $user->feedback !== "null")<li title="Tech Talk feedback">{{$user->feedback}} •</li>@endif
                    @if($user->track_first)<li title="">{{$user->track_first}} •</li>@endif
                    @if(!empty($user->track_second) && $user->track_second !== "null")<li title="">{{$user->track_second}} •</li>@endif
                    @if($user->celebration)<li title="">Networking •</li>@endif
                </ul>
            </div>
            <div class="TechSkills">
                <h2>Tech Skills</h2>
                <ul>
                @if($user->mastermind)<li title="">HTML • CSS •</li>@endif
                @if($user->rockps)<li title="">{{$user->rockps}} •</li>@endif
                @if($user->memory1)<li title="">{{$user->memory1}} •</li>@endif
                @if($user->memory2)<li title="">{{$user->memory2}} •</li>@endif
                @if($user->memory3)<li title="">{{$user->memory3}} •</li>@endif
                @if($user->slider)<li title="">{{$user->slider}} •</li>@endif
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