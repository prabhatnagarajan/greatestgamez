<?php
function generateHeader($page){
echo
<<<HERE
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="homeheader">
<span id="logo">
<a href="http://www.greatestgamez.com/home.php"><img src="http://www.greatestgamez.com/images/logo2.png" alt="Your Browser Does not support this image."></a>
</span>
<form action="http://www.greatestgamez.com/other_pages/search.php" method="get" id="searchbar">
<input type="text" maxlength="60" name="searchwords" id="searchbox" placeholder="Search for Games...">
<input type="submit" name="submitbutton" value="" id="searchbutton">
</form>
<div id="list">
<ul>
HERE;
if(strcmp($page,"home")==0)
{
echo
<<<HERE
<li><a href="http://www.greatestgamez.com/all.php">ALL</a></li>
<li><a href="http://www.greatestgamez.com/strategy.php">STRATEGY</a></li>
<li><a href="http://www.greatestgamez.com/sports.php">SPORTS</a></li>
<li><a href="http://www.greatestgamez.com/action.php">ACTION</a></li>
<li><a href="http://www.greatestgamez.com/fighting.php">FIGHTING</a></li>
<li><a href="http://www.greatestgamez.com/shooting.php">SHOOTING</a></li>
<li><a href="http://www.greatestgamez.com/car.php">CAR</a></li>
<li><a href="http://www.greatestgamez.com/puzzle.php">PUZZLE</a></li>
<li><a href="http://www.greatestgamez.com/mobile.php">MOBILE</a></li>
HERE;
}
if(strcmp($page,"all")==0)
{
echo
<<<HERE
<li><a href="http://www.greatestgamez.com/all.php" style="border:3px white inset; color:white;">ALL</a></li>
<li><a href="http://www.greatestgamez.com/strategy.php">STRATEGY</a></li>
<li><a href="http://www.greatestgamez.com/sports.php">SPORTS</a></li>
<li><a href="http://www.greatestgamez.com/action.php">ACTION</a></li>
<li><a href="http://www.greatestgamez.com/fighting.php">FIGHTING</a></li>
<li><a href="http://www.greatestgamez.com/shooting.php">SHOOTING</a></li>
<li><a href="http://www.greatestgamez.com/car.php">CAR</a></li>
<li><a href="http://www.greatestgamez.com/puzzle.php">PUZZLE</a></li>
<li><a href="http://www.greatestgamez.com/mobile.php">MOBILE</a></li>
HERE;
}
if(strcmp($page,"strategy")==0)
{
echo
<<<HERE
<li><a href="http://www.greatestgamez.com/all.php">ALL</a></li>
<li><a href="http://www.greatestgamez.com/strategy.php" style="border:3px white inset; color:white;">STRATEGY</a></li>
<li><a href="http://www.greatestgamez.com/sports.php">SPORTS</a></li>
<li><a href="http://www.greatestgamez.com/action.php">ACTION</a></li>
<li><a href="http://www.greatestgamez.com/fighting.php">FIGHTING</a></li>
<li><a href="http://www.greatestgamez.com/shooting.php">SHOOTING</a></li>
<li><a href="http://www.greatestgamez.com/car.php">CAR</a></li>
<li><a href="http://www.greatestgamez.com/puzzle.php">PUZZLE</a></li>
<li><a href="http://www.greatestgamez.com/mobile.php">MOBILE</a></li>
HERE;
}
if(strcmp($page,"sports")==0)
{
echo
<<<HERE
<li><a href="http://www.greatestgamez.com/all.php">ALL</a></li>
<li><a href="http://www.greatestgamez.com/strategy.php">STRATEGY</a></li>
<li><a href="http://www.greatestgamez.com/main_pages/sports.php" style="border:3px white inset; color:white;">SPORTS</a></li>
<li><a href="http://www.greatestgamez.com/action.php">ACTION</a></li>
<li><a href="http://www.greatestgamez.com/fighting.php">FIGHTING</a></li>
<li><a href="http://www.greatestgamez.com/shooting.php">SHOOTING</a></li>
<li><a href="http://www.greatestgamez.com/car.php">CAR</a></li>
<li><a href="http://www.greatestgamez.com/puzzle.php">PUZZLE</a></li>
<li><a href="http://www.greatestgamez.com/mobile.php">MOBILE</a></li>
HERE;
}
if(strcmp($page,"action")==0)
{
echo
<<<HERE
<li><a href="http://www.greatestgamez.com/all.php">ALL</a></li>
<li><a href="http://www.greatestgamez.com/strategy.php">STRATEGY</a></li>
<li><a href="http://www.greatestgamez.com/sports.php">SPORTS</a></li>
<li><a href="http://www.greatestgamez.com/action.php" style="border:3px white inset; color:white;">ACTION</a></li>
<li><a href="http://www.greatestgamez.com/fighting.php">FIGHTING</a></li>
<li><a href="http://www.greatestgamez.com/shooting.php">SHOOTING</a></li>
<li><a href="http://www.greatestgamez.com/car.php">CAR</a></li>
<li><a href="http://www.greatestgamez.com/puzzle.php">PUZZLE</a></li>
<li><a href="http://www.greatestgamez.com/mobile.php">MOBILE</a></li>
HERE;
}
if(strcmp($page,"fighting")==0)
{
echo
<<<HERE
<li><a href="http://www.greatestgamez.com/all.php">ALL</a></li>
<li><a href="http://www.greatestgamez.com/strategy.php">STRATEGY</a></li>
<li><a href="http://www.greatestgamez.com/sports.php">SPORTS</a></li>
<li><a href="http://www.greatestgamez.com/action.php">ACTION</a></li>
<li><a href="http://www.greatestgamez.com/fighting.php" style="border:3px white inset; color:white;">FIGHTING</a></li>
<li><a href="http://www.greatestgamez.com/shooting.php">SHOOTING</a></li>
<li><a href="http://www.greatestgamez.com/car.php">CAR</a></li>
<li><a href="http://www.greatestgamez.com/puzzle.php">PUZZLE</a></li>
<li><a href="http://www.greatestgamez.com/mobile.php">MOBILE</a></li>
HERE;
}
if(strcmp($page,"shooting")==0)
{
echo
<<<HERE
<li><a href="http://www.greatestgamez.com/all.php">ALL</a></li>
<li><a href="http://www.greatestgamez.com/strategy.php">STRATEGY</a></li>
<li><a href="http://www.greatestgamez.com/sports.php">SPORTS</a></li>
<li><a href="http://www.greatestgamez.com/action.php">ACTION</a></li>
<li><a href="http://www.greatestgamez.com/fighting.php">FIGHTING</a></li>
<li><a href="http://www.greatestgamez.com/shooting.php" style="border:3px white inset; color:white;">SHOOTING</a></li>
<li><a href="http://www.greatestgamez.com/car.php">CAR</a></li>
<li><a href="http://www.greatestgamez.com/puzzle.php">PUZZLE</a></li>
<li><a href="http://www.greatestgamez.com/mobile.php">MOBILE</a></li>
HERE;
}
if(strcmp($page,"car")==0)
{
echo
<<<HERE
<li><a href="http://www.greatestgamez.com/all.php">ALL</a></li>
<li><a href="http://www.greatestgamez.com/strategy.php">STRATEGY</a></li>
<li><a href="http://www.greatestgamez.com/sports.php">SPORTS</a></li>
<li><a href="http://www.greatestgamez.com/action.php">ACTION</a></li>
<li><a href="http://www.greatestgamez.com/fighting.php">FIGHTING</a></li>
<li><a href="http://www.greatestgamez.com/shooting.php">SHOOTING</a></li>
<li><a href="http://www.greatestgamez.com/car.php" style="border:3px white inset; color:white;">CAR</a></li>
<li><a href="http://www.greatestgamez.com/puzzle.php">PUZZLE</a></li>
<li><a href="http://www.greatestgamez.com/mobile.php">MOBILE</a></li>
HERE;
}
if(strcmp($page,"puzzle")==0)
{
echo
<<<HERE
<li><a href="http://www.greatestgamez.com/all.php">ALL</a></li>
<li><a href="http://www.greatestgamez.com/strategy.php">STRATEGY</a></li>
<li><a href="http://www.greatestgamez.com/sports.php">SPORTS</a></li>
<li><a href="http://www.greatestgamez.com/action.php">ACTION</a></li>
<li><a href="http://www.greatestgamez.com/fighting.php">FIGHTING</a></li>
<li><a href="http://www.greatestgamez.com/shooting.php">SHOOTING</a></li>
<li><a href="http://www.greatestgamez.com/car.php">CAR</a></li>
<li><a href="http://www.greatestgamez.com/puzzle.php" style="border:3px white inset; color:white;">PUZZLE</a></li>
<li><a href="http://www.greatestgamez.com/mobile.php">MOBILE</a></li>
HERE;
}
if(strcmp($page,"mobile")==0)
{
echo
<<<HERE
<li><a href="http://www.greatestgamez.com/all.php">ALL</a></li>
<li><a href="http://www.greatestgamez.com/strategy.php">STRATEGY</a></li>
<li><a href="http://www.greatestgamez.com/sports.php">SPORTS</a></li>
<li><a href="http://www.greatestgamez.com/action.php">ACTION</a></li>
<li><a href="http://www.greatestgamez.com/fighting.php">FIGHTING</a></li>
<li><a href="http://www.greatestgamez.com/shooting.php">SHOOTING</a></li>
<li><a href="http://www.greatestgamez.com/car.php">CAR</a></li>
<li><a href="http://www.greatestgamez.com/puzzle.php">PUZZLE</a></li>
<li><a href="http://www.greatestgamez.com/mobile.php" style="border:3px white inset; color:white;">MOBILE</a></li>
HERE;
}
echo
<<<HERE
</ul>
</div>
<span id="add">
<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=300&amp;pubid=ra-52c7d9c04c8c28d3">
<img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" 
width="125" height="16" alt="Bookmark and Share" style="border:0"/></a>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52c7d9c04c8c28d3"></script>
</span>
<span id="FB">
<span class="fb-like" data-href="https://www.facebook.com/pages/greatestgamezcom/574885529256802" data-width="90" data-layout="button" data-action="like" data-show-faces="false" data-kid-directed-site="true" data-share="false"></span>
</span>
<span id="gplus">
<span class="g-plusone" data-size="medium" data-width="32" data-annotation="none" data-href="https://plus.google.com/b/117519193989617989846/117519193989617989846/about?hl=en"><script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</span>
</span>
<span id="twit">
<a href="https://twitter.com/share" class="twitter-share-button" data-url="https://twitter.com/greatestgamez1" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id))
{js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</span>
<div id="signin">
<a href="http://www.greatestgamez.com/other_pages/signin.php"></a>
</div>
</div>
<hr class="headerline"/>
HERE;
}
function heading()
{
<<<HERE
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="shortcut icon" href="http://www.greatestgamez.com/images/favicon.ico">
HERE;
}
function generateFooter()
{
echo
<<<HERE
<hr class="headerline"/>
<div id="pagefooter">
<footer>
&#169; Copyright 2013-2014 greatestgamez.com. All Rights Reserved. 
<p></p> 
<a href="http://www.greatestgamez.com/other_pages/termsofuse.php" class="footerlinks">Terms of Use</a> &nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.greatestgamez.com/other_pages/privacypolicy.php" class="footerlinks">Privacy Policy</a> &nbsp;&nbsp;&nbsp;&nbsp;
</footer>
</div>
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
HERE;
}
?>