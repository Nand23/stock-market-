<html>

<head>
</head>

<body>
  <div>
    <?php
    include("../dbconnection.php");
    include "./header.php";
    ?>
  </div>

  <table>
    <h2>All Client Data</h2>
    <?php
    $sql = "SELECT * FROM new_client_login";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo "
        <table border=1>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone Number</th>   
            <th>City</th>
            <th>Password</th>
            <th>Status</th>
            <th>Delete</th>
        </tr>";
      while ($row = mysqli_fetch_assoc($result)) {
        echo "
            <tr>
                <td>" . $row["ID"] . "</td>
                <td>" . $row["first_name"] . "</td>
                <td>" . $row["last_name"] . "</td>
                <td>" . $row["gender"] . "</td>
                <td>" . $row["address"] . "</td>
                <td>" . $row["phone_number"] . "</td>
                <td>" . $row["city_name"] . "</td>
                <td>" . $row["password"] . "</td>
                <td>" . $row["status"] . "</td>
                <td>
                    <form action='' method='POST'>
                        <input type='hidden' name='id' value='" . $row['ID'] . "'>
                        <input type='submit' name='delete'>
                    </form>
                </td>
            </tr>";
      }
    } else {
      echo "0 results";
    }
    ?>
  </table>
</body>

</html>