<?php
if(isset($_SESSION['message'])):
?>
   <div class="alert" role="alert">
  <strong>Registered Successgfully!!!<Successgfullyong> <? =$_SESSION['message'];?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
unset($_SESSION['message']);
endif;
?>
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<style>
		.alert{
			color:orange;
		}
	</style>
</head>
<body>

</body>
</html>