<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "OOI POH QIN";
        $matricNumber = "AI220264";
        $course = "BIS";
        $yearOfStudy = 3;
        $address = "123, MYSTERY TAMAN, 86400, PARIT RAJA, JOHOR.";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matricNumber"; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td> 
        </tr>
        <tr>
            <td>Year of study</td>
            <td><?php echo "$yearOfStudy"; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td> 
        </tr>
    </table>
    
</body>
</html>