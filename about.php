<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Train Schedule</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Schedule</h1>
        </header>
        <table>
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Operating Hours</th>
                    <th>Closing Hours</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Saturday</td>
                    <td>8:00 AM</td>
                    <td>8:00 PM</td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td>8:00 AM</td>
                    <td>10:00 PM</td>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td colspan="2">OFF Day</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>8:00 AM</td>
                    <td>10:00 PM</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td colspan="2">OFF Day</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>8:00 AM</td>
                    <td>1:00 AM</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>8:00 AM</td>
                    <td>12:00 AM</td>
                </tr>
            </tbody>
        </table>
        <p>* The authority of "Mohammad Salman Fitness Gym Center" can change the time schedule any time</p>
        <p>* Monday and Wednesday are our official off day</p>
    </div>
</body>

</html>

<?php include('footer.php'); ?>