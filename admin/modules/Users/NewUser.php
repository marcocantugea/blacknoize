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

<form id="NewUser" method="post" action="addnew.php">
    <div class="addnew" style="width: 500px;">
        <h3>Add New User</h3>
        <table style="width: 100%">
            <tr>
                <td>User Login:</td>
                <td><input type="text" id="newuser" name="newuser" value="" style="margin: 5px;" ></td>
            </tr>
            <tr>
                <td>User Password:</td>
                <td><input type="text" id="newpass" name="newpass" value="" style="margin: 5px;" ></td>
            </tr>
            <tr>
                <td>User Email:</td>
                <td><input type="text" id="newuseremail" name="newuseremail" value="" style="margin: 5px;" ></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="hidden" name="token" value="<?php echo $token; ?>">
                    <input type="hidden" name="active" value="1">
                    <button id="saveuser" style="width: 80%; margin-top: 10px;" >Save User</button>
                </td>
            </tr>
        </table>
    </div>
</form>

<?php
include '../../../view/admin/footerinclude.php';
?>