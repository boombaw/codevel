<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * cms_helper.php
 * 
 * Copyright - 2014 
 * @author Inp <mrboombaw32@gmail.com>
 * 
 * Helper sistem CMS .
 * Lisensi : Non-commercial, harus mendapat persetujuan dari author.
 * 
 */

function debug($value='')
{
	echo "<pre>";
	print_r($value);
	die();
}

function cek($value=null,$val=0){
	switch ($val) {
		case '0':
			var_dump($value);
			break;
		case '1':
			echo "<pre>";
			print_r($value);
			break;
		case '2':
			echo "<pre>";
			print_r($value);
			die();
			break;
		case '3':
			echo "<pre>";
			var_dump($value);
			die();
			break;
		case '4':
			echo "<pre>";
			print_r($_POST);
			die();
			break;
		case '5':
			echo "<pre>";
			print_r($_REQUEST);
			die();
			break;
	}
}


function cek_koneksi_internet($timeout=2,$url='') 
{
	$status;
	
	if(ENVIRONMENT == 'development' || ENVIRONMENT == 'testing' || ENVIRONMENT == 'staging')
	{
		if (empty($url))
		$conn = @fsockopen("www.php.net", 80, $errno, $errstr, $timeout);
		else
		$conn = @fsockopen($url, 80, $errno, $errstr, $timeout);
		
		if ($conn)
		{
			fclose($conn);
		}
		else
		{
			$status = FALSE;
		}
	}
	else
		$status = TRUE;
	
	return $status; 
}

/*
 * cms_helper.php
 * 
 * Copyright - 2014 
 * @author Inp <fun9uy5@gmail.com>
 * 
 * Helper sistem CMS untuk proyek i4n-CMS.
 * Lisensi : Non-commercial, harus mendapat persetujuan dari author.
 * 
 */
 
// format rupiah
function format_harga_indo($nilai='')
{
	return number_format($nilai, 0,'','.');
}

function format_harga_ar($nilai='')
{	
	if($nilai < 0)
	{
		$nilai = "(".abs($nilai).")";
		return $nilai;

	}
	return number_format($nilai, 0,'','.');
}
function format_tgl_indo($tgl='')
{
	return date('d-m-Y H:i:s', strtotime($tgl));
}

function format_tgl_sql($tgl='')
{
	return date('Y-m-d H:i:s', strtotime($tgl));
}

function format_tgl_indo_jq($tgl='')
{
	return date('d-m-Y', strtotime($tgl));
}

function format_tgl_only_jq($tgl='')
{
	return date('j', strtotime($tgl));
}

function format_tgl_jq($tgl='')
{
	return date('Y-m-d', strtotime($tgl));
}

function konversi_hari($jmlHari='')
{
	$tahun = $jmlHari / 365;
	$sisahari = $jmlHari % 365;
	$bulan = $sisahari / 30;
	$hari = $sisahari % 30;

	$bulan = floor($bulan);
	$str = 'Kontrak Habis '.$bulan.' Bulan '.$hari.' hari lagi';
	return $str;
}


function json_change_key($arr, $oldkey, $newkey) {
 $json = str_replace('"'.$oldkey.'":', '"'.$newkey.'":', json_encode($arr));
 return json_decode($json); 
}