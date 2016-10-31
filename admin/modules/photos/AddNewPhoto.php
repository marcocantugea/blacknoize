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
?>
<?php
    include '../../../view/admin/headinclude.php';
?>
<?php
    include '../../../view/admin/menuinclude.php';
?>

<h1>Add new Photo</h1>
<h3>Select the new Photo</h3>
<div style="padding: 30px; width:100%; background-color: rgba(255,255,255,.6); text-align: center">
    <form id="invoiceuplader" enctype="multipart/form-data" name="invoiceuplader" action="uploadphoto.php" method="post" >
    <input style="margin-left: 30%" id="fileselected" type="file" name="fileselected" accept="image" /><br/><br/>
    <button>Upload Photo</button>
</form>
</div>

<?php
include '../../../view/admin/footerinclude.php';
?>
