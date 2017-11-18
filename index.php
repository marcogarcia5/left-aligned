<?php include('includes/head.php'); ?>
<body>
  <div class="parallax-window">
    <h1 class="outline-hidden">Left Aligned Design for Web and UX</h1>
      <header>
          <a href="index.php"><img class="logo" src="images/logo.jpg" alt="logo" /></a>
          <div class="utility">
              <a href="https://github.com/marcogarcia5/left-aligned" target="_blank"><img src="images/github.jpg" alt="github" /></a>
              <a href="https://www.facebook.com/leftaligneddesign/" target="_blank"><img src="images/facebook.jpg" alt="facebook" /></a>
              <a href="https://www.linkedin.com/in/marcus-garcia-38b226b8" target="_blank"><img src ="images/linkedin.png" alt="linkedIn" /></a>
          </div>
          <button class="accordion">&#9776;</button>
          <div class="panel">
              <nav>
                  <ul>
                      <li class="port-nav"><a href="#portfolio">Portfolio</a></li>
                      <li class="serv-nav"><a href="#services">Services</a></li>
                      <li class="con-nav"><a href="#contact">Contact</a></li>
                  </ul>
              </nav>
          </div>
      </header>
<main>
    <div id="spot" class="flexslider">
        <ul class="slides">
            <li><img src="images/spot1.jpg" alt="spotlight 1" /></li>
            <li><img src="images/spot2.jpg" alt="spotlight 2" /></li>
            <li><img src="images/spot3.jpg" alt="spotlight 3" /></li>

        </ul>
    </div>
    <div id="spot-mobile" class="flexslider">
        <ul class="slides">
            <li><img src="images/spot1-mobile.jpg" alt="spotlight 1" /></li>
            <li><img src="images/spot2-mobile.jpg" alt="spotlight 2" /></li>
            <li><img src="images/spot3-mobile.jpg" alt="spotlight 3" /></li>
        </ul>
    </div>
    <article>
        <h1 class="outline-hidden">Web Design and User Research</h1>
        <section id="portfolio">
            <h2 class="outline-hidden">Portfolio</h2>
            <div class="alex">
                <a href="alex.php"><img src="images/alex-hover.jpg" alt="Alex Fry" /></a>
            </div>
            <div class="cafe">
                <a href="cafe.php"><img src="images/cafe-hover.jpg" alt="Cafe Soleil" /></a>
            </div>
            <div class="pcc">
                <a href="pcc.php"><img src="images/pcc-hover.jpg" alt="PCC" /></a>
            </div>
            <div class="lt-aligned">
                <a href="left.php"><img src="images/lt-aligned-hover.jpg" alt="Left Aligned" /></a>
            </div>
        </section>
        <section id="services">
            <h2 class="outline-hidden">Services</h2>
            <div class="process">
                <div>
                    <img src="images/selfie.jpg" alt="headshot" />
                    <ul>
                        <li>User Research</li>
                        <li>Information Architecture</li>
                        <li>Branding</li>
                        <li>Visual Design</li>
                        <li>Protosite</li>
                    </ul>
                </div>
                <h1>How it Works</h1>
                <p>All aspects of a website design affect each other, and the scope of any project should reflect that. Starting from the concept, I will provide a wide array of design tools to fit any idea.</p>
                <p>Click on any of the images to see highlights of my services</p>
            </div>
            <div class="tools">
                <div class="concept">
                    <a href="concept.php"><img src="images/concept-hover.jpg" alt="Concept to Launch" /></a>
                </div>
                <div class="responsive">
                    <a href="responsive.php"><img src="images/responsive-hover.jpg" alt="Responsive Design" /></a>
                </div>
                <div class="design">
                    <a href="design.php"><img src="images/design-hover.jpg" alt="Design Tools" /></a>
                </div>
                <div class="research">
                    <a href="research.php"><img src="images/research-hover.jpg" alt="User Research" /></a>
                </div>
            </div>

        </section>
    </article>
<?php include('includes/footer.php'); ?>
