<?php
include "config/config.php";
$step = $_SESSION['step'] ? $_SESSION['step']<5?($_SESSION['step']+1): $_SESSION['step'] : 1;
?>
<style>
.each-step-form{
	display:none;
}

.step-wrap-<? echo($step); ?>{
	display:block;
}
</style>
<script>
$(document).ready(function(e) {
   window.onload = stepmarker(<? echo($step); ?>); 
});
</script>
<section class="top-render">
<div class="container  hidden-sm hidden-xs">

<div class="each-step" id="mark-1">
<h5>Step 1</h5>
<div class="rail"></div>
<div class="bubbles">1</div>
</div>


<div class="each-step inactive-step" id="mark-2">
<h5>Step 2</h5>
<div class="rail"></div>
<div class="bubbles">2</div>
</div>

<div class="each-step inactive-step" id="mark-3">
<h5>Step 3</h5>
<div class="rail"></div>
<div class="bubbles">3</div>
</div>

<div class="each-step inactive-step" id="mark-4">
<h5>Step 4</h5>
<div class="rail"></div>
<div class="bubbles">4</div>
</div>

<div class="each-step inactive-step" id="mark-5">
<h5>Step 5</h5>
<div class="rail"></div>
<div class="bubbles">5</div>
</div>

<div class="each-step inactive-step" id="mark-6">
<h5>Step 6</h5>
<div class="rail"></div>
<div class="bubbles">6</div>
</div>



<a class="btn-flat pull-right" style="margin-top: 15px; border-radius: 20px; ">Save</a>



</div>




<div class="container text-center mb-stp hidden-md hidden-lg">
Step <span id="mob-stepcount">1</span> of 6
</div>
</section>

<div class="alert alert-danger form-err" style="display: none;"><span class="glyphicon glyphicon-alert"></span> <div id="error-drop"></div></div>
<div class="alert alert-success upload-success" style="display: none;"><span class="glyphicon glyphicon-alert"></span> <div id="">Picture Uploaded</div></div>

<div class="container form-container">

<div class="col-md-8 form-area">




<div class="each-step-form step-wrap-1">
<form class="form-horizontal" id="gig-form1">
<h6>PERFORMANCE TITLE</h6>


<textarea id="tt" name="gigtittle" class="form-control" placeholder="I will do real good stuff to your music" rows="2" maxlength="80" style="*text-indent: 20px; font-size: 40px; max-width: 80%;"></textarea>


<div class="row form-row">

<div class="col-md-5">





<h6>CATEGORY</h6>


<select class="form-control" name="gigcat" id="cat" style="width: 80%">
<option id="cat-fakeplace" value="0">SELECT A CATEGORY</option>
<option>Singing</option>
<option>Melody Composition</option>
<option>Melody Composition and singing</option>
<option>Mixing</option>
<option>Mastering</option>
<option>Sound Production</option>
<option>Music Composition & Sound Production</option>
<option>Songwriting</option>
<option>Songwriting and meloody composition</option>
<option>Songwriting/Co-writing, Melody Composition & Singing</option>

</select>


</div>


<div class="col-md-5 subcat-wrap">

<h6>SELCET A SUBCATEGORY</h6>
<!--each subcat form-->

<div class="subcat-in"><!--Subcat select drops here from db-->
<img src="img/18.gif" width="24" />
<input type="hidden" id="sel-subcat" />
</div>

</div>

<div class="col-md-2 genre-select">
<h6>GENRES</h6>
<!--each subcat form-->

<select class="form-control" name="genre">
<option>Jazz</option>
<option>Pop</option>
</select>

</div>

</div>
<div class="alert alert-danger" id="cat-alert" style="font-size:12px; display: none;">
<small>Please select a category and a subcategory</small>
</div>
<div class="row"  style="padding-top: 20px;">

<div class="col-sm-12">

<h6>TAGS</h6>


<input class="form-control" name="tags" id="tags" value="" data-role="tagsinput" style="width: 70%;" />
<small class="form-help">min. three tags separated with commas</small>


</div>
</div>

<div class="row"  style="padding-top: 20px;">

<!--<div class="label-wrap">
<label for="tags">METADATA</label>
</div>


<div class="metadata-inner">

<ul class="nav nav-tabs metadata-nav">
  <li role="presentation" data-role="metadata-content-1" class="active"><a href="#">SERVICES</a></li>
  <li role="presentation" data-role="metadata-content-2"><a href="#">ALSO DELIVERING</a></li>
