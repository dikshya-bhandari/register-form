<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style1.css" rel="stylesheet">
</head>
<body>
    <table>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>phonenumber</th>
    <th>password</th>
    <th>profile</th>
    </tr>

    <tbody>
    <?php 
        
        include 'dbconn.php';
        $selectquery = "select * from data";
        $query = mysqli_query($conn , $selectquery);

        while($result = mysqli_fetch_array($query)){
            ?>
            <tr>
            <td><?php echo $result['id']; ?></td>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['phonenumber']; ?></td>
            <td><?php echo $result['password']; ?></td>
            <td><img src = "<?php echo $result['profile']; ?>" style="width:50px; height:50px;"></td></tr>
        <?php 
        }
        ?>




    </tbody>
</body>
</html>