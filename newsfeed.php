<html>
<head>
<meta charset="utf-8">
<title>Newsfeed</title>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
  <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="script.js"></script>
  <style>
  .centered-navbar {
    position:absolute;
    left:25%;
    width:50%;
    text-align:center;
  }
  </style>
</head>
<body>
  <div id='cssmenu' >
  <ul>
     <li class='active'><a href='#'><i class="fa fa-home"></i>&nbsp;&nbsp;STUDENT CLUB</a></li>
     <div class="centered-navbar"><img src="images/club2.png" style="height:55px; width:250px;border-radius:20px;"></div>
     <li style="float:right"><a href='index.php'><i class="fa fa-power-off"></i>&nbsp;&nbsp;LOGOUT</a></li>
  </ul>
  </div>
  <form method="get" action="insert.php">
	<div class="panel panel-primary" >
			<div class="panel-heading" style="text-align:center">TASK FOR THE MONTH</div>
			<div class="panel-body">
					<div class="row">
							<div class="col-sm-12">
									<textarea rows="21" cols="500" style="resize:vertical;max-height: 500px;width: 100%" class="form-control" name="task"></textarea>
							</div>
					</div>
			</div>
	</div>
  <div class="row">
      <div class="col-sm-6">
          <input type="submit" class="btn btn-block btn-lg pull-right btn-success" value="UPDATE"/>
      </div>
      </form>
      <form method="post" action="delete.php">
        <div class="col-sm-6">
           <input type="submit" value="DELETE" class="btn btn-block btn-lg pull-right btn-danger">
          </div>
      </form>
    </div>

</body>
</html>
