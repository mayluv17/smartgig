<?
if(!$userid) header("location: ../signin");

if($page2 == 'dashboard'):
require_once('userfiles/dashboard.php');
elseif($page2 == 'conversations'):
require_once('userfiles/message.php');
elseif($page2 == 'buyer-request'):
require_once('userfiles/request.php');
elseif($page2 == 'manage-orders'):
require_once('userfiles/order.php');
elseif($page2 == 'creategig'):
require_once('userfiles/create-gig.php');
else:
?>
<div class="jumbotron profle-header">
<div class="container">
<div class="well well-lg header-details">

<div class="col-xs-12">
<div class="thumbnail ppix" style="background-image:url('<? echo(ppix("$_SESSION[timage]")); ?>') !important;">

&nbsp;
</div>
</div>

<div class="col-xs-12 text-center">
<h1 class="">I'm <? echo($uinfo['firstname']); ?></h1>
<p>
A wide variety of opportunities are available to meet your company's goals and budget.
</p>
<div class="rating">
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
</div>

<div class="sex-state">
<span class="glyphicon glyphicon-user"></span>
 Female
</div>

<div class="sex-state"> 
<span class="glyphicon glyphicon-globe"></span>
United States
</div>
</div>

</div>

<ul class="nav nav-tabs prof-nav">
  <li role="presentation" class="active"  mid="prof-services"><a href="#prof-services">Musician Services</a></li>
  <li role="presentation" mid="public-prof"><a href="#public-prof" >Public Profile</a></li>
   
</ul>

</div>

</div>

<div class="container prof-cont prof-services"> 

<div class="col-md-4">

<div class="panel panel-default">
<div class="panel-heading"><h5>Language</h5><a class="pull-right add-new" id="add-id-11" style=" margin-top: -30px "> Add</a> </div> 
<div class="panel-body">
<div class="f-wrap" id="f-wrap-11" style="display:none;">
<form>
<div class="col-xs-7">
<select class="form-control">
<option>Enlish</option>
<option>Spanish</option>
<option>German</option>

</select>
</div>
<div class="col-xs-5">

<select class="form-control">
<option>Beinner</option>
<option>Fluent</option>

</select>
</div>
<br>
<br>

<div class="text-center f-btn">
<button class="btn cnc">Cancel</button>
<input type="submit" class="btn btn-default"/>
</div>

</form>
</div>

English - fluent
</div>


<div class="panel-heading"><h5>Contact Information</h5></div>
<div class="panel-body">

<div class="icn-inline">
<span class="glyphicon glyphicon-earphone"></span>
+4123215211

<a class="pull-right add-new" id="add-id-12" >Edit</a>
</div>

<div class="icn-inline">
<span class="glyphicon glyphicon-map-marker"></span>
23 Bouston street texas
</div>

<div class="f-wrap" id="f-wrap-12" style="display:none;">
<form>
<div class="col-xs-7">
<input type="text" class="form-control" placeholder="Phone Number" />

</div>
<div class="col-xs-5">

<input type="text" class="form-control" placeholder="Address" />
</div>
<br>
<br>

<div class="text-center f-btn">
<button class="btn cnc">Cancel</button>
<input type="submit" class="btn btn-default"/>
</div>

</form>
</div>

</div>




</div>


<div class="panel panel-default music-info">
<div class="panel-heading"><h5>Music Information</h5></div>
<div class="panel-body">

<div class="each-details">
<div class="col-xs-12"><div class="col-xs-6">
<strong>Lyrics</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6"> <a class="pull-right add-new" id="add-id-1"> Add</a> </div></div>

<div class="f-wrap" id="f-wrap-1" style="display:none;">
<form>
<div class="col-xs-7">
<select class="form-control">
<option>Jazz</option>
<option>Rock</option>
<option>Pop</option>

</select>
</div>
<div class="col-xs-5">

<select class="form-control">
<option>Beinner</option>
<option>Intermidiate</option>
<option>Expert</option>

</select>
</div>
<br>
<br>

<div class="text-center f-btn">
<button class="btn cnc">Cancel</button>
<input type="submit" class="btn btn-default"/>
</div>

</form>
</div>

<div class="values">


<small>Jazz</small>
<small>Rock</small>
<small>Pop</small>
</div>

</div>

<!--melody-->
<div class="each-details">
<div class="col-xs-12"><div class="col-xs-6">
<strong>Melody</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6"> <a class="pull-right add-new" id="add-id-2"> Add</a> </div></div>

<div class="f-wrap" id="f-wrap-2" style="display:none;">
<form>
<div class="col-xs-7">
<select class="form-control">
<option>Jazz</option>
<option>Rock</option>
<option>Pop</option>

</select>
</div>
<div class="col-xs-5">

<select class="form-control">
<option>Beinner</option>
<option>Intermidiate</option>
<option>Expert</option>

</select>
</div>
<br>
<br>

<div class="text-center f-btn">
<button class="btn cnc">Cancel</button>
<input type="submit" class="btn btn-default"/>
</div>

</form>
</div>

