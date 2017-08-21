
<?php

$score=100;

function mark($score) {
 if($score>=90)
        return 'A';
    if($score>=70-89)
        return 'B+';
    if($score>=50-69)
        return 'C+';
    if($score>=49)
        return 'F';   
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Result Sheett</title>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Result Managemente</h1>
    </header>

    <div class="my-work">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="post.php" method="post" enctype="multipart/form-data">
                        <div class="name">
                            <label for="name" class="col-sm-5 col-form-label">Enter Your ID</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your ID">
                        </div>
                        <div class="show-result">
                            <button type="submit" class="btn btn-primary">Show Grade</button>
                        </div> 
                                      
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-left">
            <p>Copyright &copy 2017</p>
        </div>
        <div class="footer-right">
            <p>Powered by Imran Hoshain</p>
        </div>
    </footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-birthday-picker.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>