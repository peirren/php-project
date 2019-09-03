include();

HOME
ABOUT
Contact Us
Article

$_GET[''] variable
href="index.php?page=About"






   
   <?php 
	   	if($_GET['page'])
	   	{
	   		$page= $_GET['page'];
	   		$display=$page. '.php';
	   		include ($display);
	   	}	
	   	else
	   	{
	   		echo 'HELLO!';
	   	};
   ?> 

	</div>

	