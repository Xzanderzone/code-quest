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
                <a href="/" title="Go back to the landing page">A WEB DEV JOURNEY</a>
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
                <img src="..\media\stickmen\Stickman-persile-v1.gif"
                     alt="chosen character">
            </div>
            <div class="Contact">
                <h2>Contact</h2>
                <p>
                      <b>Username:</b>
                        </br>Michael Horse
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
                <h1>Hamilton Johnson</h1>
            </div>
            <div class="title">
                <p>Web Developer</p>
            </div>
            <div class="SoftSkills">
                <h2>Soft Skills</h2>
                <ul>
                    <li>Communication •</li>
                    <li>Teamwork •</li>
                    <li>Problem-solving •</li>
                    <li>Time management •</li>
                    <li>Organizational •</li>
                    <li>Adaptability •</li>
                </ul>
            </div>
            <div class="TechSkills">
                <h2>Tech Skills</h2>
                <p>Java • Back end • HTML • Salesforce</p>
            </div>
            <div class="project">
                <h2>Code>Quest</h2>
                <ul>
                    <li>
                        <p>
                            Points:
                        </p>
                    </li>
                    <li>
                        <p>Chosen card:</p>
                        <img class="ChosenCard" src="..\media\cards\card1.png" alt="Card1">
                    </li>
                </ul>
            </div>
            <div class="Education">
                <h2>Education</h2>
                <table>
                    <tr>
                        <th>Becode</th>
                        <th>{{now()->year}}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </main>
</body>
</html>