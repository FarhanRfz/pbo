<h2>Input Kampus</h2>

<form action="<?php echo URL; ?>/kampus/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>KODE POS</td>
            <td><input type="text" name="kode_pos" required></td>
        </tr>
        <tr>
            <td>AKREDITASI</td>
            <td><input type="text" name="akreditasi" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>