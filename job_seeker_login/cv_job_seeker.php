<?php 
session_start();
if(!isset($_SESSION["job_seeker_id"])){
  header("Location:Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>RESUME</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description"/>
<meta charset="UTF-8"> 

<link rel="stylesheet" href="../assets/css/cvstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<div class="sectionContent">
<input type="submit" class="btn btn-info col-md-7 btn-lg" onclick="printDiv('printableArea')" value="print This!">
</div>
<?php
echo "<br>";
?>
<body id="top">
<div id="printableArea">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<?php 
			include 'connection.php';

				$q = "SELECT * FROM job_seeker Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
				$query = mysqli_query($conn,$q);

				while ($res= mysqli_fetch_array($query)) {
										
		?>
		<div id="headshot" class="quickFade">
			<img src="job_seeker_image/<?php echo $_SESSION['image'] ?>"  width="55px" height="auto">
		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo"><?php echo $res['job_seeker_name']; ?></h1>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>Email: <a target="_blank"><?php echo $res['job_seeker_email']; ?></a></li>
				
				<li>Phone: <a><?php echo $res['job_seeker_contact']; ?></a></li>

				<li>Address: <a><?php echo $res['job_seeker_address']; ?></a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Career Objective</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_seeker_career_objective']; ?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Job Profile</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_seeker_job_profile']; ?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		<?php 
			}
		?>
		
		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>
			<?php 
					include 'connection.php';

					$q = "SELECT * FROM experience Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
					$query = mysqli_query($conn,$q);

					while ($res= mysqli_fetch_array($query)) {
										
			?>
			<div>
				<div  class="sectionContent">
					<h5><?php echo $res['designation']; ?></h5>
					<p class="subDetails">Duration : <?php echo $res['experience_duration']; ?></p>
					<h6><b>Organization</b> : <?php echo $res['experience_organization']; ?>.</h6>
				</div>
				<?php 
					}
				?>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>
			<?php 
					include 'connection.php';

					$q = "SELECT * FROM skill Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
					$query = mysqli_query($conn,$q);

					while ($res= mysqli_fetch_array($query)) {
										
			?>
			<div >
				<div class="sectionContent">
					<h2><?php echo $res['skill_name']; ?></h2>
					<p class="subDetails"><?php echo $res['skill_description']; ?></p>
				</div>
				<?php 
					}
				?>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>
			<?php 
					include 'connection.php';

					$q = "SELECT * FROM qualification Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
					$query = mysqli_query($conn,$q);

					while ($res= mysqli_fetch_array($query)) {
										
			?>
			<div >
				<article class="sectionContent">
					<h2><?php echo $res['qualification_institution']; ?></h2>
					<p class="subDetails"><?php echo $res['qualification_name']; ?></p>
					<p><?php echo $res['qualification_result']; ?></p>
				</article>
			</div>
			<?php 
				}
			?>
			<div class="clear"></div>
		</section>
		<section>
			<div class="sectionTitle">
				<h1>Reference</h1>
			</div>
			<?php 
					include 'connection.php';

					$q = "SELECT * FROM reference Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
					$query = mysqli_query($conn,$q);

					while ($res= mysqli_fetch_array($query)) {
										
			?>
			<div >
				<article class="sectionContent">
					<h2><?php echo $res['name']; ?></h2>
					<p><?php echo $res['designation']; ?></p>
					<p><?php echo $res['company']; ?></p>
					<p><?php echo $res['address']; ?></p>
					<p><?php echo $res['email']; ?></p>
					<p><?php echo $res['phone']; ?></p>
					<p><?php echo $res['reference_type']; ?></p>
				</article>
			</div>
			<?php 
				}
			?>
			<div class="clear"></div>
		</section>
		<section>
		<p>I hereby declare that all information provided in the application form is correct, complete and true to the best of my knowledge. </p>
		</section>

		<section>
			<div class="sectionTitle">
				<h1>Therefore</h1>
			
			<?php 
					include 'connection.php';

					$q = "SELECT * FROM job_seeker Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
					$query = mysqli_query($conn,$q);

					while ($res= mysqli_fetch_array($query)) {
										
			?>
			
					<p><?php echo $res['job_seeker_name']; ?></p>
			</div>
			<?php 
				}
			?>
			<div class="clear"></div>
		</section>
		
	</div>
</div>
</div>
<div class="sectionContent">
<input type="submit" class="btn btn-info col-md-7 btn-lg" onclick="printDiv('printableArea')" value="print This!">
</div>
<?php
echo "<br>";
?>
<?php
echo "<br>";
?>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script> 
</body>
</html>