<?php include "libraries/referer.php"; ?>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM gerindra_pac WHERE id='$id'";
    $data = $db->fetchdata($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "subviews/meta.php"; ?>
        <?php //include "subviews/css.php"; ?>
        
        <script src="includes/js/jquery.js"></script>
        <style>
            .border{
                width: 100%;
            }
            .border td{
                padding: 10px 0 5px 10px;
                border-top: 1px solid #000;
            }
            .bordered{
                border: 1px solid #000;
                border-collapse: separate;
                border-top: 0;
                border-left: 0;
            }
            .bordered td{
                border-left: 1px solid #000;
            }
        </style>
    </head>
    <body>
<!--        <b>Lampiran</b><br><br>-->
        <span style="padding-left: 1em;">b. Untuk PAC</span><br>
        <span style="padding-left: 2em;">b.1. DATA UMUM KECAMATAN &nbsp;<?php echo $data['kecamatan']; ?></span>
        <br><br>

        
        <table class="border bordered" >
            <tr>
                <td width="35%">Nama Kecamatan <span style="float: right">:</span></td>
                <td><?php echo $data['kecamatan']; ?></td>
            </tr>
            <tr>
                <td>Jumlah Desa <span style="float: right">:</span></td>
                <td><?php echo $data['jml_desa']; ?></td>
            </tr>
            <tr>
                <td>Jumlah Kelurahan <span style="float: right">:</span></td>
                <td><?php echo $data['jml_kelurahan']; ?></td>
            </tr>
            <tr>
                <td>Jumlah Ranting yang telah terbentuk<span style="float: right">:</span></td>
                <td><?php echo $data['jml_ranting']; ?></td>
            </tr>
        </table>
    </body>
</html>