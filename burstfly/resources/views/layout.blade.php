<!DOCTYPE HTML>
<html>

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>@yield('title')</title>

  <!-- Behavioral Meta Data -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  @yield('link')

</head>

<body>

  <a name="ancre"></a>

  <!-- CACHE -->
  <div class="cache"></div>

  <!-- HEADER -->

  <div id="wrapper-header">
    <div id="main-header" class="object">
      <div class="logo"><img src="img/logo-burst.png" alt="logo platz" height="38" width="90"></div>
      <div id="main_tip_search">
        <form>
          <input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
        </form>
      </div>
      <div id="stripes"></div>
    </div>
  </div>

  <!-- NAVBAR -->

  @yield('navbar')

  <!-- FILTER -->

  <div id="main-container-menu" class="object">
    <div class="container-menu">

      <div id="main-cross">
        <div id="cross-menu"></div>
      </div>

      <div id="main-small-logo">
        <div class="small-logo"></div>
      </div>

      <div id="main-premium-ressource">
        <div class="premium-ressource"><a href="#">Premium resources</a></div>
      </div>

      <div id="main-themes">
        <div class="themes"><a href="#">Latest themes</a></div>
      </div>

      <div id="main-psd">
        <div class="psd"><a href="#">PSD goodies</a></div>
      </div>

      <div id="main-ai">
        <div class="ai"><a href="#">Illustrator freebies</a></div>
      </div>

      <div id="main-font">
        <div class="font"><a href="#">Free fonts</a></div>
      </div>

      <div id="main-photo">
        <div class="photo"><a href="#">Free stock photos</a></div>
      </div>

    </div>
  </div>


  <!-- PORTFOLIO -->

  <div id="wrapper-container">

    <div class="container object">

      <div id="main-container-image">

        @yield('portfolio')

      </div>

    </div>

    <div id="wrapper-oldnew">
      <div class="oldnew">
        <div class="wrapper-oldnew-prev">
          <div id="oldnew-prev"></div>
        </div>
        <div class="wrapper-oldnew-next">
          <div id="oldnew-next"></div>
        </div>
      </div>
    </div>

    <div id="wrapper-thank">
      <div class="thank">
        <div class="thank-text">pl<span style="letter-spacing:-5px;">a</span>tz</div>
      </div>
    </div>

    <div id="main-container-footer">
      <div class="container-footer">

        <div id="row-1f">
          <div class="text-row-1f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">What is Platz</span><br>Platz is a blog showcasing hand-picked free themes, design stuff, free fonts and other resources for web designers.</div>
        </div>

        <div id="row-2f">
          <div class="text-row-2f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">How does it work</span><br>Platz offers you all the latest freebies found all over the fourth corners without to pay.</div>
        </div>

        <div id="row-3f">
          <div class="text-row-3f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Get in touch!</span><br>Subscribe our RSS or follow us on Facebook, Google+, Pinterest or Dribbble to keep updated.</div>
        </div>

        <div id="row-4f">
          <div class="text-row-4f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Newsletter</span><br>You will be informed monthly about the latest content avalaible.</div>

          <div id="main_tip_newsletter">
            <form>
              <input type="text" name="newsletter" id="tip_newsletter_input" list="newsletter" autocomplete=off required>
            </form>
          </div>
        </div>

      </div>
    </div>


    <div id="wrapper-copyright">
      <div class="copyright">
        <div class="copy-text object">Copyright © 2016. Template by <a style="color:#D0D1D4;" href="https://dcrazed.com/">Dcrazed</a></div>

        <div class="wrapper-navbouton">
          <div class="google object">g</div>
          <div class="facebook object">f</div>
          <div class="linkin object">i</div>
          <div class="dribbble object">d</div>
        </div>
      </div>
    </div>

  </div>



  <!-- SCRIPT -->

  @yield('js')

  <script>

    @yield('script')

  </script>


</body>


</html>
