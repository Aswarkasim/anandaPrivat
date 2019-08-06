<?php
$konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');

?>

<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if (isset($title)) {
                echo $title;
            } else {
                echo $konfigurasi->nama_web;
            } ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/normalize.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/scrollbar.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/fontawesome/fontawesome-all.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/linearicons.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/tipso.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/chosen.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/prettyPhoto.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/main.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/color.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/transitions.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>css/responsive.css">
    <script src="<?= base_url('assets/')  ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<?php
$email = $this->session->userdata('id_user');
$is_aktif = $this->session->userdata('is_aktif');
?>

<?php if ($email && $is_aktif) { ?>

    <body class="wt-login">
    <?php  } else { ?>

        <body class="">
        <?php } ?>

        <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Preloader Start -->
        <!-- <div class="preloader-outer">
        <div class="loader"></div>
    </div> -->
        <!-- Preloader End -->
        <!-- Wrapper Start -->
        <div id="wt-wrapper" class="wt-wrapper wt-haslayout">
            <!-- Content Wrapper Start -->
            <div class="wt-contentwrapper">