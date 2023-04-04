<?php if(isset($_GET['ret'])){ echo "Success"; }else{ ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <form action="https://ecopyright.ieee.org/ECTT/IntroPage.jsp"
        method="post">
            <input type="hidden" name="PubTitle" value="2021 International Conference on Industrial Electronics Research and Applications (ICIERA) ">
            <input type="hidden" name="ArtSource" value="53202">
            
            <input type="text" name="ArtTitle" value="On Fluid Queuing Systems
            with Strict Priority">
            <input type="text" name="AuthName" value="Yi Chan and Yong Liu and Weibo Gong">
            <input type="text" name="ArtId" value="12345 (Enter PID)">
            <input type="text" name="AuthEmail" value="y.liu@ieee.org,a.smith@ieee.org">
            <input type="hidden" name="rtrnurl" value="ece.mait.ac.in/iciera21/ecr1.php?ret=1">
            <input name="Submit" type="submit" value="Copyright Submission">
        </form>
    </body>
</html>
<?php } ?>