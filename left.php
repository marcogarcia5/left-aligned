<?php include('includes/head.php'); ?>
<body id="left">
<?php include('includes/header.php'); ?>
<main>
    <?php include('includes/port-nav.php'); ?>
    <article>
      <h1 class="outline-hidden">Left Aligned Portfolio Piece</h1>
        <div class="port-logo"><img src="images/left-port.png" alt="left aligned logo"/></div>
        <nav>
          <h1 class="outline-hidden">Navigation</h1>
          <ul>
            <li id="overview-nav">Overview</li>
            <li id="highlights-nav">Highlights</li>
            <li><a href="index.php">Back to Home Page</a></li>
          </ul>
        </nav>
        <section id="overview">
          <h1 class="outline-hidden">Overview</h1>
          <div>
            <img class="port-image" src="images/design-tools.jpg" alt="design tools"/>
            <h2>My Portfolio</h2>
            <p>Here you will find my work. As I write this, there are projects that I am working on that I am eager to have you see, but I am also proud of these few projects that I have for you now. I do urge you to come back often, even write me a note, because I can&rsquo;t wait to fill this site with well-curated collaborations.</p>
          </div>
        </section>
        <section id="highlights">
          <h1 class="outline-hidden">Highlights</h1>
          <div>
            <img class="port-image" src="images/jquery.jpg" alt="jQuery events"/>
            <h2>jQuery Events</h2>
            <p>jQuery is a JavaScript library with a broad list of functions. I use jQuery in all of my event handling. It controls key functions such as parallax, smooth scrolling, fades, and browsing events. These functions have augmented my designs in the most basic ways, and I look forward to using more complex functions in future projects.</p>
          </div>
          <div>
            <h2>Site Security</h2>
            <p>I have collected various measures to improve the site security of this site. I use Dreamhost to serve my pages, and can add varying levels of SSL encryption to provide secure, certified connections. Other server-side protections can be found by validating PHP forms in conjunction with third-party software such as reCaptcha.</p>
          </div>
          <div>
            <img class="port-image" src="images/recaptcha.png" alt="recaptcha"/>
            <h2>Google API</h2>
            <p>Google supplies a large library of API functions that I have yet to scratch the surface. Two APIs that I have included in this site are reCaptcha and Google Analytics.</p>
            <p>ReCaptcha is a function that requires validation from the user in order to process a request. In this case, I use it to validate the email function. ReCaptcha is important because it filters out any web robots from sending me spam emails. It asks the user to identify images that only a human should be able to recognize in order to send me email. This is an added layer of security for  the site.</p>
            <p>Google Analytics allows me to monitor my website traffic. It can be customized to report specific events, show trends, and locate where users are viewing the site.</p>
          </div>
        </section>
    </article>
<?php include('includes/footer.php'); ?>
