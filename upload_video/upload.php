<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contact="width=device-width,initial-scale=1.0">
        <title >video uploading using php and mysql</title>

    <style>
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            min-height:100hv;


        }
        input{
            font-size:2rem;

        }
        a{
                text-decoration:none;
                color: #006CFF;
                font-size:1.5rem;
        }
    </style>


</head>
<body>
       <a href="view.php">videos</a>
       <?php if (isset($_GET['error'])) {  ?>
           <p><?=$_GET['error']?></p>
        <?php }  ?>
       <form action=" upload.php" method="post" enctype="multipart/form-data">
           <input type="file" name="my_video">
           <input type="submit"  name="submit" value="Upload!">
        </form>



</body>
</html>
