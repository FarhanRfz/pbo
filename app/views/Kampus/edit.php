<h2>Edit Kampus</h2>

<form action="<?php echo URL; ?>/kampus/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['kampus_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>KODE POS</td>
            <td><input type="text" name="kode_pos" value="<?php echo $data['row']['kode_pos']; ?>" required></td>
        </tr>
        <tr>
            <td>AKREDITASI</td>
            <td><input type="text" name="akreditasi" value="<?php echo $data['row']['akreditasi']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>