<?php
function upPrimary($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/produk_img/gambarPrimary/height/";
  $upDir_m = "../../../gambar/produk_img/gambarPrimary/medium/";
  $upDir_s = "../../../gambar/produk_img/gambarPrimary/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 100;
  $rstHeight= 122;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 420;
  $rstHeight2 = 512;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upGambarDepan($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/produk_img/gambarDepan/height/";
  $upDir_m = "../../../gambar/produk_img/gambarDepan/medium/";
  $upDir_s = "../../../gambar/produk_img/gambarDepan/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhotoDepan"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 100;
  $rstHeight = 122;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 420;
  $rstHeight2 = 512;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upGambarBelakang($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/produk_img/gambarBelakang/height/";
  $upDir_m = "../../../gambar/produk_img/gambarBelakang/medium/";
  $upDir_s = "../../../gambar/produk_img/gambarBelakang/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhotoBelakang"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 100;
  $rstHeight =122;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 420;
  $rstHeight2 =512;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upGambarKiri($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/produk_img/gambarKiri/height/";
  $upDir_m = "../../../gambar/produk_img/gambarKiri/medium/";
  $upDir_s = "../../../gambar/produk_img/gambarKiri/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhotoKiri"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 100;
  $rstHeight = 122;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 =420;
  $rstHeight2 =512;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upGambarKanan($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/produk_img/gambarKanan/height/";
  $upDir_m = "../../../gambar/produk_img/gambarKanan/medium/";
  $upDir_s = "../../../gambar/produk_img/gambarKanan/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhotoKanan"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 100;
  $rstHeight = 122;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 420;
  $rstHeight2=512;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}


?>