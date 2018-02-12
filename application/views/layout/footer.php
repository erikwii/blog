                <footer class="mdl-mini-footer">
                    <div class="mdl-mini-footer--middle-section mdl-color-text--grey-600">
                        Copyright © Erik-Syafia
                    </div>
                </footer>
            </main>
            <div class="mdl-layout__obfuscator"></div>
        </div>
    <div>
    <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="view-source">
        <a class="mdl-color-text--grey-600" href="about/about.html"><li class="mdl-menu__item">About us</li></a>
        <a class="mdl-color-text--grey-600" href="story/story.html"><li class="mdl-menu__item">Story</li></a>
        <a class="mdl-color-text--grey-600" href="contact.html"><li class="mdl-menu__item">Contact</li></a>
    </ul>    
    <button id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--indigo mdl-color-text--white">Menu</button>
    <script src="<?php echo base_url() ?>assets/js/style.js"></script>
  </body>
  <script>
    Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function(el) {
      var link = el.querySelector('a');
      if(!link) {
        return;
      }
      var target = link.getAttribute('href');
      if(!target) {
        return;
      }
      el.addEventListener('click', function() {
        location.href = target;
      });
    });
  </script>
</html>