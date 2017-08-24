<?php if (session_status() == PHP_SESSION_NONE)
session_start();
$username='';
if(isset($_SESSION)){
$username=$_SESSION['username'];?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/minorstep1.css">
  <link rel="stylesheet" href="css/modal1.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" src="assets/bootstrap/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/dash.css">

    

<style>


.content {
    
    background-color:#333   ;
    
    padding: 0px;
    width: 20%;
    height:70%;
	float:left;
	 border: 1px solid #272322;
	border-radius: 10px;
	
    color:white;
	}

	
	
.contentside {
    
	
    background-color: #333   ;
    
	margin-left:50px;
    padding: 0px;
    width: 50%;
	float:left;
    height:75%;
	 border: 1px solid #272322;
	border-radius: 10px;
	
    overflow:auto;
	color:white;
	}
	
	
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.header {
    
	padding: 2px 16px;
    background-color:#486580  ;
	border-top: 1px solid #486580 ;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
    color: white;
	height:24%;
}

.inp1{
	
	padding:0px 0px 0px 20px;
	font-family: font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:16px;

	}

.inp{

    height:7%;
	width:100%;
	margin-top:15px;
	margin-bottom:-4px;
	padding-left:100px;
	border-bottom: 1px dotted gray;
	
	}
	
.divv{
	margin-top:20px;
	border-bottom: 1px dotted gray;
	padding-left:60px;
}

.imgcont{
	margin-top:8px;
	margin-left:70px;
}

.pp{
	font-family: font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	
}



.content2 {
    
    background-color: #333;
    margin-top:570px;
    padding: 0px;
    width: 74%;
    height:68%;
	 border: 1px solid #486580;
	border-radius: 10px;
	
    
	}





.header2 {
    padding: 2px 16px;
    background-color:#486580  ;
	border-top: 1px solid #486580;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
    color: white;
	height:24%;
}


	



#education {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:90%;
	margin-bottom:30px;

}

	#education th {
    border: 1px solid #ddd;
    padding: 8px;
	font-size:15px;
	
}
#education td{
	padding:7px;
	width:100px;
}

#education tr:nth-child(even){background-color:#f2f2f2;}
#education tr:nth-child(odd){background-color:#9CA3AA;}

#education tr:hover {background-color:#75818C  ;}

#education th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #333;
    color: white;
	width:100px;
}


.content3 {
    
    background-color: #333333;
    margin-top:50px;
    padding-top: 0px;
    width: 74%;
    height:68%;
	 border: 1px solid #272322;
	border-radius: 10px;
	box-shadow: 0 2px 18px 1px rgba(0,0,0,0.6),0 10px 24px 0 rgba(0,0,0,0.35);
    
	}
	
	
	.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

#achievements {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:90%;
	padding-left:40px;
	margin-top:10px;
	margin-left:25px;
	position:relative;'
}

	
#achievements td{
	padding:7px;
	width:100px;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
	background-color:#333333;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


.achbutton
{width:100px;
border-radius: 8px;
background-color:#181818;
height:43px;
color:#AEB6BF;
font-size:17px;
cursor:pointer;
margin-bottom:0px;
left:20%;
margin-top:-25px;
margin-left:40px;
}




</style>
</head>


