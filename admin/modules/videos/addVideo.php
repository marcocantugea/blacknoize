<!DOCTYPE html>
<!--
Copyright (C) 2016 MarcoCantu

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<?php
    include "topinclude.php";
    $SessionUser= unserialize($_SESSION['UserObj']);
    $SessionUser->GenerateToken();
    $token=$SessionUser->token;
    
?>
<?php
    include '../../../view/admin/headinclude.php';
?>
<?php
    include '../../../view/admin/menuinclude.php';
?>

<div style="width: 100%;text-align: center">
        <h3>Add New Video</h3>
            <form method="post" action="addvideos.php" >
                <label>Title:</label>&nbsp;<input type="text" value="" name="title" style="width:  80%">
                <br/>
                <br/>
                <label>Link:</label>&nbsp;<textarea name="link" style="width:  80%"></textarea>
                <br/>
                <br/>
                <input  type="checkbox" value="1" name="showonpage"> Show in Web Page
                <br/>
                <br/>
                <input type="hidden" value="<?php echo $token?>" name="token" />
                <input type="hidden" value="1" name="active" />
                <button style="width: 50%">Save Video</button>
            </form>
</div>

<?php
include '../../../view/admin/footerinclude.php';
?>