<div class="values">
<small>Jazz</small>
<small>Rock</small>
<small>Pop</small>
</div>

</div>
<!--voice-->
<div class="each-details">
<div class="col-xs-12"><div class="col-xs-6">
<strong>Voice Type</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6"> <a class="pull-right add-new" id="add-id-3"> Add</a> </div></div>

<div class="f-wrap" id="f-wrap-3" style="display:none;">
<form>
<div class="col-xs-7">
<select class="form-control">
<option>Jazz</option>
<option>Rock</option>
<option>Pop</option>

</select>
</div>
<div class="col-xs-5">

<select class="form-control">
<option>Beinner</option>
<option>Intermidiate</option>
<option>Expert</option>

</select>
</div>
<br>
<br>

<div class="text-center f-btn">
<button class="btn cnc">Cancel</button>
<input type="submit" class="btn btn-default"/>
</div>

</form>
</div>

<div class="values">
<small>Jazz</small>
<small>Rock</small>
<small>Pop</small>
</div>

</div>

<!--instruments-->
<div class="each-details">
<div class="col-xs-12"><div class="col-xs-6">
<strong>Instruments</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6"> <a class="pull-right add-new" id="add-id-4"> Add</a> </div></div>

<div class="f-wrap" id="f-wrap-4" style="display:none;">

<form>
<div class="col-xs-7">
<select class="form-control">
<option>Piano</option>
<option>Drum</option>
<option>Xass</option>

</select>
</div>
<div class="col-xs-5">

<select class="form-control">
<option>Beinner</option>
<option>Intermidiate</option>
<option>Expert</option>

</select>
</div>
<br>
<br>

<div class="text-center f-btn">
<button class="btn cnc">Cancel</button>
<input type="submit" class="btn btn-default"/>
</div>

</form>
</div>

<div class="values">
<small>Piano</small>
<small>Drum</small>
<small>Xass</small>
</div>
</div>


</div>
</div>

</div>

<div class="col-md-8 ">

<div class="well well-sm well-headings">
<h5>Perfect's gigs</h5>
</div>


<div class="featured-gig mygigs-wrap">

<div class="col-sm-4 col-md-4">
<div class="panel panel-default">
<div class="panel-heading"><small><span>by</span> Dj perfecta</small></div>
<div class="panel-body">
<div class="gig-content">
<div class="gig-pix" style="background: url(img/circle-made-of-music-instruments_23-2147509304.jpg) #F89A49 no-repeat;"></div>
<p><a>I will do instrumentals to your POP music</a></p>
</div>
</div>
<div class="panel-footer">
<div class="col-xs-4"><span class="glyphicon glyphicon-heart text-left"></span></div>
<div class="col-xs-8">
<small>STARTING at</small>
<strong>$20</strong>
</div>
</div>
</div>
</div>

<div class="col-sm-4 col-md-4">
<div class="panel panel-default">
<div class="panel-heading"><small><span>by</span> Dj perfecta</small></div>
<div class="panel-body">
<div class="gig-content">
<div class="gig-pix" style="background: url(img/circle-made-of-music-instruments_23-2147509304.jpg) #F89A49 no-repeat;"></div>
<p><a>I will do instrumentals to your POP music</a></p>
</div>
</div>
<div class="panel-footer">
<div class="col-xs-4"><span class="glyphicon glyphicon-heart text-left"></span></div>
<div class="col-xs-8">
<small>STARTING at</small>
<strong>$20</strong>
</div>
</div>
</div>
</div>

<div class="col-sm-4 col-md-4">
<div class="panel panel-default">
<div class="panel-heading"><small><span>by</span> Dj perfecta</small></div>
<div class="panel-body">
<div class="gig-content">
<div class="gig-pix" style="background: url(img/circle-made-of-music-instruments_23-2147509304.jpg) #F89A49 no-repeat;"></div>
<p><a>I will do instrumentals to your POP music</a></p>
</div>
</div>
<div class="panel-footer">
<div class="col-xs-4"><span class="glyphicon glyphicon-heart text-left"></span></div>
<div class="col-xs-8">
<small>STARTING at</small>
<strong>$20</strong>
</div>
</div>
</div>
</div>


</div>

 <div class="well well-sm well-headings">
<h5>Perfect's Reviews</h5>
</div> 

 <div class="well well-lg comment-wrap">
<div class="col-md-3 text-center">
<div class="thumbnail thumb-sm"></div>

</div>
<div class="col-md-9">
<div class="rating">
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
2 mins ago
</div>
<p>

 Some comment flow in here</p>
</div>
</div> 

<!--another comment-->
 <div class="well well-lg comment-wrap">
<div class="col-md-3 text-center">
<div class="thumbnail thumb-sm"></div>

</div>
<div class="col-md-9">
<div class="rating">
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
2 mins ago
</div>
<p>

 Some comment flow in here</p>
</div>
</div> 

<!--another comment-->
 <div class="well well-lg comment-wrap">
<div class="col-md-3 text-center">
<div class="thumbnail thumb-sm"></div>

</div>
<div class="col-md-9">
<div class="rating">
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
2 mins ago
</div>
<p>

 Some comment flow in here</p>
