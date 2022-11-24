// JavaScript Document
$(document).ready(function() {
	
	
function getcat (cat) {
			$.ajax({
				type: "GET",
				url: "actions/gig-subcat.php?cat="+cat+"",
				async: true,
				success : function(response){
				
if (response){
		$('.subcat-in').html('');
		$(".subcat-in").html(response);
				}
},
error:function (xhr, ajaxOptions, thrownError){
               	$('.not1').html('<div id="Nett_not"><span>Check your network Connection</span></div>');  
            }
			
			});
        };

$(document).on('change','#cat',function(){
$('#cat-fakeplace').remove();		
var cid = $(this).val();	
getcat (cid);
	});




/*this is called to create the gig*/
function insertgig(idval){
$(".form-err").hide(300);
 $.post("actions/postgig.php",
 $("#gig-form"+idval).serializeArray(),
    function (data) 
    {
		if(data.match(/ERROR/)){
//$("#error-drop").html(data);
$(".form-err").html(data).show(300);
				}
				else{

$('html, body').animate({scrollTop: '0px'}, 300);
/*if progress saved go to next step*/
var idval = parseInt($("#btn-nxt").attr('val'));
 var sval = parseInt(idval)+1;
$("#btn-prev,#btn-nxt").attr('val',idval+1);
$(".each-step-form").hide(100);
$(".step-wrap-"+sval).show(100);
stepmarker(sval);
}

        

    });

	   
	
}






 $(document).on("click",".1-pagenate",function(e){
e.preventDefault();
   var idval = parseInt($(this).attr('val'));
   var btnid = $(this).attr('id');
  

		 
    if (idval>1 & btnid=="btn-prev"){
	   var sval = parseInt(idval)-1;
	   $("#btn-prev,#btn-nxt").attr('val',idval-1);
	   //$(".cnt-step").attr('value',idval-1);
	    $(".each-step-form").hide(100);
	   $(".step-wrap-"+sval).show(100);
	   stepmarker(sval);
	}
	  else if(btnid=="btn-nxt" & idval<=6){
		   var sval = parseInt(idval)+1;

//$("button#loading").show();
insertgig(idval);

//stepmarker(sval);	   
		   }
else{}
 
 //  if (idval<6){
 if (idval>=5 & btnid=="btn-nxt"){
	 $("#btn-nxt").text('PUBLISH');
	 $("#btn-prev").remove();
	 $('.alert.upload-success').hide(300);
	// $(".1-pagenate").hide();
	 } else{
		// $(".fs").hide();
		$("#btn-nxt").text('NEXT');
	 //$(".1-pagenate").show();
}		 
//	}else{}

    });




tinymce.init({
  selector: '#dsc',
  height: 250,
  plugins: [
    'advlist autolink lists link charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code'
  ],
  toolbar: 'insertfile undo redo | bold italic underline| bullist numlist ',
  menubar: false,
     setup: function (editor) {
        editor.on('change', function () {
            tinymce.triggerSave();
        });
    }
  //content_css: '//www.tinymce.com/css/codepen.min.css             this is a custom css to overide tinymice default'
});



////on submit of each performance picture
$(".subgigpix").submit(function(evt){
evt.preventDefault();
var formid = $(this).attr('id');
var formData = new FormData(this);
var ok = $(this).find('div.upload-ok');
var er = $(this).find('div.upload-er span.glyphicon');
var em = $(this).find('div.er-message');
var cont = $(this).find('div.pic-frame');
$.ajax(
{
processData: false,
contentType: false,
type:$(this).attr("method"),
url: $(this).attr("action"),
data:formData,
success: function(response) {
if(response.match(/uploaded::/)){
ok.css('display','block');
er.css('display','none');
em.css('display','none');
$('.pic-frame img').remove();
$('#'+formid)[0].reset();
}

else{
//alert(response);
ok.css('display','none');
em.html(response);
em.css('display','block');
er.css('display','block');
cont.html('<span class="glyphicon glyphicon-picture"></span><br>Click to Upload');
cont.css('background', '');
$('#'+formid)[0].reset();
}
},
error: function(jqXHR, textStatus, errorThrown) 
{
alert(errorThrown);    
}
});    
});
		
//performance picture on change
$(document).on('change',".p-px", function(e){
//e.preventDefault();
var ok = $(this).parent('label').find('div.upload-ok');
var er = $(this).parent('label').find('div.upload-er span.glyphicon');
var em = $(this).parent('label').find('div.er-message');
ok.css('display','none');
er.css('display','none');
em.css('display','none');
readURL(this);
var sub2click =$(this).attr("name");
var gig2post=$(this).attr("data-role");
$("#"+gig2post).val(gig2post);
$("#smt-"+sub2click).trigger('click');
});



///when the Add link button is clicked
$(document).on('click', "#add-link", function(e){
e.preventDefault();


var vidurl=$("#vidurl").val();
if(vidurl){
$('.link-row').append('<div class="col-md-6"><input type="hidden" name="link[]" value="'+vidurl+'" /><a href="'+vidurl+'" target="_blank">'+vidurl+'</a></div>');
$("#vidurl").val('');	//reset the filled
}
});

/*///when the Add link button is clicked
$(document).on('click', "#add-link", function(e){
e.preventDefault();


var plat=$("#lnk-plat").val();
var vidurl=$("#vidurl").val();

var thisval =$('[linkrole="'+plat+'"]').val();


if (thisval==""){
$('[linkrole="'+plat+'"]').val(vidurl);
	}
else{$('[linkrole="'+plat+'"]').val(thisval+','+vidurl);}


var newval =$('[linkrole="'+plat+'"]').val();
var splited=newval.split(',');
$("."+plat+"links-wrap").html('')
$.each(splited,function(i){
	$("."+plat+"links-wrap").prepend('<li>'+splited[i]+'</li>');
	});

$("#vidurl").val('');	//reset the filled
});*/



////when the clear button is clicked
$(document).on('click', "#btn-clr", function(e){
e.preventDefault();
var plat=$("#lnk-plat").val();
$('[linkrole="'+plat+'"]').val('');
$("."+plat+"links-wrap").html('');
});

});