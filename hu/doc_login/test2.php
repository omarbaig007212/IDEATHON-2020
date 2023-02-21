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
                    <th> fname</th>
                    <th>lname</th>
                    <th>gender</th>
                    <th>date</th>
                    <th>hpreference</th>
                    <th>phyname</th>
                    <th>phonenumber</th>
                    <th>relationship</th>
                    <th>address</th>
                    <th>city</th>
                    <th>homephone</th>
                </t>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "hospital_management");
            if($conn-> connect_error) {
                die("Connection Failed:" .$conn->connect_error);
            }
            $sql = 'select * from emergency_form';
            $result = $conn-> query($sql);

            if($result-> num_rows > 0) {
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["gender"]."</td><td>".$row["date"]."</td><td>".$row["hpreference"]."</td><td>".$row["phyname"]."</td><td>".$row["phonenumber"]."</td><td>".$row["relationship"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["homephone"]."</td></tr>";
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