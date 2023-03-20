<!DOCTYPE html>
<html>
    <head>
        <title>PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  

            <form id="update_form" action="users.php" method="POST">
            <table> 
            <input type="hidden" name="updaterowid" value=<?php echo $_POST['inforowid']?> />
                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="updaterowname" value=<?php echo $_POST['inforowname']?>></td>
                </tr> 
                <tr>
                    <td>email :</td>
                    <td><input type="text" name="updaterowemail" value=<?php echo $_POST['inforowemail']?>></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit" /></td>
                </tr>
            </table>
            </form>

           <?php
            $pdo = null;
            ?>
    </body>
</html>

