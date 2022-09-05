<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <h1 style="display:none;">ypakp</h1>
    <title>Error 404</title>
    <link rel="stylesheet" href="../css/under.css">
    <!--<meta http-equiv="refresh" content="5;url='./index.php"/>-->

</head>

<header style="display: none">Error</header>

    <body>
            <image class="center" src="../img/img/under_construction.jpg" alt="image missing"></image>
            
            <button type="submit" onclick="location.href = 'javascript:history.go(-1)';" class="button"  style="background-color:rgb(200,200,200)" value="Επιστροφή">Επιστροφή</button>

            <script type="text/javascript">
                function Redirect() {
                window.location=history.go(-1);
                }

                document.write("Ανακατεύθυνση σε 5 δευτερόλεπτα...");
                setTimeout('Redirect()', 5000);
            </script>
    </body>

</html>

