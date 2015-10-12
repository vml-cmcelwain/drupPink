<?php
$source = $_GET['source'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Device Render Test</title>
    <link href='http://fonts.googleapis.com/css?family=Bitter|Bangers|Raleway' rel='stylesheet' type='text/css'>
    
    <style>
        h1{
            font-family: 'Bitter', serif;
            font-size:24px;
            color:#dce9be;
        }
        p{
            font-family: 'Raleway', sans-serif;
            font-size:14px;
            color:#efffcd;
        }
        label{
            font-family: 'Bitter', sans-serif;
            font-size: 20px;
            color: #efffcd;
            display: block;
        }
        input[type=text]{
            width: 500px;
            background-color: whitesmoke;
            border: solid 2px #555152;
            padding: 6px;
            border-radius: 5px;
            margin-top: 10px;
        }
        input[type=submit]{
            background-color: #99173c;
            color: #efffcd;
            padding: 13px;
            font-family: Raleway;
            font-size: 14px;
            border: solid 1px #99173c;
            border-radius: 5px;
            display: block;
            margin-top: 25px;
            cursor: pointer;
        }
        input[type=submit]:hover{
            background-color: orangered;
        }
        form{
            border: dotted #99173c 2px;
            padding: 25px;
            float: left;
        }
        iframe{
            border: solid 2px #99173c;
        }
        table{
            
        }
        a{
            width: 100%;
            text-align: center;
            display: block;
            color: #dce9be;
            text-decoration: none;
            font-family: Raleway;
            font-size: 14px;
        }
        a:hover{
            color:#99173c;            
        }
        a img{
            width:40%;
            height:auto;
        }
    </style>
    
</head>

<body style="background-color:#555152;margin: 0px;padding: 0px;font-family: 'Raleway', sans-serif;">
    <div style="background-color:#2e2633; width:100%;">
        <div style="width:1024px;min-height:150px;margin:0 auto;background-color:#2E2633;padding:25px;overflow:auto">
            <form method="get" action="">
                <h1>Set the source domain...</h1>
                <label>Domain</label>
                <input type="text" value="<?php echo $_GET['source']; ?>" name="source" id="source" placeholder="www.mydomain.com"/>
                <input type="submit" value="SET SOURCE URL">
            </form>
            <table>
                <tr>
                    <td align="center">
                        <a href="sizetest.php?source=<?php echo $_GET['source']; ?>&orientation=1">
                            <img src="ipad.png"/>
                        </a>
                    </td>
                    <td align="center">
                        <a href="sizetest.php?source=<?php echo $_GET['source']; ?>&orientation=2">
                            <img src="ipad-land.png"/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="sizetest.php?source=<?php echo $_GET['source']; ?>&orientation=3">
                            <img src="iphone.png"/>
                        </a>
                    </td>
                    <td align="center">
                        <a href="sizetest.php?source=<?php echo $_GET['source']; ?>&orientation=4">
                            <img src="iphone-land.png"/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="sizetest.php?source=<?php echo $_GET['source']; ?>&orientation=5">ALL DEVICES</a>            
                    </td>
                    <td align="center">
                        <a href="sizetest.php?source=<?php echo $_GET['source']; ?>&orientation=0">CLEAR DEVICES</a>
                    </td>
                </tr>
            </table>
            
        </div>
    </div>
    
    
        <?php
        if(!isset($_GET['orientation']) || $_GET['orientation'] == '0'){
            //echo 'DESKTOP ORIENTATION';
            echo "
            <div style=\"width:100%;min-height:800px;margin:0 auto;\">
                <h1>Desktop</h1>
                <iframe src=\"http://" . $source . "\" width=\"100%\" height=\"1000px\" allowtransparency=\"true\" scrolling=\"auto\" name=\"pad\" frameborder=\"0\"></iframe>
            </div>
            ";    
        }
        elseif($_GET['orientation'] == '1'){
            //echo 'IPAD PORTRAIT ORIENTATION';
            echo "
            <div style=\"width:1024px;min-height:800px;margin:0 auto;\">
                <h1>iPad Portrait</h1>
                <iframe style=\"margin:0 auto;\" src=\"http://" . $source . "\" width=\"768px\" height=\"1024px\" allowtransparency=\"false\" scrolling=\"auto\" name=\"pad\" frameborder=\"0\"></iframe>
            </div>
            ";
        }
        elseif($_GET['orientation'] == '2'){
            //echo 'IPAD LANDSCAPE ORIENTATION';
            echo "
            <div style=\"width:1024px;min-height:800px;margin:0 auto;\">
                <h1>iPad Landscape</h1>
                <iframe style=\"margin:0 auto;\" src=\"http://" . $source . "\" width=\"1024px\" height=\"768px\" allowtransparency=\"false\" scrolling=\"auto\" name=\"pad\" frameborder=\"0\"></iframe>
            </div>
            ";
        }
        elseif($_GET['orientation'] == '3'){
            //echo 'IPHONE PORTRAIT ORIENTATION';
            echo "
            <div style=\"width:1024px;min-height:800px;margin:0 auto;\">
                <h1>iPhone Portrait</h1>
                <iframe style=\"margin:0 auto;\" src=\"http://" . $source . "\" width=\"320px\" height=\"500px\" allowtransparency=\"false\" scrolling=\"auto\" name=\"pad\" frameborder=\"0\"></iframe>
            </div>
            ";
        }
        elseif($_GET['orientation'] == '4'){
            //echo 'IPHONE LANDSCAPE ORIENTATION';
            echo "
            <div style=\"width:1024px;min-height:800px;margin:0 auto;\">
                <h1>iPhone Landscape</h1>
                <iframe style=\"margin:0 auto;\" src=\"http://" . $source . "\" width=\"480px\" height=\"400px\" allowtransparency=\"false\" scrolling=\"auto\" name=\"pad\" frameborder=\"0\"></iframe>
            </div>
            ";
        }
        elseif($_GET['orientation'] == '5'){
            //echo 'ALL ORIENTATIONS SAVE DESKTOP';
            echo "
            <div style=\"width:1024px;min-height:800px;margin:0 auto;\">
                <h1>iPad Portrait</h1>
                <iframe style=\"margin:0 auto;\" src=\"http://" . $source . "\" width=\"768px\" height=\"1024px\" allowtransparency=\"false\" scrolling=\"auto\" name=\"pad\" frameborder=\"0\"></iframe>    
            ";
            echo "
                <h1>iPad Landscape</h1>
                <iframe style=\"margin:0 auto;\" src=\"http://" . $source . "\" width=\"1024px\" height=\"768px\" allowtransparency=\"false\" scrolling=\"auto\" name=\"pad\" frameborder=\"0\"></iframe>    
            ";
            echo "
                <h1>iPhone Portrait</h1>
                <iframe style=\"margin:0 auto;\" src=\"http://" . $source . "\" width=\"320px\" height=\"500px\" allowtransparency=\"false\" scrolling=\"auto\" name=\"pad\" frameborder=\"0\"></iframe>    
            ";
            echo "
                <h1>iPhone Landscape</h1>
                <iframe style=\"margin:0 auto;\" src=\"http://" . $source . "\" width=\"480px\" height=\"400px\" allowtransparency=\"false\" scrolling=\"auto\" name=\"pad\" frameborder=\"0\"></iframe>
            </div>
            ";
        }
        else{
            
        }
        
        ?>
</body>
</html>







