<?php 
session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location:Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Job List</title>

 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/passwordvalidation.css">
    <link rel="stylesheet" href="assets/css/style4.css">
    
    <meta charset="utf-8">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style5.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style4.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<nav>
   <?php
            if(isset($_SESSION["admin_id"])){
            ?>
            <nav>
                <?php include "header.php"; ?>
            </nav>
            <?php
}else{
    ?>
    <div>
                <input type="hidden" name="">
            </div>
    <?php
}
            ?>
  </nav>

<body id="top" class=""> 
    <form>
<div class="container">
  <div class="row justify-content-center">
    <th><a class="btn btn-info" name="add" href="add_interview.php">Add New Interview</a></th>
  </div>
  <br>
   <div class="col-md-12">
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <?php if (isset($msg)): ?>
      <?php echo $msg;?>
    <?php endif ?>
    <table id="example" class="table table-striped">
    <thead class="container-fluid bg-info">
                                    <th>Interview Date</th>
                                    <th>Location</th>
                                    <th>Job Title</th>
                                    <th>Company Name</th>
                                    <th>Company Logo</th>
                                    <th>   </th>
                                    <th>Action</th>
                                    <th>   </th>
             </thead> 
<?php
include 'connection.php';
if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from interview ORDER BY interview_id DESC";
        $quer = mysqli_query($conn,$sql);
        while ($res= mysqli_fetch_array($quer)){
            ?>
        <div class="row">                
             <tbody id="myTable">
                    <div class="media-body">
                        <td><?php echo $res['interview_date']; ?></td>
                        <td><?php echo $res['interview_place']; ?></td>
                        <?php 
                           $job_id=$res['job_id'];
                            include 'connection.php';

                            $q = "SELECT * FROM job Where job_id = $job_id";
                    
                            $query = mysqli_query($conn,$q);

                            while ($res1= mysqli_fetch_array($query)) { ?>

                        <td><?php echo $res1['job_title'];  ?></td>
                        <?php 
                           $employer_id=$res1['employer_id']; }
                            include 'connection.php';

                            $q = "SELECT * FROM employer Where employer_id = $employer_id";
                    
                            $query = mysqli_query($conn,$q);

                            while ($res2= mysqli_fetch_array($query)) { ?>
                                <td><?php echo $res2['company_name'];  ?></td>
                                <td>
                                <img src="../employer_login/employer_logo/<?php echo $res2['logo']; } ?>"  width="70px" class="rounded" alt="User Icon" aria-expanded="false">
                                </td>
                            <td><a class="btn btn-success" name="Update" href="update_interview.php?interview_id=<?php echo $res['interview_id']; ?>">Update</a></td>
                             <td><a class="btn btn-danger" name="Delete" href="delete_interview.php?interview_id=<?php echo $res['interview_id']; ?>">Delete</a></td>
                             <td><a class="btn btn-primary" name="Details" href="interview_details.php?job_id=<?php echo $job_id; ?> && interview_id=<?php echo $res['interview_id']; ?>">Details..</a></td>
                        <td>
                    </td>
                    </div>
                
        </tbody>
    
        </div>
    <?php
    }
}
    ?>
  </table>
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
    $(document).ready(function() {
    $('#example').DataTable();
    } );
</script>
<script src="../assets/css/dataTables.bootstrap4.min.css"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script> 
<script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
<table><footer>
   <?php include "footer.php"; ?>
  </footer></table>