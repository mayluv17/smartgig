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


<div class="container form-container">

<div class="col-md-8 form-area">

<form class="form-horizontal">





<div class="each-step-form step-wrap-1" style="">
<div class="label-wrap">
<label for="tt">PERFORMANCE TITLE</label>
</div>

<textarea id="tt" class="form-control" placeholder="I will do real good stuff to your music" rows="2" maxlength="80" style="*text-indent: 20px; font-size: 40px; max-width: 70%;"></textarea>


<div class="row form-row">

<input  type="hidden" id="gigcat" />

<div class="col-sm-6">




<div class="" style="padding-left: 10%;">


<h6>CATEGORY</h6>


<select class="form-control" style="width: 80%">
<option>SELECT A CATEGORY</option>
<option>Singing</option>
<option>Songwriting</option>
<option>Producing</option>
<option>Mixing</option>
<option>Mastering</option>
</select>

</div>
</div>


<div class="col-sm-6 subcat-wrap">

<h6>SELCET A SUBCATEGORY</h6>
<!--each subcat form-->

<select class="form-control">
<option>Melody Composition</option>
<option>Melody Composition and Singing</option>
</select>


<!--each subcat form-->
<!--<select class="form-control">
<option>Multiple track Mixing</option>
<option>Melody Composition and Singing</option>
</select>

<!--each subcat form-->
<!--<select class="form-control">
<option>Multiple track Mastering</option>
</select>

<!--each subcat form-->
<!--<select class="form-control">
<option>Music Composition & Sound Production</option>
</select>

<!--each subcat form-->
<!--<select class="form-control">
<option>Co-writing</option>
<option>Songwriting & Melody Composition</option>
<option>Songwriting/Co-writing, Melody Composition & Singing</option>
</select>-->




</div>



</div>
<div class="row"  style="padding-top: 20px;">

<div class="col-sm-12">
<div class="label-wrap">
<label for="tags">TAGS</label>
</div>

<input class="form-control" name="tags" id="tags" value="" data-role="tagsinput" style="width: 70%;" />
<small class="form-help">min. three tags separated with commas</small>


</div>
</div>

<div class="row"  style="padding-top: 20px;">

<div class="label-wrap">
<label for="tags">METADATA</label>
</div>


<div class="metadata-inner">

<ul class="nav nav-tabs metadata-nav">
  <li role="presentation" data-role="metadata-content-1" class="active"><a href="#">SERVICES</a></li>
  <li role="presentation" data-role="metadata-content-2"><a href="#">ALSO DELIVERING</a></li>
</ul>

<!--metadata content-->
<div class="metadata-body" id="metadata-content-1">
<div class="col-xs-6">

<h5>What type of service do you provide?</h5>
</div>

<div class="col-xs-6">

<input type="checkbox" value="mixing" />&nbsp;&nbsp;&nbsp; Mixing <br>

<input type="checkbox" />&nbsp;&nbsp;&nbsp; Mastering <br>

<input type="checkbox" />&nbsp;&nbsp;&nbsp; Editing <br>


</div>
</div>

<!--metadata content-->
<div class="metadata-body" id="metadata-content-2" style="display: none;">
<div class="col-xs-6">

<h5>What services are included in your basic Gig or Extras?</h5>
</div>

<div class="col-xs-6">

<input type="checkbox" value="mixing" />&nbsp;&nbsp;&nbsp; Analog Gear Processing <br>

<input type="checkbox" />&nbsp;&nbsp;&nbsp; Include Project Files <br>

<input type="checkbox" />&nbsp;&nbsp;&nbsp; Mastering From Stems <br>


</div>
</div>




</div>

</div>







</div>




<div class="each-step-form step-wrap-2" style="display: none;">

<div class="page-header">
  <h1>Scope & Pricing</h1>
</div>
<small>Gigs Basic</small>
<table class="table table-bordered">
<tr><td class="active">Price</td><td>$5</td></tr>
<tr><td class="active">Delivery Time</td><td>
<select class="form-control">
  <option>1 Day</option>
  <option>2 Days</option>
  <option>3 Days</option>
  <option>4 Days</option>
  <option>5 Days</option>
  <option>6 Days</option>
  <option>7 Days</option>
  <option>8 Days</option>
  <option>9 Days</option>
</select></td></tr>
<tr><td class="active">Included Revisions</td><td>
<select class="form-control">
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
    <input type="checkbox" value="" class="chc-gig" role-data="gigextra-data-1">
    Extra fast delivery
  </label>
</div></td><td>

<div class="gigextra-option" id="gigextra-data-1" >
    <label for="amt2">For an Extra  $</label>
   
      <input type="text" class="form-control" id="amt2" placeholder="Amount" autofocus>

<label for="amt2"> and additional</label>
<select class="form-control" id="days2" placeholder="Amount">
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


  </td></tr>
<tr><td>
<div class="checkbox">
  <label>
    <input type="checkbox" value=""  class="chc-gig" role-data="gigextra-data-2">
   Additional Revision
  </label>
