<?php
class Paging{
function cariPosisi($batas){
if(empty($_GET['halkategori'])){
	$posisi=0;
	$_GET['halkategori']=1;
}
else{
	$posisi = ($_GET['halkategori']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<li><a href=halkategori-$_GET[id]-1.html><< First</a> <li> 
                    <li><a href=halkategori-$_GET[id]-$prev.html>< Prev</a> <li> ";
}
else{ 
	$link_halaman .= "<li> <a href=''><< First </a></li> <li><a href=''>< Prev </a></li> ";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<li><a href=halkategori-$_GET[id]-$i.html>$i</a> </li> ";
  }
	  $angka .= " <li class='active'><a href='#'>$halaman_aktif</a><li> ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<li><a href=halkategori-$_GET[id]-$i.html>$i</a> </li> ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href='#'> ...</a></li>  <li><a href=halkategori-$_GET[id]-$jmlhalaman.html>$jmlhalaman</a> </li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <li><a href=halkategori-$_GET[id]-$next.html>Next ></a> </li> 
                     <li><a href=halkategori-$_GET[id]-$jmlhalaman.html>Last >></a></li> ";
}
else{
	$link_halaman .= "<li><a href='#'> Next > </a></li><li><a href='#'> Last >> </a></li>";
}
return $link_halaman;
}
}
class PagingKatering{
function cariPosisi($batas){
if(empty($_GET['halkatering'])){
	$posisi=0;
	$_GET['halkatering']=1;
}
else{
	$posisi = ($_GET['halkatering']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<li><a href=halkatering-1.html><< First</a> <li> 
                    <li><a href=halkatering-$prev.html>< Prev</a> <li> ";
}
else{ 
	$link_halaman .= "<li> <a href=''><< First </a></li> <li><a href=''>< Prev </a></li> ";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<li><a href=halkatering-$i.html>$i</a> </li> ";
  }
	  $angka .= " <li class='active'><a href='#'>$halaman_aktif</a><li> ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<li><a href=halkatering-$i.html>$i</a> </li> ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href='#'> ...</a></li>  <li><a href=halkatering-$jmlhalaman.html>$jmlhalaman</a> </li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <li><a href=halkatering-$next.html>Next ></a> </li> 
                     <li><a href=halkatering-$jmlhalaman.html>Last >></a></li> ";
}
else{
	$link_halaman .= "<li><a href='#'> Next > </a></li><li><a href='#'> Last >> </a></li>";
}
return $link_halaman;
}
}
class PagingUmum{
function cariPosisi($batas){
if(empty($_GET['halumum'])){
	$posisi=0;
	$_GET['halumum']=1;
}
else{
	$posisi = ($_GET['halumum']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<li><a href=halumum-1.html><< First</a> <li> 
                    <li><a href=halumum-$prev.html>< Prev</a> <li> ";
}
else{ 
	$link_halaman .= "<li> <a href=''><< First </a></li> <li><a href=''>< Prev </a></li> ";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<li><a href=halumum-$i.html>$i</a> </li> ";
  }
	  $angka .= " <li class='active'><a href='#'>$halaman_aktif</a><li> ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<li><a href=halumum-$i.html>$i</a> </li> ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href='#'> ...</a></li>  <li><a href=halumum-$jmlhalaman.html>$jmlhalaman</a> </li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <li><a href=halumum-$next.html>Next ></a> </li> 
                     <li><a href=halumum-$jmlhalaman.html>Last >></a></li> ";
}
else{
	$link_halaman .= "<li><a href='#'> Next > </a></li><li><a href='#'> Last >> </a></li>";
}
return $link_halaman;
}
}
class PagingCari{
function cariPosisi($batas){
if(empty($_GET['halcari'])){
	$posisi=0;
	$_GET['halcari']=1;
}
else{
	$posisi = ($_GET['halcari']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<li><a href=halcari-1.html><< First</a> <li> 
                    <li><a href=halcari-$prev.html>< Prev</a> <li> ";
}
else{ 
	$link_halaman .= "<li> <a href=''><< First </a></li> <li><a href=''>< Prev </a></li> ";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<li><a href=halcari-$i.html>$i</a> </li> ";
  }
	  $angka .= " <li class='active'><a href='#'>$halaman_aktif</a><li> ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<li><a href=halcari-$i.html>$i</a> </li> ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href='#'> ...</a></li>  <li><a href=halcari-$jmlhalaman.html>$jmlhalaman</a> </li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <li><a href=halcari-$next.html>Next ></a> </li> 
                     <li><a href=halcari-$jmlhalaman.html>Last >></a></li> ";
}
else{
	$link_halaman .= "<li><a href='#'> Next > </a></li><li><a href='#'> Last >> </a></li>";
}
return $link_halaman;
}
}
?>