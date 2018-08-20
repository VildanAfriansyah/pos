<h3>Kategori Barang</h3>
<table border="1">
    <tr><th>no</th><th>nama Kategori</th><th colspan="2">Operasi</th></tr>
<?php
$no=1;
foreach ($record->result() as $r)
{
    echo "<tr>"
    . "<td>$no</td>"
    . "<td>$r->nama_kategori</td>"
    . "<td>".anchor('kategori/edit'.$r->kategori_id,'edit')."</td>"
    . "<td>".anchor('kategori/delete'.$r->kategori_id,'delete')."</td>"
    . "</tr>";
    $no++;
}
?>
</table>