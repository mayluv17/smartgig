<?php
include "config.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/cartgig.css" />
<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
<title>SmartGig</title>
</head>

<body>
<?php
include "includes/top-nav.php";
?>

<div class="container giginfo">

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-8">



<div class="well well-lg " style="min-height: 400px;">
<form>

<div class="col-sm-4 form-group-wrap">
<div class="form-group">
    <label for="sl-genres">Song Genres</label>
    <select id="sl-genres" class="form-control">
    <option>Rock</option>
     <option>Pop</option>
     <option>Hip Hop</option>
     <option>Electro</option>
     <option>Reggae</option>
     <option>Others</option>
    </select>
  </div>
</div>
<div class="col-sm-4 form-group-wrap">
<div class="form-group">
    <label for="sl-gender">Gender</label>
    <select id="sl-gender" class="form-control">
    <option>Male</option>
     <option>Female</option>
    </select>
  </div>
</div>
<div class="col-sm-4 form-group-wrap">
<!--  female voice selector-->
 <div class="form-group sl-fm-voice">
    <label for="sl-fm-voice">Voice Type</label>
    <select id="sl-fm-voice" class="form-control">
    <option>Soprano</option>
     <option>Mezzo</option>
     <option>Contralto</option>
    </select>
  </div>
<!--  male voice selector-->
   <div class="form-group sl-ml-voice" style="display:none">
    <label for="sl-ml-voice">Voice Type</label>
    <select id="sl-ml-voice" class="form-control">
    <option>Countertenor</option>
     <option>Tenor</option>
     <option>Baritone</option>
     <option>Bass</option>
    </select>
  </div> 
  
</div>

<div class="col-md-12 form-group-wrap text-center" style="border-top: 2px dashed #CFCFCF; border-bottom: 2px dashed #CFCFCF; padding-top: 10px; padding-bottom: 10px;">
<h5>What do you provide?</h5>

<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" class="music-radio" value="option-1"> Lyrics
</label>
<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" class="music-radio" value="option-2" checked="checked"> Melody
</label>
<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" class="music-radio" value="option-3"> Vocals
</label>
<br />

<div class="up-wrap1" style="display:none;">
<button class="btn btn-default btn-lg btn-upload" id="btn-upload-1"><span class="glyphicon glyphicon-file" aria-hidden="true" ></span> Upload Lyrics</button>
<span id="helpBlock" class="help-block">Maximum upload size is 100Mb (.txt format only)</span>
</div>

<div class="up-wrap2">
<button class="btn btn-default btn-lg btn-upload" id="btn-upload-2"><span class="glyphicon glyphicon-music" aria-hidden="true" ></span> Upload Melody</button>
<span id="helpBlock" class="help-block">Maximum upload size is 100Mb (.mp3 only)</span>
</div>

<div class="up-wrap3" style="display:none;">
<button class="btn btn-default btn-lg btn-upload" id="btn-upload-3"><span class="glyphicon glyphicon-cd" aria-hidden="true" ></span> Upload Vocals</button>
<span id="helpBlock" class="help-block">Maximum upload size is 100Mb (.mp3 .wav only)</span>
</div>

<input type="file" class="orderfile" id="orderfile1" style="display: none;">
<input type="file" class="orderfile" id="orderfile2" style="display: none;">
<input type="file" class="orderfile" id="orderfile3" style="display: none;">
</div>

<div class="row">
<div class="col-sm-4 form-group-wrap">
<div class="form-group">
    <label for="sl-lang">Song Language</label>
    <select id="sl-lang" class="form-control">
    <option>English</option>
     <option>Spanish</option>
    </select>
  </div>
</div>

<div class="col-sm-8 form-group-wrap">
<div class="form-group">
    <label for="instruction">Other Instruction</label>
    <textarea id="instruction" class="form-control" rows="5"></textarea>
  </div>
</div>
</div>

</form>


</div>






</div>
<div class="col-md-3">
<div class="well well-sm checkout-lg text-center">

<h3>$52</h3>
<a class="btn btn-lg btn-default"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Order Now</a>
</div>
</div>
</div>


</div>

<?php
include "includes/footer.php";
?>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
//$(document).ready(function()({
 
$("#sl-gender").change(function(){ 
var val = $(this).val();
if (val=='female') {
$(".sl-fm-voice").show();
$(".sl-ml-voice").hide();
	}
else {
$(".sl-fm-voice").hide();
$(".sl-ml-voice").show();
	}

});

$(".music-radio").change(function(){ 

var val = $(this).val();
var valu = val.split("-");

var valu = valu[1];
$('.up-wrap1,.up-wrap2,.up-wrap3').hide();
$('.up-wrap'+valu).show();
});

$(".btn-upload").click(function(){

var id = $(this).attr('id');
var valu = id.split("-");
var valu = valu[2];

$('#orderfile'+valu).trigger('click');
return false;
});

$('.orderfile').change(function(){ 

var ext = $(this).val().split('.').pop().toLowerCase();
var id = $(this).attr('id');

if(id=='orderfile1'){
if($.inArray(ext, ['txt']) == -1) {
    alert('invalid Lyrics extension!');
}
}

if(id=='orderfile2'){
if($.inArray(ext, ['mp3']) == -1) {
    alert('invalid Melody extension!');
}
}

if(id=='orderfile3'){
	if($.inArray(ext, ['mp3','wav']) == -1) {
    alert('invalid Vocal extension!');
}
}

});

$('.orderfile').on('change', function() {
 var fsize = (this.files[0].size)/(1024*1024);
if (fsize>100){
	alert ('Selected is more than 100MB');
	}

});

//});
</script>
</body>
</html>