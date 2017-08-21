

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
        <h1>Result Management</h1>
    </header>

    <div class="my-work">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordered">
                    <thead>                                                
                         <?php
                            $s=('675295');
                            if ($s==$_POST['name']) {
                                echo "Your CGPA A+";
                            }
                            ?> 
                    </thead>
                </table>
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