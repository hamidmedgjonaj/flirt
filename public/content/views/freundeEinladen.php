<?php require_once(PARTS_FOLDER . "userHeader.php"); ?>
<div class="content clearfix">
    <div class="col-12">
        <div class="table">
            <h2 id="freunde_einladen" class="title">Lade Freunde per E-Mail ein</h2>
        </div>
    </div>
    <div class="col-6">
        <p>Lade einen Freund oder Freundin doch einfach mal zu uns ein. Schreibe einfach eine E-Mail, damit dein Freund bzw. Freundin auch hier her findet.</p>
        <p>Desweiteren werden wir dann euern Freund bzw. Freundin, sofern diese(r) sich mit der angegebenen E-Mail bei uns registriert, gleich zu eurer Freundesliste hinzufügen. Eine extra Freundschaftsanfrage entfällt somit also. Dabei werden wir dann auch euer gemeinsammes Herzthermometer gleich mit 1000 Herzen füllen, so dass ihr dieses schneller zum glühen bringen könnt.</p>
    </div>
    <div class="col-6 bild_table">
        <form>
            <table>
                <tr>
                    <td><p>Mailadresse:</p></td>
                    <td><input type="text" name="Mailadresse" /></td>
                </tr>
                <tr>
                    <td><p>Betreff:</p></td>
                    <td><input type="text" name="Betreff:" /></td>
                </tr>
                <tr>
                    <td>Inhalt:</td>
                    <td><textarea name="Inhalt"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="right" type="submit" value="Absenden" /></td>
                </tr>
            </table>
        </form>
    </div>			
</div>
<?php require_once(PARTS_FOLDER . "footer.php"); ?>