<?php require_once(PARTS_FOLDER . "userHeader.php"); ?>
<div class="content clearfix">
    <div class="col-12">
        <div class="table">
            <h2 id="meine_bilder" class="title">Meine Bilder verwalten</h2>
        </div>
    </div>
    <div class="col-6">
        <p>Hier kannst du nun Bilder von dir hochladen und mit kommentaren versehen. Es dürfen nur JPEG Bilder dazu verwendet werden welche nicht grösser als 1MB sind. Andere Mitglieder könen dann dazu auch Kommentare abgeben bzw. die Bilder bewerten.</p>
    </div>
    <div class="col-6 bild_table">
        <form>
            <table>
                <tr>
                    <td><p>Bild</p></td>
                    <td><input type="file" name="Choose File" /></td>
                </tr>
                <tr>
                    <td><p>Titel</p></td>
                    <td><input type="text" name="Title" /></td>
                </tr>
                <tr>
                    <td>Kommentar</td>
                    <td><textarea name="Kommentar"></textarea></td>
                </tr>
                <tr>
                    <td>Privatsphäre</td>
                    <td>
                        <div class="half">
                            <label>Ich bin</label>
                            <input type="radio" name="bin" value="Mann"><span>Mann</span>
                            <input type="radio" name="bin" value="Frau"><span>Frau</span>
                        </div>
                        <div class="half right">
                            <label>Ich suche</label>
                            <input type="radio" name="suche" value="Mann"><span>Mann</span>
                            <input type="radio" name="suche" value="Frau"><span>Frau</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="right" type="submit" value="Bild hochladen" /></td>
                </tr>
            </table>
        </form>
    </div>			
</div>
<?php require_once(PARTS_FOLDER . "footer.php"); ?>