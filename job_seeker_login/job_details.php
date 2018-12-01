<?php 	
if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Job Details</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description"/>
<meta charset="UTF-8"> 
<link rel="stylesheet" href="../assets/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="top" class="">
<form action="online_application.php" method="POST">
<div>
<div>
	<div class="mainDetails">
		<?php 
			include 'connection.php';
			$job_id= $_GET['job_id'];

				$q = "SELECT * FROM job Where job_id = $job_id";
										
				$query = mysqli_query($conn,$q);

				while ($res= mysqli_fetch_array($query)) {
										
		?>
		<?php $job_id= $res['job_id']; ?>
		
		<div id="name">
			<h1 class="quickFade delayTwo"><?php echo $res['job_title']; ?></h1>
		</div>
		
		<div class="clear"></div>
	</div>
	
	<div>
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Job Context</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_context']; ?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Job Responsibilities</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_responsibilities']; ?></p>
				</div>
			</article>
			<article>
				<div class="sectionTitle">
					<h1>Educational Requirements</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['educaqtional_requirement']; ?></p>
				</div>
			</article>
			<article>
				<div class="sectionTitle">
					<h1>Experience Required</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_experience_required']; ?></p>
				</div>
			</article>
			<article>
				<div class="sectionTitle">
					<h1>Location</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_location']; ?></p>
				</div>
			</article>
			<article>
				<div class="sectionTitle">
					<h1>Salary</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_salary']; ?></p>
				</div>
			</article>
			<article>
				<div class="sectionTitle">
					<h1>Application Deadline</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $res['job_application_deadline']; ?></p>
					<?php $emp_id= $res['employer_id']; ?>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		<?php 
			}
		?>
		
		<section>
			<div class="sectionTitle">
				<h1>Organization Details</h1>
			</div>
			<?php 
					include 'connection.php';

					$q = "SELECT * FROM employer Where employer_id = $emp_id";
										
					$query = mysqli_query($conn,$q);

					while ($res= mysqli_fetch_array($query)) {
										
			?>
			<div>
				<div  class="sectionContent">
					<h2><?php echo $res['company_name']; ?></h2>
					<p>Description : <?php echo $res['company_description']; ?></p>
					<h3><b>Location</b> : <?php echo $res['company_location']; ?>.</h3>
				</div>
				<?php 
					}
				?>
			</div>
			<div class="clear"></div>
			<div>
				<div  class="sectionContent">
					<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Submit">
				</div>
			</div>
		</section>

		
	</div>
</div>
</div>
</form>
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