</ul>
-->
<!--metadata content-->
<!--<div class="metadata-body" id="metadata-content-1">
<div class="col-xs-6">

<h5>What type of service do you provide?</h5>
</div>

<div class="col-xs-6">

<input type="checkbox" value="mixing" />&nbsp;&nbsp;&nbsp; Mixing <br>

<input type="checkbox" />&nbsp;&nbsp;&nbsp; Mastering <br>

<input type="checkbox" />&nbsp;&nbsp;&nbsp; Editing <br>


</div>
</div>-->

<!--metadata content-->
<!--<div class="metadata-body" id="metadata-content-2" style="display: none;">
<div class="col-xs-6">

<h5>What services are included in your basic Gig or Extras?</h5>
</div>

<div class="col-xs-6">

<input type="checkbox" value="mixing" />&nbsp;&nbsp;&nbsp; Analog Gear Processing <br>

<input type="checkbox" />&nbsp;&nbsp;&nbsp; Include Project Files <br>

<input type="checkbox" />&nbsp;&nbsp;&nbsp; Mastering From Stems <br>


</div>
</div>




</div>-->

</div>





<input type="hidden" name="step" value="1" class="cnt-step" /></form>

</div>




<div class="each-step-form step-wrap-2">
<form class="form-horizontal" id="gig-form2">
<div class="page-header">
  <h1>Scope & Pricing</h1>
</div>
<small>Gigs Basic</small>
<table class="table table-bordered">
<tr><td class="active">Price</td><td>$ &nbsp;
<input type="text" placeholder="0" name="basicprice" class="" style="display:inline; width: 50px; padding-right: 0; border: none;" /></td></tr>
<tr><td class="active">Delivery Time</td><td>
<select class="form-control" name="deltime">
  <option value="1">1 Day</option>
  
  <?php
  $dy=2;
  while ($dy<=30){
	  echo '<option value="'.$dy.'">'.$dy.' Days</option>';
	  $dy++;
	  }
  ?>

</select></td></tr>
<tr><td class="active">Included Revisions</td><td>
<select class="form-control" name="revision">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
</select></td></tr>
</table>


<small>Performance Extra</small>

<table class="table table-bordered table-gigextra">
<tr><td><div class="checkbox">
  <label>
    <input type="checkbox" name="xtrafastchk" id="xtrafastchk" value="" class="chc-gig" role-data="gigextra-data-1">
    Extra fast delivery
  </label>
</div></td><td>

<div class="gigextra-option" id="gigextra-data-1" >
    <label for="amt2">For an Extra  $</label>
   
      <input type="text" name="expressprice" class="form-control" id="amt2" placeholder="Amount" autofocus>

<label for="amt2"> and additional</label>
<select class="form-control" id="days2" name="expresstime" placeholder="Amount">
  <option value="1">1 Day</option>
  
    <?php
  $dy=2;
  while ($dy<=30){
	  echo '<option value="'.$dy.'">'.$dy.' Days</option>';
	  $dy++;
	  }
  ?>
</select> 
</div>


  </td></tr>
<tr><td>
<div class="checkbox">
  <label>
    <input type="checkbox" value="" name="addrevchk" id="addrevchk"  class="chc-gig" role-data="gigextra-data-2">
   Additional Revision
  </label>
</div>
</td>
<td>
<div class="gigextra-option" id="gigextra-data-2" >
<label for="amt2">For an Extra  $</label>
  
<input type="text" name="addrevprice" class="form-control" id="amt2" placeholder="Amount" autofocus>

<label for="days3"> and additional</label>
<select class="form-control" name="addrevtime" id="days3" placeholder="Amount">
  <option>1 Day</option>
  <option>2 Days</option>
  <option>3 Days</option>
  <option>4 Days</option>
  <option>5 Days</option>
  <option>6 Days</option>
  <option>7 Days</option>
  <option>8 Days</option>
  <option>9 Days</option>
</select>
</div>
 
</td>
</tr>
<tr><td>

<div class="checkbox">
  <label>
    <input type="checkbox" value="" name="projfilchk" class="chc-gig" role-data="gigextra-data-3">
Project File
  </label>
</div>
</td>
<td>
<div class="gigextra-option" id="gigextra-data-3" >
<label for="amt2">For an Extra  $</label>
   
      <input type="text" name="projfileprice" class="form-control" id="amt2" placeholder="Amount" autofocus>
</div>

</td></tr>

<tr  id="cst-pfm" style=" display: none;">
<td colspan="2">

