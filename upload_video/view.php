<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contact="width=device-width,initial-scale=1.0">
        <title >view</title>
        <style>
            body{
                display:flex;
                justify-content:center;
                align-items:center;
                flex-direction:wrap;
                min-height:100hv;
            }
            video{
                 width=640px;
                 height=360px;
            }
            a{
                text-decoration:none;
                color: #006CFF;
                font-size:1.5rem;
            }
        </style>

</head>
<body>
    <a href="index.php">UPLOAD</a>

    <div class="alb">
        <?php
        include "db_conn.php";
        $sql="SELECT * FROM my-videos ORDER BY id  DESC";
        $res =mysqli_query($conn,$sql);

        if(mysqli_num_rows($res)>0){

            while($video=mysqli_fetch_assoc($res)){
        ?>

           <video src="uploads/<?=$video['video_url']?>"
               controls>
            </video>

        <?php
        }
        }else{
            echo "<h1>Empty</h1>";
        }
        ?>
        }
        

</body>
</html>
