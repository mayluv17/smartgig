<?
if($gig['guid']):
?>
<div class="container content" style="margin-top: 100px; background-color: #fff;">

<div class="col-sm-4 col-sm-push-8 right-side" >

<div class="panel panel-default panel-giginfo">
<div class="panel-heading"><span class="price-tag">$<? echo($gig['basicprice']); ?></span></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-6">
<div class="input-group unit-wrap">
  <span class="input-group-addon" id="minus-btn"><span class="glyphicon glyphicon-minus-sign"></span></span>
  <input type="text" class="form-control" placeholder="0" id="order-val" />
  <span class="input-group-addon" id="plus-btn"><span class="glyphicon glyphicon-plus-sign"></span></span>
</div>

</div>
<div class="col-xs-6">
<button class="btn btn-success" id="btn-ord">ORDER NOW</button>
</div>
</div>

<div class="gig-performance-wrap">
<div>
<span class="glyphicon glyphicon-send"></span> Delivery: <strong><? echo($gig['deltime']); ?> days</strong>
</div>

<div>
<span class="glyphicon glyphicon-thumbs-up"></span> Rating: <strong>99%</strong> (336 reviews)
</div>

<div>
<span class="glyphicon glyphicon-time"></span> Response time: <strong>within a few hours</strong>
</div>
</div>

</div>
<hr>
<div class="clearfix more-details">
<ul class="horizontal">
<li><span>Views</span><span class="det-val">3012</span></li>
<li><span>Sale</span><span class="det-val">12</span></li>
<li class="pull-right"><span class="glyphicon glyphicon-heart"></span><div class="det-val">9</div></li>

</ul>
</div>
<div class="member-details">
<div class="member-ppix"></div>

<div class="username-wrap">
<div class="member-status member-status-online"></div>
<!--<div class="member-status member-status-offline"></div>
<div class="member-status member-status-away"></div>-->
<div class="member-name">Dj Spinall</div>
</div>
<div class="well well-sm member-about"><p>Boxfresh Creative has been quoted as having the best logo designs on PPH with over 330 5 star reviews, we are now without doubt the No1 for logo and design services having over <a class="read-more">more...</a></p></div>
<ul class="horizontal">
<li><span class="glyphicon glyphicon-map-marker"></span><strong class="loc-name">UNITED STATE</strong>  </li>
<li class="pull-right"><a class="btn btn-default" id="cnt-btn">CONTACT</a></li>
</ul>
</div>
</div>
</div>


<div class="col-sm-8 col-sm-pull-4 left-side" >

<div class="gig-title clearfix"><h1><? echo($gig['gigtitle']); ?></h1></div>

<div class="">

<div id="banner-carousel" class="carousel slide gig-gallery" data-ride="carousel" data-interval="false">
  <!-- Wrapper for slides -->
  <div class="carousel-inner pics-area" role="listbox">
<?
$sel1 = mysqli_query($smartgig_con,"SELECT * FROM pictures_ WHERE userid='$gig[guid]' AND utype='3'");
if(mysqli_num_rows($sel1)):
$num = 0;
$ind = '';
while($pic = mysqli_fetch_array($sel1)){
	$num++;
	$indnum = ($num-1);
	if($num == 1): $active = ' active'; else: $active = ''; endif;
	$ind .= "<li data-target=\"#ppix-carousel\" data-slide-to=\"$indnum\" style=\"background-image: url($sb/$pic[path])\" class=\"$active1\"></li>";
	echo "
	<div class=\"item$active\">
	<img src=\"$sb/$pic[path]\" alt=\"$pic[path]\">
	<div class=\"carousel-caption\"></div>
	</div>";
}
endif;
?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control visible-lg visible-md" href="#banner-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control visible-lg visible-md" href="#banner-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<div class="discription-area">
<? echo($gig['gigdesc']); ?>
</div>
<hr>
<h3>Performance Links</h3>
<div class="row">
<?
$lk = mysqli_query($smartgig_con,"SELECT * FROM peformance_links_ WHERE gigid='$gig[guid]'");
if(mysqli_num_rows($lk)):
while($lnk = mysqli_fetch_array($lk)){
	echo "<div class=\"col-sm-6\"><div class=\"well well-sm links-tab\">http://www.youtube.com/Sncbj1</div></div>";
}
else:
echo "<div class=\"col-sm-12\"><div class=\"well well-sm links-tab\">No links yet!</div></div>";
endif;
?>
</div>


<div class="col-sm-6">
<h6>Youtube Links</h6>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>

<div class="links-hidden">
<h6>Soundcloud Links</h6>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>

<h6>Itunes Links</h6>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
</div>



</div>
<div class="col-sm-6">

<h6>Vimeo Links</h6>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="links-hidden">
<h6>Beatport Links</h6>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>

<h6>Other Links</h6>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
<div class="well well-sm links-tab">http://www.youtube.com/Sncbj1</div>
</div>
<a class="pull-right" id="more-lnk">Show more</a>
</div>






<div class="row tags-wrap">

<div class="tags">Mixing</div>
<div class="tags">Song mixing</div>
<div class="tags">Song mastering</div>

</div>

<div class="row extra-wrap">
<h3>Reviews</h3>
<hr>
<div class="extra-inner">
<label><input type="checkbox" /> I will do an extra mixing for extra &nbsp;<strong>$240</strong></label>
<label><input type="checkbox" /> I will do an extra mixing for extra &nbsp;<strong>$240</strong></label>
<label><input type="checkbox" /> I will do an extra mixing for extra &nbsp;<strong>$240</strong></label>
</div>
</div>


<div class="row" style="margin-top: 20px; ">
<h3>Reviews</h3>
<hr>

<div class="col-xs-2 left-rev">
<div class="cst-ppix"></div>

</div>
<div class="col-xs-10 right-rev">


<div class="each-rev">
<div class="cst-rev panel paanel-default">
<div class="panel-heading">
<ul class="horizontal">

<li style="font-size:16px;"><strong>Stuart51</strong></li>  
<li style="color: #838383;"><span class="glyphicon glyphicon-map-marker"></span>SPAIN</li>
<li class="pull-right rating">
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
</li>
</ul>
</div>
<div class="panel-body"><p>Work with Chris on a few projects, always consistent and great value</p>
</div>
</div>
<div class="singer-rev">
<div class="singer-ppix"></div>
<strong>Dj Spinall</strong>
<p>Thanks Stuart, a pleasure as always.</p>
</div>
</div>
</div>
</div>

</div> <!--leftside ends-->

</div>
<link rel="stylesheet" href="css/view-gig.css">
<script>
$(document).on("click","#more-lnk",function(){
	$(".links-hidden").slideDown(300);
	return false;
	});</script>

<?
else:
//header("location: ./$page1");
endif;
?>