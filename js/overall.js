$(document).ready(function(e) {
    
/*  $('#scrolllink a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);
        try{
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 600, 'swing');
        }
        catch(err){
        }

    });*/
	$('.add-new').click(function(e) {

   var id = $(this).attr('id');
   var fid = id.split('-');
   var splited = fid[2];
   $('.f-wrap').slideUp(300); 
   $('#f-wrap-'+splited).slideDown(300);
});

$('.cnc').click(function(e) {

   $('.f-wrap').slideUp(300); 
return false
});
	  $(document).on("click",".btn-joinsub",function(){
		  
       var id = $(this).attr('id');
        if ((id=='sub-1' || id=='sub-2')){
           
			var splitId = id.split('-');
            var splited = splitId[1];
            $('.steps').hide();
			var nxt = parseInt(splited)+1;
            $('.step-'+nxt).show();
        }
		else{}
    });

 $(document).on("click",".prof-nav li",function(e){
e.preventDefault();
var mid = $(this).attr('mid');

$('.prof-cont').hide();
$('.'+mid).show();
$('.prof-nav li').removeClass('active');	 
$(this).addClass('active');
});
	});
	
	
	$('#nav-to').click(function(){
	$('#m-pointer').css('left', '-190px');
	$('.not-wrap,.todo-wrap').toggle();
		});
		$('#nav-not').click(function(){
			$('#m-pointer').css('left', '-85px');
		$('.not-wrap,.todo-wrap').toggle();
		});
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
   $('[data-toggle="popover"]').popover()
})
$('.inmenu-toggle').click(function() {
	var meid = $(this).attr('menuid');
$('[aria-labelledby="'+meid+'"]').slideToggle(300);	
return false
});

$('.cat-sel').click(function() {
	return false
	});
	
	
	
function stepmarker(n) {
	$('#mob-stepcount').text(n)
	if(n<=6){
	var i = 0;
	$(".each-step").addClass('inactive-step');
	while (i<n){
		i++;
		
		$("#mark-"+i).removeClass('inactive-step');
		}
		
			}		
}

 $(document).on("click",".metadata-nav li",function(e){
e.preventDefault();	
var role = $(this).attr('data-role');
$(".metadata-nav li").removeClass('active');
$(this).addClass('active');

$('.metadata-body').hide();
$('#'+role).show();
   
 });
 

  $(document).on("click",".chc-gig",function(e){
//e.preventDefault();
var role = $(this).attr('role-data');

$('#'+role).toggle();
 
 
  });
    $(document).on("click","#add-xtra ",function(e){
$('#cst-pfm').show(300);
$(this).hide();
  });
  
  
  
  
  
/*$(document).on("click",".pic-frame",function(e){
 var frid = $(this).attr('role');
 // $('[data-role="'+frid+'"]').trigger('click');     the file input trigger
  });
*/


 function readURL(input) {
	  var inp = $(input).attr("data-role");
        if (input.files && input.files[0]) {
            var reader = new FileReader();
			
            reader.onload = function (e) {
				$('[role="'+inp+'"]').html('<img src="img/18.gif" style="margin-top: 40px;" />');
				$('[role="'+inp+'"]').css('background', 'url('+e.target.result +') center center no-repeat');
				$('[role="'+inp+'"]').css('background-size', 'cover');
				
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
/*order page*/

	/*var clock = $('.timer').FlipClock(3600 * 24 * 3, {
		clockFace: 'DailyCounter',
		countdown: true
	});*/
/*messgae body*/	
$('#msg-body').focus(
    function(){
        $(this).parent('div').css({'border':'1px solid #e22f4b',
			'box-shadow':'inset 0 1px 1px rgba(233,102,134,0.60)'});
    }).blur(
    function(){
        $(this).parent('div').css({'border':'1px solid #e3e3e3','box-shadow':'none'});
    });	

$(document).on('click','.btn-bid',function(){
	$('#modal-bid').modal('show');
	});
	$(document).on('click','.gig-inlist',function(){
		//$(this+'.gig-selector');
			});
			
			
			
			
			
/*viegigg js	*/		
			
$(document).on('click','.sort-label',function(){
$(".sort-label").removeClass("sort-hover");
$(this).addClass("sort-hover");
	
	});
