<?php 

	for ($i=0; $i < 1000; $i++) { 
		echo htmlspecialchars($text = "<script> alert('anda dihack!!!'); </script>", ENT_QUOTES);
	}

 ?>














 <!-- // echo htmlspecialchars($text, ENT_QUOTES); -->