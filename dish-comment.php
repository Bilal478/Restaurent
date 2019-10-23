<?php require_once ("include/controllers/CommentController.php"); ?>
<?php
 session_start();
if(!isset($_SESSION['name']))
{
	header("Location:login.php");
}

if(!isset($_GET['dis_id']))
{
	$_GET['dis_id'] = $_SESSION['dis_id'];
	 $_GET['name'] = $_SESSION['name'];
	 $_GET['res_id'] = $_SESSION['res_id'];
}
$_SESSION['name'] = $_GET['name'];
$_SESSION['res_id'] = $_GET['res_id'];
$_SESSION['dis_id'] = $_GET['dis_id'];
$commentController->search_id = $_SESSION['dis_id']; 	
$comment = $commentController->by_join();
?>
<!DOCTYPE html>
<html>
<head>
	
	
	
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
	
</head>
	<?php include('user-header.php'); ?>
	<body >
	<div class="text-center" style="margin-top: 10%">
	<div class="product-box">
		<div style="background: #EBF3F6">
<div style="background: #FFFFFF; float:right; margin-right: 15%;margin-top: 2%; width:25%;height: 50%;;border-radius: 25px;border: 2px solid #E6E6F2;overflow:auto;">
	<h2 style="text-align: center;padding: 2%"><b>Detail</b></h2>
<h6 style="text-align: left;padding-left: 2%"><b>Restaurent Name: </b></h6><P id="res_name">hh</P>
<h6 style="text-align: left;padding-left: 2%"><b>Dish Name: </b></h6><P id="dis_name">EPIC</P>
<h6 style="text-align: left;padding-left: 2%"><b>Price: </b></h6><P id="dis_price">EPIC</P>
<h6 style="text-align: left;padding-left: 2%"><b>Address: </b></h6><P id="res_address">EPIC</P>
<h6 style="text-align: left;padding-left: 2%"><b>Discription: </b></h6><P id="dis_desc">With jalopino</P>

</div>
			<img src="vendors/images/dish/<?php echo $_GET['name'] ?>" alt="vendors/images/dish/grill.jpg"
			>
		</div>
	</div>
	<form action="include/controllers/CommentController.php" method="post">
           <div class="form-group">
 
   <textarea  style="border-radius: 10px;border-color:#515165;border-width: 2px;padding:5px;margin-top:15px;width: 70% " rows="2"  name="comment" placeholder="Type Your comment"
  style="font-size: 18px;margin-top: 20px"></textarea>
  <input type="hidden" name="dis_id" value="<?php echo $_GET['dis_id'] ?>">
  <input type="hidden" name="res_id" value="<?php echo $_GET['res_id'] ?>">
</div>

<div style="margin-left: 64%">
<!-- <img src="vendors/images/star.png" >
<img src="vendors/images/star.png" >
<img src="vendors/images/star.png" >
<img src="vendors/images/star.png" >
 --><button type="submit" class="btn btn-secondary" class="text-right" name="submit">Submit</button>
</div>
</div>
    </form>
	
                <?php
              
                
				foreach ($comment as $comment) { ?>

                    <img src="vendors/images/pffff.png" alt="" style="margin-left: 15%; " ><p style="margin-left: 16%">Bilal</p>
                    <div style="width: 50%;background: #FFFFFF;margin-left: 20%; padding: 1%;border-radius: 25px;border: 2px solid #E6E6F2;overflow:auto;margin-top: -5%;margin-bottom: 2%" >

                    	<p>
                    		
                            <?php echo $comment['com_text'] ?>
                        </p>
                </div>
                <input class = 'reply' type="text" name="reply" 
				style="display: none;margin-left: 25%;border-bottom: 2px solid black; height: 7%;width: 35%;">
				 <input type = "button" class = "arp" style="margin-left: 65%;background: #7777;padding: 0.5%;margin-top: 0.2%;margin-bottom: 5%"  value = "Reply">
 				<div style="margin-left: 15%"></div>
 				
                <?php 

             } ?>
                
                <script type="text/javascript">
                	
                	document.getElementById("signIn").style.display = "none"
                	document.getElementById("signUp").style.display = "none"
                	document.getElementById("res_name").innerHTML = "<?php echo $comment['res_name']; ?>";
                	document.getElementById("dis_name").innerHTML = "<?php echo $comment['dis_name']; ?>";
                	document.getElementById("dis_price").innerHTML = "Rs: <?php echo $comment['dis_price']; ?>";
                	document.getElementById("res_address").innerHTML = "<?php echo $comment['res_address']; ?>";
                	document.getElementById("res_name").innerHTML = "<?php echo $comment['res_name']; ?>";
					let replyBtn = document.getElementsByClassName("arp");
					for(let i =0;i<replyBtn.length;i++){
						replyBtn[i].addEventListener('click',showInput);
					}
					// replyBtn.addEventListener('click',showInput);
					// replyBtn[1].addEventListener('click',showInput);
					console.log(replyBtn.length);
					let replyVar = document.getElementsByClassName("reply");


					function showInput(){
						console.log(replyBtn.index(this));
						replyVar[1].style.display = "block";
					
						 
					}
                </script>
                <?php 
               if(isset($_SESSION['type']) &&  $_SESSION['type'] == "admin"){?>
					<script>
						//document.getElementById("dashboard").style.display = "none"
					 	document.getElementById('profile').style.display = 'none'
					 	document.getElementById('reset_password').style.display = 'none'
					 </script>
					  <?php } 
               if(isset($_SESSION['type']) &&  $_SESSION['type'] == "user"){?>
					<script>
						document.getElementById("dashboard").style.display = "none"
					 	

					 </script>
				
				<?php	} ?>   	
	
</body>
</html>
							
		
    
      
           
       
    

