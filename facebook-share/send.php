<html>
<head>
<title>Your Website Title</title>
<meta property="og:url"           content="http://www.google.com" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Your Google Search Engine" />
<meta property="og:description"   content="Your Google Search Engine description" />
<meta property="og:image"         content="http://www.secondcity.com/wp-content/uploads/2016/06/1920searchengine.jpg" />
</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your send button code -->
  <div class="fb-send" 
    data-href="http://www.google.com"
    data-layout="button_count">
  </div>

</body>
</html>