<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
 <?php require_once 'partials/header.php'?>
<body>

<div class="container">
    <h4 class="col-md-12 text-right" style="margin-top: 50px;">Listagem de Posts</h4>

    <div class="row" style="margin: 20px 0">
        <?php require_once 'partials/menu.php' ?>
    </div>

    <!-- <table id="table" class="table">
        <thead>
        <tr>
            <th data-id="id" data-width="40px">ID</th>
            <th data-orderable="true" data-id="title">Título</th>
            <th data-id="treated_datetime">Data de cadastro</th>
        </tr>
        </thead>
    </table> -->

        <!-- Table Matheus Pavanetti-->
    <table id="postTable" class="table table-striped">
        <thead>
            <tr>
                <td><b>Id do Post</b></td>
                <td><b>Título</b></td>
                <td><b>Data de Cadastro</b></td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
<!-- // Table Matheus Pavanetti-->
</div>

</body>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/datatables/datatables.min.css"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datatables/datatables.min.js"></script>

<!-- <script src="<?php echo base_url(); ?>public/js/dtables.js"></script>
<script src="<?php echo base_url(); ?>public/js/postlist.js"></script> -->

<!-- JS File Matheus Pavanetti -->
<script src="<?php echo base_url(); ?>public/js/postTable.js"></script>

</html>