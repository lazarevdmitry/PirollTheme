<?php $dat=$site_info;?>
<footer>
  <div class="footer-container container">
    <ul class="row" itemscope itemtype="http://schema.org/Organization">
      <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
        <div itemprop="legalName">
          <?php echo $dat['OwnerNameFull']; ?>
        </div>
        <div>
          &copy; <?php echo $dat['Year']; ?> <?php echo $dat['OwnerNameBrief']; ?>. <?php echo $this->lang->line('copyright'); ?>
        </div>
        <div itemprop="creator">
          <?php echo $this->lang->line('designed_by');?> <?php echo $dat['DesignedBy']; ?>.
        </div>
        <div itemprop="programmer">
          <?php echo $this->lang->line('implemented_by');?> <?php echo $dat['ImplementedBy']; ?>.
        </div>
      </li> <!-- End of li -->
      <li class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-4 col-xs-6">
        <div itemprop="email">
          <?php echo $dat['Email']; ?>
        </div>
        <div itemprop="telephone">
          <?php echo $dat['Phone']; ?>
        </div>
      </li> <!-- End of li -->
      <li class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
        <div>
          <a href="/projects/">
            <?php echo $this->lang->line('projects_page');?>
          </a>
        </div>
        <div>
          <a href="/about/">
            <?php echo $this->lang->line('about_page');?>
          </a>
        </div>
        <div>
          <a href="/services/">
            <?php echo $this->lang->line('services_page');?>
          </a>
        </div>
        <div>
          <a href="/career/">
            <?php echo $this->lang->line('career_page');?>
          </a>
        </div>
      </li> <!-- End of li-->
      <li class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
        <div>
          <a href="/news/">
            <?php echo $this->lang->line('news_page');?>
          </a>
        </div>
        <div>
          <a href="/events/">
            <?php echo $this->lang->line('events_page');?>
          </a>
        </div>
        <div>
          <a href="/contact/">
            <?php echo $this->lang->line('contact_page');?>
          </a>
        </div>
        <div>
          <a href="/legals/">
            <?php echo $this->lang->line('legals_page');?>
          </a>
        </div>
      </li> <!-- End of li -->
      <li class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
        <div>
          <a href="#" target="_blank">facebook</a>
        </div>
        <div>
          <a href="#" target="_blank">twitter</a>
        </div>
        <div>
          <a href="#" target="_blank">instagram</a>
        </div>
        <div>
          <a href="#" target="_blank">dribble</a>
        </div>
      </li> <!-- End of li -->
    </ul> <!-- End of ul.row -->
  </div> <!-- End of .footer-container -->
</footer>
</div> <!-- End of .wrapper  -->

    <script src="/vendor/html5shiv.min.js"></script>
    <script src="/vendor/html5shiv-printshiv.min.js"></script>
    <!-- Yandex.Metrika counter -->
    <script>
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter48921275 = new Ya.Metrika({
                        id:48921275,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
      <div>
        <img src="https://mc.yandex.ru/watch/48921275" style="position:absolute; left:-9999px;" alt="" />
      </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <script src='/vendor/components/jquery/jquery.min.js'></script>
    <script src='/js/app.js'></script>
  </body>

</html>
