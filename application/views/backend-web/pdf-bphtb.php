
<!DOCTYPE html>
<html>
<head>
<style>
#myDIV{
  text-decoration: underline;
  text-decoration-style:dashed;
}
@font-face {
    font-family: "DotMatrix-TwoExtended";           
    src:url("<?php echo site_url();?>assets/fonts/DotMatrix-TwoExtended.ttf") format("truetype");
    font-weight: normal;
    font-style: normal;

}    

p.mix {border-style: dashed hidden hidden hidden;}
.right {text-align:right;}

table, th, td {
  border: none;
  border-collapse: collapse;
  font-family: "DotMatrix-TwoExtended";
  font-size:12px;
}
</style>
</head>
<body>

<table style="width:100%">
  <tr>
    <td style="width:75%">USER ID : <?php echo $print[0]->id_backend_users; ?></td>
    <td>TGL CETAK :</td>
    <td><?php echo date("d/m/Y"); ?></td>
  </tr>
  <tr>
    <td>BANK BJB</td>
    <td>JAM CETAK :</td>
    <td><?php echo date("H:i:s"); ?></td>
  </tr>
  <tr>
    <td>KODE CABANG : 0031</td>
    
  </tr>
  <tr>
    <td><?php echo $print[0]->kd_tempat?></td>
    
  </tr>
  <tr>
    <td><?php echo $print[0]->nama_tempat?></td>
    
  </tr>
</table>
<BR>
<table style="width:100%">
  <tr>
    <td style="width:75%">BUKTI PEMBAYARAN/SETORAN BPHTB</td>
    
  </tr>
  <tr>
    <td>PEMERINTAH KABUPATEN CIREBON</td>
    
  </tr>
  
</table>

<p class="mix"></p>
<table style="width:100%">
  <tr>
    <td style="width:26%">TANGGAL TRANSAKSI</td>
    <td style="width:1%">:</td>
    <td style="width:31%"><?php echo date("d/m/Y", strtotime($print[0]->created_date));?> (DD/MM/YY)</td>
    <td style="width:21%">JAM TRANSAKSI</td>
    <td style="width:1%">:</td>
    <td style="width:20%"><?php echo substr($print[0]->created_date,-8);?></td>
  </tr>
  <tr>
    <td style="width:26%">NOMOR TRANSAKSI</td>
    <td style="width:1%">:</td>
    <td style="width:31%"><?php echo $print[0]->ntb; ?></td>
    <td style="width:21%">NOMOR SEQUENCE</td>
    <td style="width:1%">:</td>
    <!-- <td style="width:20%"><?php echo $print[0]->no_sequence; ?></td> -->
    <td style="width:20%"><?php echo $print[0]->idtb_backend_wajib_pajak_bphtb; ?></td>
  </tr>
  <tr>
    <td style="width:26%">JENIS TRANSAKSI</td>
    <td style="width:1%">:</td>
    <!-- <td style="width:31%"><?php echo str_pad($print[0]->ntp, 12, '0', STR_PAD_LEFT); ?></td> -->
    <td style="width:31%"><?php echo str_pad($print[0]->id_backend_trx, 12, '0', STR_PAD_LEFT); ?></td>
    <td style="width:21%">NOMOR BAYAR</td>
    <td style="width:1%">:</td>
    <td style="width:20%"><?php echo $print[0]->kd_bayar; ?></td>
  </tr>
  
</table>
<table style="width:100%">
  <tr>
    <td style="width:26%">NOP</td>
    <td style="width:1%">:</td>
    <td style="width:42%"><?php echo $print[0]->nop; ?></td>
    <td style="width:10%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>  
</table>
<table style="width:100%">
    <tr>
    <td style="width:26%">KELURAHAN</td>
    <td style="width:1%">:</td>
    <td style="width:31%"><?php echo $print[0]->kel_objek_pajak; ?></td>
    <td style="width:21%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>
  <tr>
    <td style="width:26%">KECAMATAN</td>
    <td style="width:1%">:</td>
    <td style="width:31"><?php echo $print[0]->kec_objek_pajak; ?></td>
    <td style="width:21%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>
  <tr>
    <td style="width:26%">LUAS TANAH</td>
    <td style="width:1%">:</td>
    <td style="width:31"><?php echo $print[0]->luas_tanah; ?> m<sup>2</sup></td>
    <td style="width:1%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>
  <tr>
    <td style="width:26%">LUAS BANGUNAN</td>
    <td style="width:1%">:</td>
    <td style="width:31"><?php echo $print[0]->luas_bangunan; ?> m<sup>2</sup></td>
    <td style="width:21%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>
  <tr>
    <td style="width:26%">NPOP</td>
    <td style="width:1%">:</td>
    <td style="width:31">RP. <?php echo number_format($print[0]->npop, 2, '.', ',');?></td>
    <td style="width:21%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>
  <tr>
    <td style="width:26%">DENDA</td>
    <td style="width:1%">:</td>
    <td style="width:31">RP. <?php echo number_format($print[0]->tagihan_denda, 2, '.', ',');?></td>
    <td style="width:21%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>
  <tr>
    <td style="width:26%">ADMIN</td>
    <td style="width:1%">:</td>
    <td style="width:31">RP. <?php echo number_format($print[0]->admin_bank, 2, '.', ',');?></td>
    <td style="width:21%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>
  <tr>
    <td style="width:26%">BPHTB YANG DIBAYAR</td>
    <td style="width:1%">:</td>
    <td style="width:31">RP. <?php echo number_format($print[0]->tagihan_pokok, 2, '.', ',');?></td>
    <td style="width:21%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>
  <tr>
    <td style="width:26%">TOTAL YANG DIBAYAR</td>
    <td style="width:1%">:</td>
    <td style="width:31">RP. <?php echo number_format($print[0]->admin_bank + $print[0]->tagihan_pokok + $print[0]->tagihan_denda, 2, '.', ',');?></td>
    <td style="width:21%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>
  <tr>
    <td style="width:26%">TERBILANG</td>
    <td style="width:1%">:</td>
    <td style="width:31"><?php echo $print[0]->terbilang;?></td>
    <td style="width:21%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>
</table>
<BR>
<table style="width:100%">
  <tr>
    <td style="width:26%">NAMA WAJIB PAJAK</td>
    <td style="width:1%">:</td>
    <td style="width:31"><?php echo $print[0]->nama_wajib_pajak;?></td>
    <td style="width:21%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>

  <tr>
    <td style="width:26%">ALAMAT WAJIB PAJAK</td>
    <td style="width:1%">:</td>
    <td><?php echo $print[0]->alamat_wajib_pajak; ?></td>
    
  </tr>
  <tr>
    <td style="width:26%">KTP/NIK</td>
    <td style="width:1%">:</td>
    <td style="width:31"></td>
    <td style="width:21%"></td>
    <td style="width:1%"></td>
    <td style="width:20%"></td>
  </tr>
</table>

<table style="width:100%">
  <tr>
    <td><p class="mix"></p></td>
  </tr>
  <tr>
    <td>* BUKTI PEMBAYARAN/SETORAN INI HARAP DISIMPAN SEBAGAI BUKTI PEMBAYARAN YANG SAH *</td>
  </tr>
</table>
<script>
  window.print();
  </script>
</body>
</html>
