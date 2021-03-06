<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
if($iphone || $android || $palmpre || $ipod) { 
header( 'Location:http://thecamdenfamily.com/stuff/xmas2010/small_device.php' );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Merry Xmas 2010</title>
<!--[if lt IE 9]>
<script>
  var e = ("abbr,article,aside,audio,canvas,datalist,details," +
    "figure,footer,header,hgroup,mark,menu,meter,nav,output," +
    "progress,section,time,video").split(',');
  for (var i = 0; i < e.length; i++) {
    document.createElement(e[i]);
  }
</script>
<![endif]-->
<link rel="stylesheet" href="css/style.css" />
<script src="js/jquery-1.4.4.min.js"></script>
<script src="js/jquery.localscroll-1.2.7-min.js"></script>
<script src="js/jquery.scrollTo-1.4.2-min.js"></script>
<script>
$(document).ready(function() {
  var sectionwidth = ("window", $(window).width()); 
  var totalwidth = ((sectionwidth+200)*6);
  var navmargin = ((sectionwidth/2)-250);
  var windowheight = ("window", $(window).height());
  $('section').css("width",sectionwidth);
  $('body').css("width",totalwidth);
  $('nav').css("margin-left",navmargin);
  $('header').css("margin-left",navmargin);
  $('#bottom_image').css("width",totalwidth);
  $('.gallery').css("width",sectionwidth);
  $('.typekit-badge').css("padding-left",(totalwidth-300));
  $('.typekit-badge').css("position","absolute");
  $('.typekit-badge').css("left",0);
  //alert(sectionwidth);
  //alert(totalwidth);
  //alert(navmargin);
  if (windowheight<555) {
    $('.tooshort').css("display","block");
  }
  $.localScroll.defaults.axis = 'x';
  $.localScroll();
  $(".tab_content").hide(); //Hide all content
  $("ul.tabs li:first").addClass("active").show(); //Activate first tab
  $(".tab_content:first").show(); //Show first tab content
});
$(document).ready(function() {
  //On Click Event
  $("div#tabs ul li").click(function() {
    $("div#tabs ul li").removeClass("active"); //Remove any "active" class
    $(this).addClass("active"); //Add "active" class to selected tab
    $(".tab_content").hide(); //Hide all tab content
    var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
    $(activeTab).fadeIn(); //Fade in the active ID content
    return false;
  });
});
</script>
</head>
<body>
<noscript>
  <div class="noscript">You simply must have javascript on to view this site. Turn it on and reload.</div>
</noscript>
<!--[if lte IE 7]>
  <div class="noscript">You simply must have a proper browser to view this site. Go here <a href="http://www.mozilla.com/en-US/firefox/">here,</a> <a href="http://www.google.com/chrome/">here,</a> <a href="http://www.apple.com/safari/">here,</a> <a href="http://www.opera.com/">here,</a> or  <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">here</a> and get one.</div>
<![endif]-->
<script type="text/javascript" src="http://use.typekit.com/tyz7wlg.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<header>
  <h1>Merry Xmas!</h1>
</header>
<nav>
  <a href="#home" id="ahome"><img src="images/home-icon.png" width="60" height="60" alt="Home" title="Home" /></a>
  <a href="#first" title="Peter Pan's House"><span>1</span></a>
  <a href="#second" title="Must Be Santa"><span>2</span></a>
  <a href="#third" title="Good Night Song"><span>3</span></a>
  <a href="#fourth" title="Chasing Bubbles"><span>4</span></a>
  <a href="#fifth" title="Truly Scrumptious"><span>5</span></a>
</nav>
<div id="mycontent">
  <section class="section" id="home">
    <article>
      <h2><a name="home">Merry Xmas from our family to yours.</a></h2>
      <div class="gallery">
        <div id="tabs">
          <ul class="tabs">
            <li><a href="#tabs-1">Post Santa</a></li>
            <li><a href="#tabs-2">Gingerbread House</a></li>
            <li><a href="#tabs-3">A Cookie from Bebs</a></li>
            <li><a href="#tabs-4">Handprints</a></li>
            <li><a href="#tabs-5">Mittens</a></li>
            <li><a href="#tabs-6">Daddy</a></li>
            <li><a href="#tabs-7">Ladybug Raincoat</a></li>
          </ul>
          <div id="tabs-1" class="tab_content">
            <img src="images/IMG_5281.jpg" width="800" height="300" alt="Daniela, Shannon, and Mommy" title="Daniela, Shannon, and Mommy" />
          </div>
          <div id="tabs-2" class="tab_content">
            <img src="images/2010-12-15-16.11.54.jpg" width="800" height="300" alt="Daniela" title="Daniela" />
          </div>
          <div id="tabs-3" class="tab_content">
            <img src="images/2010-12-20-14.38.18.jpg" width="800" height="300" alt="Shannon" title="Shannon" />
          </div>
          <div id="tabs-4" class="tab_content">
            <img src="images/IMG_5325.jpg" width="800" height="300" alt="Daniela" title="Daniela" />
          </div>
          <div id="tabs-5" class="tab_content">
            <img src="images/IMG_5252.jpg" width="800" height="300" alt="Shannon" title="Shannon" />
          </div>
          <div id="tabs-6" class="tab_content">
            <img src="images/IMG_4787.jpg" width="800" height="300" alt="Daddy" title="Daddy" />
          </div>
          <div id="tabs-7" class="tab_content">
            <img src="images/IMG_5260.jpg" width="800" height="300" alt="Shannon" title="Shannon" />
          </div>
        </div><!-- /tabs -->
      </div>
      <p class="caption">Have a look at the pictures below, and then click the numbers above to see the videos.</p>
    </article>
  </section>
  <section class="section" id="first">
    <article>
      <h2><a name="first">Peter Pan's House</a></h2>
      <!-- first try HTML5 playback: if serving as XML, expand `controls` to `controls="controls"` and autoplay likewise       -->
      <!-- warning: playback does not work on iPad/iPhone if you include the poster attribute! fixed in iOS4.0                 -->
      <video width="352" height="288" controls preload>
        <!-- MP4 must be first for iPad! -->
        <source src="video/video-2010-09-11-12-06-01.mp4" type="video/mp4" /><!-- WebKit video    -->
        <source src="video/video-2010-09-11-12-06-01.ogv" type="video/ogg" /><!-- Firefox / Opera -->
        <!-- fallback to Flash: -->
        <object width="425" height="344" type="application/x-shockwave-flash" data="http://www.youtube.com/v/zqWMaBYvS9s">
          <!-- Firefox uses the `data` attribute above, IE/Safari uses the param below -->
          <param name="movie" value="http://www.youtube.com/v/zqWMaBYvS9s" />
          <param name="flashvars" value="controlbar=over&amp;image=video/video-2010-09-11-12-06-01.jpg&amp;file=video/video-2010-09-11-12-06-01.mp4" />
          <!-- fallback image. note the title field below, put the title of the video there -->
          <img src="video/video-2010-09-11-12-06-01.jpg" width="352" height="288" alt="Peter Pan's House"
               title="No video playback capabilities, sorry about that." />
        </object>
      </video>
      <p class="caption">Daniela explains: a house for Peter Pan<br />and the Lost Boys.</p>
    </article>
  </section>
  <section class="section" id="second">
    <article>
      <h2><a name="second">Must Be Santa</a></h2>
      <video width="352" height="288" controls preload>
        <source src="video/M2U01045_part2.mp4" type="video/mp4" /><!-- WebKit video    -->
        <source src="video/M2U01045_part2.ogv" type="video/ogg" /><!-- Firefox / Opera -->
        <object width="425" height="344" type="application/x-shockwave-flash" data="http://www.youtube.com/v/FdSc_TTgcv4">
          <param name="movie" value="http://www.youtube.com/v/FdSc_TTgcv4" />
          <param name="flashvars" value="controlbar=over&amp;image=video/M2U01045_part2.jpg&amp;file=video/M2U01045_part2.mp4" />
          <img src="video/M2U01045_part2.jpg" width="352" height="288" alt="Peter Pan's Fort"
               title="No video playback capabilities, sorry about that." />
        </object>
      </video>
      <p class="caption">Daniela singing <em>Must Be Santa</em><br />at the school holiday show.</p>
    </article>
  </section>
  <section class="section" id="third">
    <article>
      <h2><a name="third">Good Night Song</a></h2>
      <video width="352" height="288" controls preload>
        <source src="video/video-2010-08-17-08-50-34.mp4" type="video/mp4" /><!-- WebKit video    -->
        <source src="video/video-2010-08-17-08-50-34.ogv" type="video/ogg" /><!-- Firefox / Opera -->
        <object width="425" height="344" type="application/x-shockwave-flash" data="http://www.youtube.com/v/np61vWy0H1o">
          <param name="movie" value="http://www.youtube.com/v/np61vWy0H1o" />
          <param name="flashvars" value="controlbar=over&amp;image=video/video-2010-08-17-08-50-34.jpg&amp;file=video/video-2010-08-17-08-50-34.mp4" />
          <img src="video/video-2010-08-17-08-50-34.jpg" width="352" height="288" alt="Peter Pan's Fort"
               title="No video playback capabilities, sorry about that." />
        </object>
      </video>
      <p class="caption">Daniela and Shannon singing the <em>Good Night</em> song from <em>The Sound of Music</em>.</p>
    </article>
  </section>
  <section class="section" id="fourth">
    <article>
      <h2><a name="fourth">Chasing Bubbles</a></h2>
      <video width="352" height="288" controls preload>
        <source src="video/video-2010-10-18-13-48-38.mp4" type="video/mp4" /><!-- WebKit video    -->
        <source src="video/video-2010-10-18-13-48-38.ogv" type="video/ogg" /><!-- Firefox / Opera -->
        <object width="425" height="344" type="application/x-shockwave-flash" data="http://www.youtube.com/v/n4OrYSbplA8">
          <param name="movie" value="http://www.youtube.com/v/n4OrYSbplA8" />
          <param name="flashvars" value="controlbar=over&amp;image=video/video-2010-10-18-13-48-38.jpg&amp;file=video/video-2010-10-18-13-48-38.mp4" />
          <img src="video/video-2010-10-18-13-48-38.jpg" width="352" height="288" alt="Peter Pan's Fort"
               title="No video playback capabilities, sorry about that." />
        </object>
      </video>
      <p class="caption">Daniela and Shannon playing with bubbles<br />in Arcata.</p>
    </article>
  </section>
  <section class="section" id="fifth">
    <article>
      <h2><a name="fourth">Truly Scrumptious</a></h2>
      <video width="352" height="288" controls preload>
        <source src="video/video-2010-11-07-20-25-55.mp4" type="video/mp4" /><!-- WebKit video    -->
        <source src="video/video-2010-11-07-20-25-55.ogv" type="video/ogg" /><!-- Firefox / Opera -->
        <object width="425" height="344" type="application/x-shockwave-flash" data="http://www.youtube.com/v/qH8rU82Uc1Y">
          <param name="movie" value="http://www.youtube.com/v/qH8rU82Uc1Y" />
          <param name="flashvars" value="controlbar=over&amp;image=video/video-2010-11-07-20-25-55.jpg&amp;file=video/video-2010-11-07-20-25-55.mp4" />
          <img src="video/video-2010-11-07-20-25-55.jpg" width="352" height="288" alt="Peter Pan's Fort"
               title="No video playback capabilities, sorry about that." />
        </object>
      </video>
      <p class="caption">Shannon singing <em>Truly Scrumptious</em><br /> from <em>Chitty Chitty Bang Bang</em>.</p>
    </article>
  </section>
</div>
<footer>
</footer>
<div id="bottom_image">&nbsp;</div>
<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://www.seancamden.com/stats/piwik/" : "http://www.seancamden.com/stats/piwik/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 2);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://www.seancamden.com/stats/piwik/piwik.php?idsite=2" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tag -->
<div class="tooshort">
  <p>Oh no! Your browser window is too short! Try stretching the window bigger, closing some toolbars, or getting a bigger monitor and reloading.</p>
</div>
</body>
</html>
