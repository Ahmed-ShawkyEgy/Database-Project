<!DOCTYPE html>
<html>

<head>
    <title>view Requests</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="/Database-Project/style/manager.css">
</head>




<body>
  <?php require_once($_SERVER['DOCUMENT_ROOT']."/Database-Project/php/axess.php"); ?>
  <?php require_once($_SERVER['DOCUMENT_ROOT']."/Database-Project/php/navbar.php"); ?></br></br></br></br></br>


	 <?php
   require_once($_SERVER['DOCUMENT_ROOT']."/Database-Project/helper/sqlExec.php");
    if(session_status() == PHP_SESSION_NONE)
    session_start();
  $manager_id = $_SESSION['userid'];
	 $rs = post('rs');
	 $resp = post('resp');
	 $sm = post('sm');
	 $startDate = post('startDate');
	 
	 if ($sm=="'choosestaff'"){
	 $_SESSION['error'] = "you need to choose a Staff employee or in case you didnot find staff employee then no staff member in your Department apply for requests";
	 header("Location: /Database-Project/layout/appology.php");
	 exit();
	 }
	 
	 
	 
	 $check_exists_requests=sqlExec("select r.applicant from Requests r where r.applicant=$sm and r.start_date=$startDate ");
	 //'".$manager_id."'
     //echo gettype($resp);
     //ask about this part

	 $chech_type=sqlExec("select m.username from Managers m where m.username='".$manager_id."' and m.type='HR' ");
	 $check_requests_hr=sqlExec("select r.applicant from Requests r inner join Staff_Members sm on r.applicant=sm.username
     inner join HR_Employees hr on hr.username=sm.username where r.applicant=$sm and r.start_date=$startDate ");
	 	 
	 if(empty($check_exists_requests) ){
     $_SESSION['error'] = "This Requests does not exists";
     header("Location: /Database-Project/layout/appology.php");
     exit();}
	 else
	 {
	 
	 if( empty($check_requests_hr) )
		{
		if($resp=="'Rejected'" and  $rs=="''"){
		$_SESSION['error'] = "if you rejected then you should enter reason";
		header("Location: /Database-Project/layout/appology.php");
		exit();}

		if($resp=="'Accepted'"){
		$Accept_Reject_Request=sqlExec("exec Accept_Reject_Request_Manager @MHRusername='".$manager_id."',
		@response=$resp,@username=$sm, @start_date=$startDate ");
		$_SESSION['accept'] = "Succesfully Accepted this Requests";
		header("Location: /Database-Project/layout/acceptance.php");
		exit();}

		if($resp=="'Rejected'" and $rs!="''" ){
		$Accept_Reject_Request=sqlExec("exec Accept_Reject_Request_Manager @MHRusername='".$manager_id."',
		@response=$resp,@reason=$rs,@username=$sm, @start_date=$startDate ");
		$_SESSION['accept'] = "Succesfully Rejected this Requests";
		header("Location: /Database-Project/layout/acceptance.php");
		exit();}
		
		}
	else
		{
		
		if( empty($chech_type) )
		{
		$_SESSION['error'] = "You are not allowed to accept or reject hr_employee requests ";
		header("Location: /Database-Project/layout/appology.php");
		exit();}
		else
		{
		if($resp=="'Rejected'" and  $rs=="''"){
		$_SESSION['error'] = "if you rejected then you should enter reason";
		header("Location: /Database-Project/layout/appology.php");
		exit();}

		if($resp=="'Accepted'"){
		$Accept_Reject_Request=sqlExec("exec Accept_Reject_Request_Manager @MHRusername='".$manager_id."',
		@response=$resp,@username=$sm, @start_date=$startDate ");
		$_SESSION['accept'] = "Succesfully Accepted this Requests";
		header("Location: /Database-Project/layout/acceptance.php");
		exit();}

		if($resp=="'Rejected'" and $rs!="''" ){
		$Accept_Reject_Request=sqlExec("exec Accept_Reject_Request_Manager @MHRusername='".$manager_id."',
		@response=$resp,@reason=$rs,@username=$sm, @start_date=$startDate ");
		$_SESSION['accept'] = "Succesfully Rejected this Requests";
		header("Location: /Database-Project/layout/acceptance.php");
		exit();}
		
		
		
		
		
		}
		
		}

	 }


	 ?>











</body>

</html>
