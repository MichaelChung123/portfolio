    <div class="divider">
        <h2 id="contact" class="h2">CONTACT</h2>
    </div>

    <section class="section contact">
        <header>
            <h4>Let's Work Together</h4>
            <a class="email" href="mailto:hello@danielrd.com">hello@danielrd.com</a>
        </header>

        <ul class="social">
            <li><a href="https://dribbble.com/danielrd"><img class="dribbble" src="img/dribbble.png" width="64" height="64"></img></a></li>
            <li><a href="http://instagram.com/_danielrd"><img class="instagram" src="img/instagram.png" width="64" height="64"></img></a></li>
            <li><a href="https://www.linkedin.com/in/danielrd"><img class="linkedin" src="img/linkedin.png" width="64" height="64"></img></a></li>
            </ul>
        </section>

        <footer class="footer">
            <div class="group">
                <p class="item full">
                    &copy; Daniel R Destefanis | Built from scratch in Chicago, IL.
                </p>
            </div>
        </footer>
    </section>

</div><!-- /Wrapper -->

    <!-- JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>

    $(document).ready(function () {
        $(".initial").hover(function () {
            $(".name").addClass("show");
            $(".initial").addClass("shadow");
        });
        $(".initial").mouseleave(function () {
            $(".name").removeClass("show");
            $(".initial").removeClass("shadow");
        });
    });

    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 2000);
            return false;

          }
        }
      });
    });

    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-50799867-1', 'danielrd.com');
      ga('send', 'pageview');
    </script>

    </body>
</html>