</div>
</td>
<td>
<div class="gigextra-option" id="gigextra-data-2" >
<label for="amt2">For an Extra  $</label>
  
<input type="text" class="form-control" id="amt2" placeholder="Amount" autofocus>

<label for="days3"> and additional</label>
<select class="form-control" id="days3" placeholder="Amount">
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
    <input type="checkbox" value="" class="chc-gig" role-data="gigextra-data-3">
Project File
  </label>
</div>
</td>
<td>
<div class="gigextra-option" id="gigextra-data-3" >
<label for="amt2">For an Extra  $</label>
   
      <input type="text" class="form-control" id="amt2" placeholder="Amount" autofocus>
</div>

</td></tr>

<tr  id="cst-pfm" style=" display: none;">
<td colspan="2">

<label for=""><input type="checkbox" />&nbsp;&nbsp;&nbsp;&nbsp;</label>

<label for="">Title</label>
   
      <input type="text" class="form-control" id="" placeholder="Performance Title" style=" width: 50%; display: block;">

<label for="">Descrption</label>
   
      <input type="text" class="form-control" id="amt2" placeholder="Describe your extra performance" style=" width: 90%;display: block;">  
  <br>

    
<label for="">For an Extra  $</label>
   
      <input type="text" class="form-control" id="" placeholder="Amount" autofocus>

<label for=""> and additional</label>
<select class="form-control" id="" placeholder="Amount">
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
          
</td>
</tr>
<tr>
<td colspan="2" style="text-align: center" id="add-xtra">
 <span class="glyphicon glyphicon-plus"></span> Add Extra Performance
</td>
</tr>

</table>


</div>

<div class="each-step-form step-wrap-3" style="display: none;">

<div class="label-wrap" style="width: 30%; margin-left: 5%; text-align:left;">
<label for="">Clearly describe your services</label>
</div>
<h5></h5>

<div class="dsc-texarea-wrap">
<div class="textarea-menu" style="">
<ul>
<li><span class="glyphicon glyphicon-bold"></span></li>
<li><span class="glyphicon glyphicon-text-background"></span></li>
<li><span class="glyphicon glyphicon-italic"></span></li>
<li><span class="glyphicon glyphicon-list"></span></li>
</ul>
</div>

<textarea class="form-control txt-dsc" rows="6" id="dsc" style=""></textarea>

<small class="pull-left">120 characters minimum</small>
<small class="pull-right" style="margin-right: 5%;">100 / 1200</small>
</div>
</div>

<div class="each-step-form step-wrap-4" style="display: none;">
<div class="page-header">
<h1>What did you require?</h1>
</div>


<div class="label-wrap" style="width: 70%; margin-left: 5%; text-align:left;">
<label for="">Tell your buyer what you need to make thier music amazing</label>
</div>


<textarea class="form-control txt-dsc" rows="6" id="" style=" border-radius:3px 3px 0 0;"></textarea>
<div class="textarea-menu" style=" border-radius: 0 0 3px 3px; padding: 8px 0px;">


<label for="" style="font-size:12px; font-weight: 300; margin-left: 5%">File format to be submitted</label>
<select class="form-control" style="width: 80px;">
<option>.txt</option>
<option>.wav</option>
<option>.mp3</option>
</select>
</div>
</div>

<div class="each-step-form step-wrap-5" style="display: none;">
<div class="page-header">
<h1>Performance Pictures</h1>
</div>

<input type="file" class="p-px" data-role="p-px1" style="display: none; " />
<input type="file" class="p-px" data-role="p-px2" style="display: none; "/>
<input type="file" class="p-px" data-role="p-px3" style="display: none; "/>

<div class="row pics-row">
<div class="col-sm-4">
<div class="pic-frame" role="p-px1" id="p-px1">
<span class="glyphicon glyphicon-picture"></span><br>

Click to Upload
</div>
</div>
<div class="col-sm-4">
<div class="pic-frame" role="p-px2"><span class="glyphicon glyphicon-picture"></span>
<br>

Click to Upload</div>
</div>

<div class="col-sm-4">
<div class="pic-frame" role="p-px3"><span class="glyphicon glyphicon-picture"></span>
<br>

Click to Upload</div>
</div>
</div>

</div>



<div class="each-step-form step-wrap-6 text-center" style="display: none;">

<h1 style="color: #932b76;">Almost there...</h1>
<p>Let's publish your Gig and get 
some buyers rolling in<br>
<br>
<br>
<br>

</p>
</div>
</form>

<div class="text-center row form-footer">

<!--<a class="btn btn-default fs" id="" style="display: none;" >PUBLISH</a>-->

<a class="btn btn-default 1-pagenate" id="btn-prev" val="0">PREVIOUS</a>
<a class="btn btn-default 1-pagenate" id="btn-nxt" val="1">NEXT</a>

</div>

</div>
<div class="col-md-4"></div>



</div>

<link rel="stylesheet" href="css/create-gig.css" />
