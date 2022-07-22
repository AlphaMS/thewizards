<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Certificate
    </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="row p-5 text-bg-dark bg-opacity-70 m-auto mt-5">
        <form action="image.php" method="post" enctype="multipart/form-data">
            <div class="col-lg-8 col-md-10 col-10 mb-5 m-auto mt-5">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="col-lg-8 col-md-10 col-10 mb-5 m-auto">
                <label for="certificate" class="form-label">Upload Image</label>
                <input class="form-control form-control-lg" name="certificate" type="file" required>
            </div>
            <?php
            if(isset($_GET["err"])){?>
                <center style="color: red; justify-content: center;"><?= $_GET['err']?></center>
            <?php
            header("Refresh:3; url=index.php");
            }
            ?>
            <div class="col-3 m-auto text-center mt-5 mb-5">
                <button type="submit" value="upload" class="btn btn-outline-primary col-lg-7 mt-auto">Upload</button>
            </div>
        </form>
    </div>
</body>
</html>