</div>
</div> 


</div>

</div>

<!--------------------------------Tab 2-------------------------------->

<div class="container prof-cont public-prof" style="display:none">
<div class="col-md-4">

<div class="panel panel-default song-deli">
<div class="panel-heading"><h5>Song Deliivery Account</h5></div> 
<div class="panel-body">
<div class="each-details">

<div class="col-xs-12">
<div class="col-xs-6">
<strong>BeatPort</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6"><label><input type="checkbox" class="ios-switch green tinyswitch" checked /><div><div></div></div></label> </div>
 </div>
 
</div>


<div class="each-details">

<div class="col-xs-12"><div class="col-xs-6">
<strong>SoundCloud</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6"><label><input type="checkbox" class="ios-switch green tinyswitch" /><div><div></div></div></label></div>
 </div>
 
</div>


<div class="each-details">

<div class="col-xs-12"><div class="col-xs-6">
<strong>Google Play</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6"><label><input type="checkbox" class="ios-switch green tinyswitch" checked /><div><div></div></div></label></div>
 </div>
 
</div>

<div class="each-details">

<div class="col-xs-12"><div class="col-xs-6">
<strong>Spotify</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6"><label><input type="checkbox" class="ios-switch green tinyswitch" checked /><div><div></div></div></label></div>
 </div>
 </div>
 
 <div class="each-details">

<div class="col-xs-12"><div class="col-xs-6">
<strong>MySpace</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6"><label><input type="checkbox" class="ios-switch green tinyswitch" /><div><div></div></div></label></div>
 </div>
  </div>

 
 <div class="each-details">

<div class="col-xs-12"><div class="col-xs-6">
<strong>YouTube</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6"><label><input type="checkbox" class="ios-switch green tinyswitch" checked /><div><div></div></div></label></div>
 </div>
 
</div>


 <div class="each-details">

<div class="col-xs-12"><div class="col-xs-6">
<strong>Vimeo</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6"><label><input type="checkbox" class="ios-switch green tinyswitch" /><div><div></div></div></label></div>
 </div>
 
</div>

</div>
</div>
</div>

<!--Payment details-->


<div class="col-md-8">

<div class="panel panel-default payment-set">
<div class="panel-heading"><h5>Payment</h5></div> 
<div class="panel-body">
<form>
<div class="col-xs-6">


<div class="each-details">

<div class="col-xs-12">
<div class="col-xs-6">
<strong>Paypal</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6"><label><input type="checkbox" class="ios-switch green tinyswitch" checked /><div><div></div></div></label></div>
 </div>
 
</div>

<div class="each-details">

<div class="col-xs-12">
<div class="col-xs-6">
<strong>Paypal Email</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6 wd-input"><input class="form-control" type="text" placeholder="Email" /></div>
 </div>
 
</div>

<div class="each-details">

<div class="col-xs-12">
<div class="col-xs-6">
<strong>Credit Card</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6 wd-input"><label><input type="checkbox" class="ios-switch green tinyswitch" checked /><div><div></div></div></label></div>
 </div>
 
</div>

<div class="each-details">

<div class="col-xs-12">
<div class="col-xs-6">
<strong>Card Type</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6 wd-input">
 <select class="form-control">
 <option>Card Type</option>
 </select></div>
 </div>
 
</div>

<div class="each-details">

<div class="col-xs-12">
<div class="col-xs-6">
<strong>Name on Card</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6 wd-input"><input class="form-control" type="text" placeholder="Card Owner" /></div>
 </div>
 
</div>

<div class="each-details">

<div class="col-xs-12">
<div class="col-xs-6">
<strong>Card Number</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6 wd-input"><input class="form-control" type="text" placeholder="Card Number" /></div>
 </div>
 
</div>



</div>










<div class="col-xs-6">
<div class="each-details">

<div class="col-xs-12">
<div class="col-xs-6">
<strong>Expiry Date</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6 wd-input"><input type="date" class="form-control" /></div>
 </div>
 
</div>



<div class="each-details">

<div class="col-xs-12">
<div class="col-xs-6">
<strong>Security Code</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6 wd-input"><input class="form-control" type="text" placeholder="Security Code" /></div>
 </div>
 
</div>

<div class="each-details"   style="height: 200px;">

<div class="col-xs-12">
<div class="col-xs-6">
<strong>Billing Address</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6 wd-input">
 <input class="form-control" type="text" placeholder="Street, house No " />
 <input class="form-control" type="text" placeholder="Zip" />
 <input class="form-control" type="text" placeholder="City" />
 <input class="form-control" type="text" placeholder="State" /></div>
 </div>
 
</div>

<div class="each-details">

<div class="col-xs-12">
<div class="col-xs-6">
<strong>E-mail Address</strong>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span> 
</div>
 <div class="col-xs-6 wd-input"><input class="form-control" type="text" placeholder="E-mail Address" /></div>
 </div>
 
</div>

</div>

</form>


</div>


</div>
</div>

</div>
<link rel="stylesheet" type="text/css" href="css/profile.css" />
<? endif; ?>