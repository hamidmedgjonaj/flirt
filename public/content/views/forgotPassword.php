<?php
require_once(CONTROLLERS_FOLDER . "forgotPassword.php");
require_once(PARTS_FOLDER . "header.php");
?>
<div class="content clearfix">
    <div class="col-12">
        <div class="table">
            <h2 class="title">Passwort vergessen</h2>
        </div>				
    </div>
    <div class="col-6 center">
        <?php if ($newPassword) { ?>
            <p>Write your new password</p>
            <form method="post">
                <label>New Password:</label>
                <input type="password" name="new_password" />
                <input type="submit" value="Save Password" />
            </form>
        <?php } ?>

        <?php if ($postEmailStatus) { ?> 
            <p>You will receive information about reseting your password.</p>
            <form method="post">
                <label>E-mail:</label>
                <input type="text" name="reset_email" />
                <input type="submit" value="Passwort zusenden" />
            </form>
        <?php } ?>
            
        <?php if($error) print "<p>".$error."<p>"; ?>
        <?php if($alert) print "<p>".$alert."<p>"; ?>
    </div>
</div><!-- content -->
<?php require_once(PARTS_FOLDER . "footer.php"); ?>

