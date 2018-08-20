<h3>Nama Barang</h3>
<table border="1">
    <tr><th>no</th><th>nama Barang</th><th>Kategori Barang</th><th>Harga</th><th colspan="2">Operasi</th></tr>
<?php
$no=1;
foreach ($record as $r)
{
    echo "<tr>"
    . "<td>$no</td>"
    . "<td>$r->nama_barang</td>"
    . "<td>$r->nama_kategori</td>"
    . "<td>$r->harga</td>"
    . "<td>".anchor('kategori/edit'.$r->barang_id,'edit')."</td>"
    . "<td>".anchor('kategori/delete'.$r->barang_id,'delete')."</td>"
    . "</tr>";
    $no++;
}
?>
</table>

