<?php 	
if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>RESUME</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description"/>
<meta charset="UTF-8"> 

<link rel="stylesheet" href="../assets/css/cvstyle.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<?php 
			include 'connection.php';

				$q = "SELECT * FROM job_seeker Where job_seeker_id = '".$_SESSION['job_seeker_id']."'";
										
				$query = mysqli_query($conn,$q);

				while ($res= mysqli_fetch_array($query)) {
										
		?>
		<div id="headshot" class="quickFade">
			<img src= />
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
					<h2><?php echo $res['designation']; ?></h2>
					<p class="subDetails">Duration : <?php echo $res['experience_duration']; ?></p>
					<h3><b>Organization</b> : <?php echo $res['experience_organization']; ?>.</h3>
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
		
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>