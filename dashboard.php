<?php
 include 'header.php';
 include 'connector.php';
?>
    <div>
        <table class = "dashTable">
            <tr>
                <th>Sr_No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>

            <?php
					$records = "SELECT * FROM Users";
					$result = $connection->query($records);
					while($data = mysqli_fetch_array($result))
					{
				?>
					  <tr>
					  	<td><?php echo $data['Sr_No']; ?></td>
					    <td><?php echo $data['Firstname']; ?></td>
					    <td><?php echo $data['Lastname']; ?></td>
					    <td><?php echo $data['Email']; ?></td>
					  </tr>	
				<?php
					}
					$con->close();
				?>

        </table>
    </div>
<?php
 include 'footer.php';
?>