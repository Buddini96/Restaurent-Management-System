<?php 
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		if(isset($_POST['order_info'])) {
			
			$order_info = $_POST['order_info'];
			
			if($order_info == "info") {
				
				echo "success";
				
			}else{
				
				echo "home";
				
			}
			
		}
		
	}
	
?>