<?php
include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select firstname,lastname from individual where individual.username='$username'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_row($result);
$name=$row[0].' '.$row[1];
mysqli_close($con);
}
?>
<script>
$(document).ready( function() {
    $("#applicationindividual").on("click", function() {
        $("#backdiv").load("applicationindividual.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
		
    });
	
	
	
	
	$("#invitesindividual").on("click", function() {
        $("#backdiv").load("invitesindividual.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
		
    });
	
	$("#jobsindividual").on("click", function() {
        $("#backdiv").load("jobsindividual.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
		
    });
	$("#dashboardindividual").on("click", function() {
        $("#backdiv").load("pinfodiv3.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
		
    });
	
	
});

function closeNav() {
    document.getElementById("sidenav").style.width = "0";
    document.getElementById("backdiv").style.marginLeft = "0";
   
}
function openNav1() {
    document.getElementById("sidenav").style.width = "200px";
    document.getElementById("backdiv").style.marginLeft = "200px";
   
}


</script>
<body style="background-color:#C2C4C2">







<div class="modal-content1" style="height:0px;">
<ul class="topnav1" id="myTopnav1" >
<li id="wname"><a href="#">WEBSITENAME</a></li>
<li>

<ul class="topnav" id="myTopnav" style="margin-top:52px;margin-left:-200px;">
  
  <li style="margin-top:30px"><span style="font-size:17px;cursor:pointer;color:white;padding-top:20px;" onclick="openNav1()">☰</span></li>
  <li><a href="#" id="dashboardindividual">Dashboard</a></li>
  <li><a href="#" id="applicationindividual" >Application</a></li>
  <li><a href="#" id="invitesindividual">Invites</a></li>
  <li><a href="#">Jobs</a></li>
</ul>
</li>
<li> <input type="text" id="searchbar" height="80" style="margin-left:460px;margin-top:6px;height:50px;width:470px;font-size:22px;border-radius: 10px;border: 2px solid #333333;padding-left:50px;;background-image:url(images/searchbar2.png);background-repeat:no-repeat;background-position:6px;background-color:#DEE2E7  " placeholder="Search For Jobs" /> </li>
<li style="float:right;padding-right:60px;" ><a href="logout.php?logout"><span class="glyphicon glyphicon-new-window" style="margin-right:10px;"></span>Logout</a></li>
</div>	







<div id="sidenav" class="sidenav" style="margin-top:105px;padding-top:20px;position:fixed;">
<button onclick="closeNav()" style="border:0px;background-color:#000110;color:white;font-size:20px;margin-top:0px;margin-left:170px;">&times;</button>
   <a href="#"><img src="C:/wamp/www/proj1/emp.png" alt="Person" width="96" height="96" style="margin-top:20px;"></br><?php echo $name ?></a></br></br>
  <a href="#" style="margin-top:-42px;">Profile Completion</a>
  <a href="#">Settings</a>
  <a href="#">About Us</a>
  <a href="#">Update Preferences</a>
  <a href="#">Download Resume</a>
</div>




<div id="backdiv" class="backdiv" style="position:relative;top:100px;">

  
  

  <div id="container-floating">

  <a class="nd5 nds" data-toggle="tooltip" data-placement="left" data-original-title="Simone"></a>
  <a  href="#persinfomodal" class="nd5 nds" data-toggle="modal"  data-dismiss="modal" data-placement="left" ><img class="reminder">
    <p class="letter">P</p>
  </a>
  <a class="nd4 nds" data-toggle="modal" data-dismiss="modal" data-placement="left" href="#skillmodal" ><img class="reminder">
    <p class="letter">E</p>
  </a>
  <a class="nd3 nds" data-toggle="modal" data-dismiss="modal" data-placement="left" href="#educationmodal" ><img class="reminder">
    <p class="letter">E</p>
  </a>
  
  <a  href="#projectmodal" class="nd1 nds" data-toggle="modal" data-placement="left" ><img class="reminder">
    <p class="letter">W</p>
  </a>
  
  
  
  
  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()" style="background-color:#34495E">
    <p class="plus">+</p>
    <img class="edit" src="http://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
  </div>

</div>
<?php 
	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$sql="select * from individual where username='$username'";
?>
<div style="margin-top:100px;position:relative;">
  <div class="content">
    <div class="header" >
	
	<div class="imgcont"> 
	<img src="emp.jpg" alt="Person" width="96" height="96">
	</div>
	</div>
    
      <div class="inp"><p class="pp"><b>Name</b></p></div>    
	  <div class="inp"><p class="pp"><b>Gender</b></p></div>    
	   <div class="inp"><p class="pp"><b>D.O.B.</b></p></div>        
	   <div class="inp"><p class="pp"><b>Address</b></p></div>    
	   <div class="inp"><p class="pp"><b>City</b></p></div> 
	   <div class="inp"><p class="pp"><b>State</b></p></div> 
       <div class="inp"><p class="pp"><b>Country</b></p></div> 
	   <div class="inp"><p class="pp"><b>Mob.</b></p></div> 
    
  </div>
<div class="contentside" style="height:75%">
  <div class="header" style="height:100px" >
	
	<span class="glyphicon glyphicon-user" style="font-size:24px;padding-top:14px;margin-top:20px;"></span>
      
      <h3 style="padding-left:40px;margin-top:-28px;">Personal Information</h3>
    <span class="glyphicon glyphicon-pencil" style="float:right;font-size:18px;margin-top:-30px;"></span>
	</div>
  
  <div class="divv" style=""><span class="inp1" > Rajat Soni</span></div>
  <div class="divv"><span class="inp1" > Male</span></div> 
  <div class="divv"><span class="inp1" > 09/04/1996</span></div>
  <div class="divv"><span class="inp1" > c-2/290 Janakpuri New Delhi</span></div>
  <div class="divv"><span class="inp1" > New Delhi</span></div>
  <div class="divv"><span class="inp1" > Delhi</span></div>
   <div class="divv"><span class="inp1" > India</span></div>
   <div class="divv"><span class="inp1" > 8826817797</span></div>
</div>
</div>


<div class="content2">
    <div class="header2" >
      <span class="glyphicon glyphicon-education" style="padding-left:100px;margin-top:30px;margin-bottom:15px;font-size:30px;"> <h3 style="padding-left:40px;margin-top:-28px;font-size:26px;">Educational Qualifications</h3></span>

	  
	  </div>
<table id="education" style="margin-left:20px;margin-top:30px">
			
				<tr style="border-top:2px solid white;">
				<th style="width:10%;"> S.no </th>
				<th> School/College</th>
				<th> Course Name </th>
				<th> Year of passing</th>
				<th> Percentage </th>
				<th> </th>
				
				</tr>
				
				
				<?php
				$counteducations=1;
				$count=0;
				include("dbconnect.php");
				$sql="select * from qualifications where username='$username'";
				mysqli_select_db($con,"minorproject");
				$result=mysqli_query($con,$sql);
				$count=mysqli_num_rows($result);
				if($count>0)
				{
					while($count>0)
					{
					?> <tr>
								<td><p><?php echo $counteducations; ?> </p> </td>
								<td><p><?php echo $row[0]; ?> </p> </td>
								<td> <p><?php echo $row[1]; ?></p></td>
								<td> <p><?php echo $row[2]; ?></p></td>
								<td> <p><?php echo $row[4]; ?></p></td>
								<td> </td>
								</tr>
				<?php	         $counteducations++;
					
					$count--;}
				}
				else
				{
				?>
							<tr>
							<td> </td>
							<td > No records present </td>
							<td></td>
							<td></td>
							<td></td>
							<td> </td>
							</tr>
						<?php }
						
					
				?>
	</table>
</div>


<?php
include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select * from acheivements where username='$username';";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

?>

<div class="content3">
    <div class="header" >
	
	
 <img src="images/achieve2.png" alt="Person" width="86" height="76" style="margin-top:30px;">     
      <h2 style="padding-left:100px;margin-top:-50px;">Acheivements</h2>
</div>
<table border="0" id="achievements">
<?php
					
					if($count>0)
					{
					while($count>0)
					{
						$row=mysqli_fetch_row($result);
						$count--;
		?>
<tr class="card" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="images/achieve.png" alt="Achievement Icon" ></td>
 <td style="padding-left:0px;width:60%;">
    <p style="font-size:22px;line-height:28px;color:#AEB6BF"> Achievement Name ::<?php echo $row[1];?><br>
   About ::<?php echo $row[3];?><br>
      Year ::<?php echo $row[2];?></p>
  </td>
  <td style="width:40%;">
  <a href="#" style="text-decoration:none" >  <p class="achbutton"> <span class="glyphicon glyphicon-pencil" style="font-size:18px;margin-top:0px;margin-left:50px;"></span></p> </a>
   <a href="#" style="text-decoration:none" ><p class="achbutton" style="margin-top:-3px;"><span class="glyphicon glyphicon-trash" style="font-size:18px;margin-top:0px;margin-left:50px;"></span> </p> </a>
  </td>

</tr>

<?php
					}}
					else
					{ ?>
						<tr class="card" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="trophy.png" alt="Acheivement Icon" width="100" style=""></td>
  <td style="padding-left:0px;width:60%;">
    <p style="font-size:18px;line-height:28px;color:#AEB6BF"> <?php echo "No Acheivements";?><br> </p>
	</td> </tr>
					<?php 
					}
					?>

</table>
</div>



<?php

include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select * from acheivements where username='$username';";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

?>
<div class="content4">
    <div class="header4" >
	
	
 <img src="proj.jpg" alt="Person" width="96" height="86" style="margin-top:25px;">     
      <h2 style="padding-left:100px;margin-top:-60px;">Projects</h2>
</div>
<table border="0" id="proj" style="">
<?php
				
					if($count>0)
					{
					while($count>0)
					{
						$row=mysqli_fetch_row($result);
						$count--;
		?>
<tr class="card1" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="projm.jpg" alt="Project Icon" width="70" style=""></td>
 <td style="padding-left:0px;width:60%;">
    <p style="font-size:22px;line-height:28px;color:#AEB6BF"> Project Name ::<?php echo $row[1];?><br>
   Category Name::<?php echo $row[2];?><br>
   Year ::<?php echo $row[5];?></p>
  </td>
  <td style="width:40%;">
  <a href="#" style="text-decoration:none" >  <p class="projbutton"> <span class="glyphicon glyphicon-pencil" style="font-size:18px;margin-top:0px;margin-left:50px;"></span></p> </a>
   <a href="#" style="text-decoration:none" ><p class="projbutton" style="margin-top:-3px;"><span class="glyphicon glyphicon-trash" style="font-size:18px;margin-top:0px;margin-left:50px;"></span> </p> </a>
  </td>

</tr>
<?php
					}}
					else
					{ ?>
						<tr class="card1" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="projm.jpg" alt="Project Icon" width="70" style=""></td>
  <td style="padding-left:0px;width:60%;">
    <p style="font-size:18px;line-height:28px;color:#AEB6BF"> <?php echo "No Projects";?><br> </p>
	</td> </tr>
					<?php 
					}
					?>


</table>
</div>



<?php

include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select * from acheivements where username='$username';";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

?>


<div class="content5">
    <div class="header5" >
	
	
 <img src="skill1.png" alt="Person" width="86" height="76" style="margin-top:30px;">     
      <h2 style="padding-left:100px;margin-top:-50px;">Skills</h2>
</div>
<table border="0" id="skill" style="">
<?php
					
					if($count>0)
					{
					while($count>0)
					{
						$row=mysqli_fetch_row($result);
						$count--;
		?>
<tr class="card2" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="skill.png" alt="skill Icon" width="50" style=""></td>
 <td style="padding-left:0px;width:60%;">
    <p style="font-size:22px;line-height:28px;color:#AEB6BF"> Skill ::<?php echo $row[1];?><br>
      Level::<?php echo $row[3];?></p>
  </td>
 
<td style="width:10%;">
  <a href="#" style="text-decoration:none" >  <p class="skillbutton"> <span class="glyphicon glyphicon-pencil" style="font-size:18px;margin-top:0px;margin-left:50px;"></span></p> </a>
   <a href="#" style="text-decoration:none" ><p class="skillbutton" style="margin-top:-3px;"><span class="glyphicon glyphicon-trash" style="font-size:18px;margin-top:0px;margin-left:50px;"></span> </p> </a>
  </td>
 

 </tr>


  
 


<?php
					}}
					else
					{ ?>
						<tr class="card2" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="skill.png" alt="Skill Icon" width="70" style=""></td>
  <td style="padding-left:0px;width:60%;">
    <p style="font-size:18px;line-height:28px;color:#AEB6BF"> <?php echo "No Acheivements";?><br> </p>
	</td> </tr>
					<?php 
					}
					?>

</table>
</div>

 <div class="modal" id="projectmodal" role="dialog" style="margin-top:-80px;overflow:scroll">
	<div class="modal-dialog" >
	
	<div class="modal-content" style="width:80%;">
		
		<div class="modal-header" style="height:60px;background-color:#5D6D7E;color:white;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title"></span>Project Information</h3>
                        </div>
	
		
		
		<div class="modal-body" style="height:100%;margin-top:0px;background-color:#D0D3D4;margin-bottom:0px;" >
		<?php  include("projinfo1.php");?>
		</div>
		
	</div>
	</div>
	
</div>

 <div class="modal" id="educationmodal" role="dialog" style="margin-top:-80px;overflow:scroll">
	<div class="modal-dialog" >
	
	<div class="modal-content" style="width:80%;">
		
		<div class="modal-header" style="height:60px;background-color:#5D6D7E;color:white;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title"></span>Education Qualifications</h3>
                        </div>
	
		
		
		<div class="modal-body" style="height:100%;margin-top:0px;background-color:#D0D3D4;margin-bottom:0px;" >
		<?php  include("educationform.php");?>
		</div>
		
	</div>
	</div>
	
</div>
<div class="modal" id="skillmodal" role="dialog" style="margin-top:-80px;overflow:scroll">
	<div class="modal-dialog" >
	
	<div class="modal-content" style="width:80%;">
		
		<div class="modal-header" style="height:60px;background-color:#5D6D7E;color:white;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title"></span>Skills Form </h3>
                        </div>
	
		
		
		<div class="modal-body" style="height:100%;margin-top:0px;background-color:#D0D3D4;margin-bottom:0px;" >
		<?php  include("skillsmod.php");?>
		</div>
		
	</div>
	</div>
	
</div>
 
 
  

<div class="modal" id="persinfomodal" role="dialog" style="margin-top:-80px;overflow:scroll">
	<div class="modal-dialog" >
	
	<div class="modal-content" style="width:80%;">
		
		<div class="modal-header" style="height:60px;background-color:#5D6D7E;color:white;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title"></span>Personal Information </h3>
                        </div>
	
		
		
		<div class="modal-body" style="height:100%;margin-top:0px;background-color:#D0D3D4;margin-bottom:0px;" >
		<?php  include("persinfo1.php");?>
		</div>
		
	</div>
	</div>
	
</div>


</div>

  

  
  <script>





</script>

</body>
</html>
<?php
if(isset($_GET['path']))
{	if($_GET['path']==1)
	{
	echo '<script>';
	echo '$(document).ready( function() {
    
        $("#backdiv").load("invitesindividual.php?iac=1");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
	});';
	echo '</script>';	
	}
	
	if($_GET['path']==2)
	{
	echo '<script>';
	echo '$(document).ready( function() {
    
        $("#backdiv").load("invitesindividual.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
	});';
	echo '</script>';	
	}
}