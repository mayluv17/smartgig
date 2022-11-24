// JavaScript Document
$(document).ready(function(e) {
	if($('#order-val').length){
		var holder = $('#order-val');
		var val = holder.val();
		holder.val('1');
		$('#plus-btn').click(function(e) {
			val++;
			holder.val(val);
		});
		
		$('#minus-btn').click(function(e) {
			val--;
			if(val > 0){
				holder.val(val);
			}
		});
	}
});