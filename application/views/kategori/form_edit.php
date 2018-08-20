<h3>Edit Data Kategori</h3>
<?php
echo form_open('kategori/edit');
?>
<input type="text" value=""<?php echo $record['kategori_id']?>" name="id">
<table border="1">
    <tr><td>Nama Kategori</td><td><input type="text" name="kategori" placeholder="kategori" 
                                         value="<?php echo $record['nama_kategori']?>"</td></tr>
    <tr><td cosplan="2"><button type="submit" name="submit">Simpan</button></td></tr> 
</table>
</form>
