<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5..2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['rollno']) && isset($_POST['name']) && isset($_POST['course'])){

        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $course = $_POST['course'];
    
        $sql = "INSERT INTO student ( rollno, name, course)value('$rollno', '$name', '$course')";

        if($conn->query($sql)){
            echo "Inserted";
        }else{
            echo $conn->error;
        }
    }
    ?>


    <form action="index.php" method="POST">
        <input type="text" name="rollno" placeholder="Enter Roll no."/><br/>
        <input type="text" name="name" placeholder="Enter name"/><br/>
        <input type="text" name="course" placeholder="Enter Course"/><br/>
        <input type="submit" value="Insert Data"/>
    </form>

    <!--- Complete Select Operation --->
    <?php
        $sql = "SELECT * FROM student";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo 'rollno: '.$row["rollno"].'<br/>';
                echo 'name: '.$row["name"].'<br/>';
                echo 'course: '.$row["course"].'<hr/>';
                
            }
        }
    
    ?>

    <!--- End --->

</body>
</html>