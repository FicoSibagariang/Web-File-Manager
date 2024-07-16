<?php

// app/Helpers/my_helper.php

if (!function_exists('greet')) {
    function greet($name)
    {
        return "Hello, " . $name;
    }
}

function show_my_modal($content = null, $data = null)
{
    if ($content != null) {
        $view_content = view($content, $data);
        return $view_content;
    }
}

function tgl_indonesia($date)
{
    /* array hari dan bulan */
    $nama_hari  = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");

    $nama_bulan = array(
        "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober",
        "November", "Desember"
    );

    /*  Memisahkan format tanggal, bulan, tahun dengan substring */
    $tahun   = substr($date, 0, 4);
    $bulan   = substr($date, 5, 2);
    $tanggal = substr($date, 8, 2);
    $waktu   = substr($date, 11, 5);

    //w Urutan hari dalam seminggu
    $hari    = date("w", strtotime($date));

    // $result  = $nama_hari[$hari] . ", " . $tanggal . " " . $nama_bulan[(int)$bulan - 1] . " " . $tahun . " " . $waktu . " WIB";
    $result  = $tanggal . " " . $nama_bulan[(int)$bulan - 1] . " " . $tahun;
    //keterangan (int)$bulan-1 karena array dimulai dari index ke 0 maka bulan-1
    return $result;
}

function anti_injection($data)
{
    $filter = stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
    return $filter;
}

function slug($s)
{
    $c = array(' ');
    $d = array('-', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d

    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}


function rupiah($nominal)
{
    return number_format($nominal, 0, ',', '.');
}

/** login codeIgniter menggunakan bycrypt **/

if (!function_exists('get_hash')) {
    function get_hash($PlainPassword)
    {
        $option = [
            'cost' => 5, // proses hash sebanyak: 2^5 = 32x
        ];
        return password_hash($PlainPassword, PASSWORD_DEFAULT, $option);
    }
}

if (!function_exists('hash_verified')) {
    function hash_verified($PlainPassword, $HashPassword)
    {
        return password_verify($PlainPassword, $HashPassword) ? true : false;
    }
}

/** login codeIgniter menggunakan bycrypt **/

function tampil_media($file, $width = "", $height = "")
{
    $ret = '';

    $pc_file = explode(".", $file);
    $eks = end($pc_file);

    $eks_video = array("mp4", "flv", "mpeg");
    $eks_audio = array("mp3", "acc");
    $eks_image = array("jpeg", "jpg", "gif", "bmp", "png");


    if (!in_array($eks, $eks_video) && !in_array($eks, $eks_audio) && !in_array($eks, $eks_image)) {
        $ret .= '';
    } else {
        if (in_array($eks, $eks_video)) {
            if (is_file("./" . $file)) {
                $ret .= '<p><video width="' . $width . '" height="' . $height . '" controls>
                <source src="' . base_url() . $file . '" type="video/mp4">
                <source src="' . base_url() . $file . '" type="application/octet-stream">Browser tidak support</video></p>';
            } else {
                $ret .= '';
            }
        }

        if (in_array($eks, $eks_audio)) {
            if (is_file("./" . $file)) {
                $ret .= '<p><audio width="' . $width . '" height="' . $height . '" controls>
				<source src="' . base_url() . $file . '" type="audio/mpeg">
				<source src="' . base_url() . $file . '" type="audio/wav">Browser tidak support</audio></p>';
            } else {
                $ret .= '';
            }
        }

        if (in_array($eks, $eks_image)) {
            if (is_file("./" . $file)) {
                $ret .= '<img class="thumbnail w-100" src="' . base_url() . $file . '" style="width: ' . $width . '; height: ' . $height . ';">';
            } else {
                $ret .= '';
            }
        }
    }
    return $ret;
}
