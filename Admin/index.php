<?php include 'header.php'; ?>
        <div id="admin-login">
            <form action="admin-login-valid.php" method='post'> 
                <table id="index-table">
                    <tr>
                           <td><label for="username">USER NAME :</label></td>
                `           <td><input type="text" name="username" ><span></span></td>   
                    </tr>
                    <tr>
                            <td><label for="password"> PASSWORD : </label></td>
                            <td><input type="password" name="password"> </td></td>

                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="login">
                        </td>
                    </tr>
                </table>
                
               
            </form>
        </div>
        

        <?php include 'footer.php'; ?>