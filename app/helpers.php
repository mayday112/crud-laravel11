<?php

namespace App;

function jenisKelaminText($jk)
{
	// ubah mejadi huruf besar
	$jk = strtoupper($jk);

  // cek isi
  if ($jk == 'L') {
    return "Laki-Laki";
  }

  return "Perempuan";
}
