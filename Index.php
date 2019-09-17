<?php
echo 'Hello!';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $sessionid = $_POST["SessionID"];
        $sessionlink = $_POST["Session Link"];
        $executiontype = $_POST["Execution Type"];
		$numberofsteps = $_POST["NumberOfSteps"];
		$status = $_POST["Status"];
		$errordescription = $_POST["Error Description"];
		$date = $_POST["Date"];
		$time = $_POST["Time"];

        $dbhost = "TEST-TAUTO\LIBRAAUTOMATION";
        $username = "sa";
        $password = "Tester123!";
        $dbname = "AutomationTestSessions";

        $mysql = mysqli_connect($dbhost, $username, $password, $dbname);         
		$query = "SELECT * FROM Sessions (SessionID,[Session Link],[Execution Type],NumberOfSteps,Status,[Error Description],Date,Time) VALUES $sessionid,$sessionlink,$executiontype,$numberofsteps,$status,$errordescription,$date,$time";
        mysqli_query($mysql, $query);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LibraBank Automation Sessions</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>

<body>
    <header>
        <div class="container">
            <div id="titlestuff">
                <h1>Welcome to LibraBank Automation Sessions !</h1>
                <nav>
                    <ul>
                        <li class="current"><a href="index.html"><span>Home</span></a></li>
                        <li><a href="creations.html"><span>Automation Sessions</span></a></li>                        
                    </ul>
                </nav>
            </div>
        </div>
        <hr>
    </header>
<form method="post">
        <input sessionid="SessionID" type="text"/>        
    </form>		
</body>
</html>