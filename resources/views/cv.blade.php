<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
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
                      <b>Username:</b>Michael Horse
                  </p>
                <p>
                      <b>Favorite Pet:</b>Cow
                  </p>
            </div>
            <div class="Skills">
                <h2>Skills</h2>
                <ul>
                    <li>
                          <b>Programming Languages :
                            Python, Java, C++</b>
                      </li>
                </ul>
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
            <div class="Summary">
                <h2>Summary</h2>
                <p>
                    Mustachioed mirth maker, riding the range of comedy with finesse. 
                    Wrangling laughs and lassos alike, he's the cowboy of humor you need in your posse.
                </p>
            </div>
            <div class="Experience">
                <h2>Experience</h2>
                <h3>Fighting horse</h3>
                <p>January 2022 to Present</p>
                <ul>
                    <li>
                        Web creativity 
                    </li>
                    <li>
                        Designing horse saddles
                    </li>
        
                </ul>
            </div>
            <div class="Education">
                <h2>Education</h2>
                <table>
                    <tr>
                        <th>University</th>
                        <th>Year</th>
                    </tr>
                    <tr>
                        <td>Becode</td>
                        <td>{{now()->year}}</td>
                    </tr>
                </table>
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
        </div>
    </div>
    </main>
</body>
</html>