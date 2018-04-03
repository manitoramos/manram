<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/highlighter/prettify.css" />
    <script src="assets/highlighter/prettify.js" ></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css"rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
                $msg = "";
                echo "<div class='panel panel-default'>";
                echo "<div class='panel-heading'>";
                echo "<h2>TESTE</h2>";	
                echo "</div>";
                echo "<div class='panel-body'>";
                echo "<div class='table-responsive'>";
                $fp2 = fopen("assets/msg/2218722482144.txt", "r");
                while(!feof($fp2)){
                    $msg .= fgets($fp2);
                }
                echo $msg;
                fclose($fp2);
                echo "</div>";
                echo "</div></div>";
            ?>
        </div>
        <textarea value="" id="summernote">
        <?php echo $msg ?>
        </textarea>
    </div>

    <script>
			prettyPrint();
    </script>
    
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>

    <script>
			$(document).ready(function() {
				$('#summernote').summernote();
				height: 500
			});
	    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>