<html>
    <head>
        <title>

        </title>
    <link rel="stylesheet" type = "text/css" href="resources/css/style.css">
    <script src="script.js"></script>
    </head>
    <body>
        <div id="header">
            ONLINE TEST PORTAL
        </div>
        <div id="admin-login">
<?php
$i=0;
for ($i=0; $i<=4;$i++) {
    ?>
    <form action=""> 
                <table>
                 
                   <tr>
                       <td><label for="right-answer-option">RIGHT ANSWER OPTION <?php $i ?></label></td>
                       <td><input type="number" name="right-answer-option"></td>
                   </tr>
                </table>
                <input type="submit" value="ADD-OPTION">
                
               
            </form>

    <?php
}
?>
            
        </div>

        <div id="footer">
            ONLINE TEST PORTAL designed by @cedcoss pvt. ltd
        </div>        
    </body>
</html>