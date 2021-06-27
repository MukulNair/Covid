<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active cases in India</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar" id="nav">
            <ul>
                <img src="./Capture.PNG" class="image">
                <li><a href="#">Contact Us</a></li>
                <li><a href="./mukul/team.php">About Us</a></li>
                <li><a href="./active.php">Active Cases</a></li>
                <li><a href="./index.php">Home</a></li>
            </ul>

        </nav>


    </header>
    <h1>COVID-19 LIVE UPDATE OF INDIA</h1>
    <div class="container">
    <table class="liveupdate">
        
        <tr>
            <th class="liveupdate1">Last Update</th>
            <th class="liveupdate2">State</th>
            <th class="liveupdate3">Confirmed</th>
            <th class="liveupdate4">Active</th>
            <th class="liveupdate5">Recovered</th>
            <th class="liveupdate6">Death</th>
        </tr>

        <?php
            $data =  file_get_contents('https://api.covid19india.org/data.json');
            $liveupdate = json_decode($data, true); 

            
             $statescount = count($liveupdate['statewise']);

            $i=1;
            while($i < $statescount){ 

                ?>
        <tr>
            <td>
                <?php echo $liveupdate['statewise'][$i]['lastupdatedtime']  ?>
            </td>
            <td>
                <?php echo $liveupdate['statewise'][$i]['state']  ?>
            </td>
            <td>
                <?php echo $liveupdate['statewise'][$i]['confirmed']  ?>
            </td>
            <td>
                <?php echo $liveupdate['statewise'][$i]['active']  ?>
            </td>
            <td>
                <?php echo $liveupdate['statewise'][$i]['recovered']  ?>
            </td>
            <td>
                <?php echo $liveupdate['statewise'][$i]['deaths']  ?>
            </td>
        </tr>


        <?php
                $i++;
            }
        ?>
    </table>
</div>
</body>

</html>