<article id="me">
	<h1 class="outline-hidden">About Me</h1>
		<section>
				<h1>Who am I...?</h1>
				<p>Myself, I&rsquo;m a native north-westerner who has made Seattle my home for the past ten years. If I&rsquo;m not building websites, you can find me somewhere outside or perhaps wedding planning as of late.</p>
				<p>I&rsquo;ve received a broad foundation for web design at Seattle Central College. My current ambition is to build solid, efficient coding practices. Further, there is an increasingly important focus on user research including sound logic of information architecture and interaction design.</p>
				<p>But enough about me, how can I help you?</p>
		</section>
		<form id="contact" action="formhandler.php" method="post">
				<fieldset>
					<h2 class="outline-hidden">Contact Me</h2>
						<input type="text" id="name" name="name" maxlength="40" placeholder="What's your name?" />
						<input type="email" id="email" name="email" maxlength="40" placeholder="Email...?" required="required" />
						<textarea id="message" name="message" placeholder="How can I help?"></textarea>
						<div class="g-recaptcha" data-sitekey="6LeX6y8UAAAAAD866peFytX0aKpaveqeF5f9GquM"></div>
						<input type="submit" value="Send"/>
				</fieldset>
		</form>
</article>
</main>
<footer>
		<div>
		    <a href="https://github.com/marcogarcia5/left-aligned" target="_blank"><img src="images/github.jpg" alt="github" /></a>
		    <a href="https://www.facebook.com/leftaligneddesign/" target="_blank"><img src="images/facebook.jpg" alt="facebook" /></a>
				<a href="https://www.linkedin.com/in/marcus-garcia-38b226b8" target="_blank"><img src ="images/linkedin.png" alt="linkedIn" /></a>
		</div>
		<p>&copy; Left-Aligned 2017. All rights reserved</p>
</footer>
<a href="#" class="back-to-top">&#8682;</a>
</div>

  <!-- Begin Script -->

  <!-- BACK-TO-TOP -->
  <script src="script/back-to-top.js" type="text/javascript"></script>

	<!-- MIDDLE FADE -->
	<script src="script/fade-in.js" type="text/javascript"></script>

  <!-- Parallax -->
  <script src="script/parallax.js" type="text/javascript"></script>

	<!-- MOBILE NAV -->
        <script type="text/javascript">
            var acc = document.getElementsByClassName("accordion");
            var i;
                for (i = 0; i < acc.length; i++) {
                    acc[i].onclick = function() {
                    this.classList.toggle("active");
                    this.nextElementSibling.classList.toggle("show");
                    }
                }
				</script>

	<!-- TOGGLE NAV -->
  <script src="script/toggle-nav.js" type="text/javascript"></script>

  <!-- POPUP GALLERY -->
  <script src="script/popup-gallery.js" type="text/javascript"></script>

  <!-- End Script -->

    </body>
</html>
