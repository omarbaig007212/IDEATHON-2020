<!DOCTYPE html>
<head>
    <title>Table for Database</title>
</head>
<body>
<table align="centre" border="1px" style="width:600px; line-height:40px;">
               <tr>
               <th colspan="11"><h2> emergency forum </h2></th>
               </tr>
               <t>
                    <th>paitent name</th>
                    <th>department</th>
                    <th>date</th>
                    <th>time</th>

                </t>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "hospital_management");
            if($conn-> connect_error) {
                die("Connection Failed:" .$conn->connect_error);
            }
            $sql = 'select * from appointment_booking';
            $result = $conn-> query($sql);

            if($result-> num_rows > 0) {
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["patient_name"] ."</td><td>". $row["departments"] ."</td><td>". $row["date"] ."</td><td>". $row["time"] ."</td></tr>";
                }
                echo "</table>";
            }
            else {
                echo "0 result";
            }
            $conn-> close();
        ?>
    </table>
</body>
</html>
