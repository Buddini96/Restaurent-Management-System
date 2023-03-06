function toggle_class() {
		
	$(".responive_nav").toggleClass("nav_open");
	
}

function remove_class() {
	
	$(".responive_nav").removeClass("nav_open");
	
}

function verify_choice() {
	
	return confirm("Are you sure you want to remove this item from the cart?");
	
}

function show_overlay() {
	
	$("#overlay").fadeIn("slow");
	$(".info_holder").fadeIn("slow");
	
}

function hide_overlay() {
	
	$("#overlay").fadeOut("slow");
	$(".info_holder").fadeOut("slow");
	
}

function validate_input() {
	
	$.ajax({
		url: 'process_order.php',
		type: 'post',
		data: {order_info: 'info'},
		success: function(data) {
			
			if(data == 'success') {
				
				alert("Yayayay");
				
			}else if(data == 'home'){
				
				window.location = "index.php";
				
			}
			
		}
	});
	
}