<label for=""><input type="checkbox" name="addpefchk" />&nbsp;&nbsp;&nbsp;&nbsp;</label>

<label for="">Title</label>
   
      <input type="text" name="extratitile" class="form-control" id="" placeholder="Performance Title" style=" width: 50%; display: block;">

<label for="">Descrption</label>
   
      <input type="text" name="extradesc" class="form-control" id="amt2" placeholder="Describe your extra performance" style=" width: 90%;display: block;">  
  <br>

    
<label for="">For an Extra  $</label>
   
      <input type="text" name="extraprice" class="form-control" id="" placeholder="Amount" autofocus>

<label for=""> and additional</label>
<select class="form-control" name="extratime" id="" >
  <option>1 Day</option>
    <?php
  $dy=2;
  while ($dy<=30){
	  echo '<option value="'.$dy.'">'.$dy.' Days</option>';
	  $dy++;
	  }
  ?>
</select>
         
</td>
</tr>
<tr>
<td colspan="2" style="text-align: center" id="add-xtra">
 <span class="glyphicon glyphicon-plus"></span> Add Extra Performance
</td>
</tr>
 
</table>

<input type="hidden" name="step" value="2" class="cnt-step" /></form>
</div>

<div class="each-step-form step-wrap-3">

<form class="form-horizontal" id="gig-form3">
<div class="label-wrap" style="width: 30%; margin-left: 5%; text-align:left;">
<label for="">Clearly describe your service</label>
</div>
<h5></h5>

<div class="dsc-texarea-wrap">

<textarea class="form-control txt-dsc" name="gigdesc" rows="6" id="dsc" ></textarea>

<small class="pull-left">120 characters minimum</small>
<small class="pull-right" style="margin-right: 5%;">100 / 1200</small>
</div>
<input type="hidden" name="step" value="3" class="cnt-step" />
</form>
</div>

<div class="each-step-form step-wrap-4">

<form class="form-horizontal" id="gig-form4">
<div class="page-header">
<h1>What did you require?</h1>
</div>


<div class="label-wrap" style="width: 70%; margin-left: 5%; text-align:left;">
<label for="">Please describe needed input</label>
</div>


<textarea class="form-control txt-dsc" name="requir" rows="6" id="" style=" border-radius:3px 3px 0 0;"></textarea>
<div class="textarea-menu" style=" border-radius: 0 0 3px 3px; padding: 8px 0px;">


<label for="" style="font-size:12px; font-weight: 300; margin-left: 5%">File format to be submitted</label>

<select class="form-control" name="requiredfile" style="width: 80px;">
<option>.txt</option>
<option>.wav</option>
<option>.mp3</option>
</select>

</div>
<input type="hidden" name="step" value="4" class="cnt-step" />
</form>
</div>







<div class="each-step-form step-wrap-5">
<div class="page-header">
<h1>Performance Pictures and Samples</h1>
</div>


<div class="row pics-row">
<div class="col-sm-4">
<form class="subgigpix" id="pic-form-1" action="actions/post-gigpix.php" method="POST" enctype="multipart/form-data" runat="server">
<label>
<div class="upload-ok"><span class="glyphicon glyphicon-ok"></span></div>
<div class="upload-er"><span class="glyphicon glyphicon-info-sign"></span></div>
<div class="pic-frame" role="ppix1" id="p-px1">
<span class="glyphicon glyphicon-picture"></span><br>

Click to Upload
</div>
<input type="file" name="ppix1" class="p-px" data-role="ppix1" />
<div class="er-message">error message</div>
</label>
<input type="hidden" value="" name="pics2post" id="ppix1"  />
<input type="submit" id="smt-ppix1" />
</form>
</div>


<div class="col-sm-4">
<form class="subgigpix" id="pic-form-2" action="actions/post-gigpix.php" method="POST" enctype="multipart/form-data" runat="server">
<label>
<div class="upload-ok"><span class="glyphicon glyphicon-ok"></span></div>
<div class="upload-er"><span class="glyphicon glyphicon-info-sign"></span></div>
<div class="pic-frame" role="ppix2">
<span class="glyphicon glyphicon-picture"></span>
<br>

Click to Upload</div>
<input type="file" name="ppix2" class="p-px" data-role="ppix2" />
<div class="er-message">error message</div>
</label>
<input type="hidden" value="" name="pics2post" id="ppix2"  />
<input type="submit" id="smt-ppix2" />
</form>
</div>

