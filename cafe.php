<?php include('includes/head.php'); ?>
<body id="cafe">
<?php include('includes/header.php'); ?>
<main>
    <?php include('includes/port-nav.php'); ?>
    <article>
      <h1 class="outline-hidden">Cafe Soleil Portfolio Piece</h1>
        <div class="port-logo"><img src="images/cafe-logo.png" alt="cafe soleil logo"/></div>
        <nav>
          <h1 class="outline-hidden">Navigation</h1>
          <ul>
            <li id="overview-nav">Overview</li>
            <li id="highlights-nav">Highlights</li>
            <li><a href="websites/cafe/index.html" target="_blank">Visit site</a></li>
          </ul>
        </nav>
        <section id="overview">
          <h1 class="outline-hidden">Overview</h1>
          <div>
            <img class="port-image" src="images/cafe-overview.jpg" alt="work in progress"/>
            <h2>From a Chef to Her Patrons</h2>
            <p class="italic">Please note that this site uses stock images and Lorem Ipsum. This is an on-going project, but will be finalized soon with custom images and appropriate copy.</p>
            <p>Cafe Soleil is a wonderful haven in the Madrona district of Seattle. A holdout to urban expansion, Cafe Soleil has been in business for over 20 years. Serving Ethiopian cuisine and brunch on the weekends, Cafe Soliel remains an oasis in the sprawl.</p>
            <p>The site for Cafe Soleil introduces some new tools as my second project. This site is meant to attract local customers in a less-travelled district. With a French name and serving Ethiopian cuisine, I felt the branding needed to reflect a more rustic font in both the copy as well as imagery. Macondo is the font used in the logo, giving the French name a hand-painted feel. Caudex is the font used for the headings along with Josifin Sans for the body copy. The Caudex serves as a strong title font with handwritten accents, particularly in the Menu section. The burgundy and dark grey colors reinforce the bold feel of the Caudex headings. Josefin Sans serves as a contrast to the headings, relieving the eye of the intentional boldness and increasing readability.</p>
          </div>
        </section>
        <section id="highlights">
          <h1 class="outline-hidden">Highlights</h1>
          <div>
            <div id="spot" class="flexslider">
                <ul class="slides">
                    <li><img src="images/cafe-spot1.jpg" alt="spotlight 1" /></li>
                    <li><img src="images/cafe-spot2.jpg" alt="spotlight 2" /></li>
                    <li><img src="images/cafe-spot3.jpg" alt="spotlight 3" /></li>
                </ul>
            </div>
            <div id="spot-mobile" class="flexslider">
                <ul class="slides">
                    <li><img src="images/cafe-spot1-mobile.jpg" alt="spotlight 1" /></li>
                    <li><img src="images/cafe-spot2-mobile.jpg" alt="spotlight 2" /></li>
                    <li><img src="images/cafe-spot3-mobile.jpg" alt="spotlight 3" /></li>
                </ul>
            </div>
            <h2>Flexslider</h2>
            <p>The Flexslider feature allows a carousel image display that can be browsed by the user. I use a jQuery plugin produced by Woo-Themes. On a desktop or laptop, controls appear as the cursor hovers over the images. If you are using a touch-screen device, feel free to swipe the image above.</p>
            <p>My projects omit the controls in order to create a continuously rotating banner, but the Flexslider controls are always available on request.</p>
          </div>
          <div>
            <img class="port-image" src="images/animated-events.jpg" alt="animated events"/>
            <h2>Animated Events</h2>
            <p>With the use of jQuery events and CSS3, animated transitions are easy to implement. Not to be overstated, I feel that animated events are meant to augment the user experience. Primary uses of animated events include smooth scrolling and highlighting links or calls to action.</p>
            <p>Static and stagnant websites have an unfriendly, &lsquo;robotic&rsquo; feeling. My goal for designing these sites is to give the user an implicit understanding and response to navigating the site. Visual cues, like animated transitions, are a core addition to an embedded user experience.</p>
          </div>
          <div>
            <img class="port-image" src="images/parallax-hover.gif" alt="parallax"/>
            <h2>Parallax</h2>
            <p>Parallax gives the website depth with different foreground and background scrolling speeds. The difference in speed can help separate one section from another and can be a subtle cue for the user to compartmentalize various pieces of information. It can also be appreciated as a visually pleasing way to scroll through the site.</p>
            <p>My current jQuery plugin for this effect is Parallax.js. But I am searching for new parallax solutions as well. Parallax.js will not run on iPhone or Android phones. Instead, I replace the scrolling background image with an appropriate static image, with all other functions fully intact.</p>
          </div>
        </section>
    </article>
<?php include('includes/footer.php'); ?>