<div class="col-sm-4">
<form class="subgigpix" id="pic-form-3" action="actions/post-gigpix.php" method="POST" enctype="multipart/form-data" runat="server">
<label>
<div class="upload-ok"><span class="glyphicon glyphicon-ok"></span></div>
<div class="upload-er"><span class="glyphicon glyphicon-info-sign"></span></div>
<div class="pic-frame" role="ppix3"><span class="glyphicon glyphicon-picture"></span>
<br>

Click to Upload</div>
<input type="file" name="ppix3" class="p-px" data-role="ppix3" />
<div class="er-message">error message</div>
</label>
<input type="hidden" value="" name="pics2post" id="ppix3"  />
<input type="submit" id="smt-ppix3" />
</form>

</div>
</div>


<hr>
<!--<form class="form-horizontal" id="gig-form5">-->
<h4>Performance Links</h4>
<small>Seperate multiple links with space (5 links maximum each)</small>
<br>
<br>
<!--<input type="hidden" name="ytubelink" linkrole="Youtube" />
<input type="hidden" name="vimeolink" linkrole="Vimeo" />
<input type="hidden" name="soundcloudlink" linkrole="Soundcloud" />
<input type="hidden" name="beatportlink" linkrole="Beatport" />
<input type="hidden" name="ituneslink" linkrole="Itunes" />
<input type="hidden" name="otherlink" linkrole="Other" />
<input type="hidden" name="step" value="5" class="cnt-step" />
</form>-->
<div class="row">
<!--<div class="col-md-3">

<label>Video Host</label>
<select class="form-control" id="lnk-plat">
<option>Youtube</option>
<option>Vimeo</option>
<option>Soundcloud</option>
<option>Beatport</option>
<option>Itunes</option>
<option>Other</option>
</select>
</div>-->
<div class="col-md-12">
eg: https://www.youtube.com/watch?v=HkRRnH1vRGY
<br>
<input type="url" id="vidurl" class="form-control" style="width: 70%;"/>
<!--<span class="glyphicon glyphicon-remove-circle" id="lnk-error"></span>
 <span class="glyphicon glyphicon-ok-circle" id="lnk-ok"></span>-->
<button class="btn btn-success" style="background-color: #5cb85c;" id="add-link">Add</button>
<button class="btn btn-danger" id="btn-clr">clear</button>
</div>
</div>


<form class="form-horizontal" id="gig-form5" method="post">
<div class="row link-row">

</div>
<input type="hidden" name="step" value="5" class="cnt-step" />
</form>

<!--<div class="row link-row">
<div class="col-md-6">
<strong>Youtube Link</strong>
<hr>

<ul class="vidlink-list Youtubelinks-wrap">

</ul>

</div>


<div class="col-md-6">
<strong>Vimeo Link</strong>
<hr>
<ul class="vidlink-list Vimeolinks-wrap">

</ul>

</div>
</div>

<div class="row link-row">
<div class="col-md-6">
<strong>Soundcloud Link</strong>
<hr>
<ul class="vidlink-list Soundcloudlinks-wrap">

</ul>
</div>

<div class="col-md-6">
<strong>BeatPort Link</strong>
<hr>
<ul class="vidlink-list Beatportlinks-wrap">

</ul>
</div>
</div>

<div class="row link-row">
<div class="col-md-6">
<strong>Itunes Link</strong>
<hr>
<ul class="vidlink-list Ituneslinks-wrap">

</ul>
</div>

<div class="col-md-6">
<strong>Other Link</strong>
<hr>
<ul class="vidlink-list Otherlinks-wrap">

</ul>
</div>

</div>-->

<form class="form-horizontal" id="gig-form6">
<input type="hidden" name="step" value="6" class="cnt-step" />
</form>
</div>



<div class="each-step-form step-wrap-6 text-center">

<h1 style="color: #932b76;">Almost there...</h1>
<p>Let's publish your Gig. You might also want to preview it<br>
<a href="<? echo($uinfo['username']); ?>/<? echo($_SESSION['giglink']); ?>">Preview</a>
<br>
<br>
<br>

</p>
</div>






<div class="text-center row form-footer">

<!--<a class="btn btn-default fs" id="" style="display: none;" >PUBLISH</a>-->

<a class="btn btn-default 1-pagenate" id="btn-prev" val="<? echo($step); ?>">PREVIOUS</a>
<a class="btn btn-default 1-pagenate" id="btn-nxt" val="<? echo($step); ?>">NEXT</a>

</div>

</div>
<div class="col-md-4"></div>



</div>

<link rel="stylesheet" href="css/create-gig.css" />
