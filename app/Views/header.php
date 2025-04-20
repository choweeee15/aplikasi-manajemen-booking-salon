<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="author" content="E-Parkir">
    <title><?= $title ?? 'Aplikasi Manajemen' ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/fontawesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/all.min.css') ?>">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/select2.min.css') ?>">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/datatables.min.css') ?>">

    <!-- Feather Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/feather/feather.css') ?>">

    <!-- Daterangepicker CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css') ?>">

    <!-- Main Style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- JS Scripts -->
    <script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
</head>

<body>
    <div class="main-wrapper">
        <header>
            <div id="google_translate_element"></div>
        </header>
    </div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                includedLanguages: 'en,es,fr,de,ja,id',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>


<!-- <script>
    var timeout =30; 
setTimeout(function(){
    window.location.href ="<?=site_url('gudang/logout')?>";
}, timeout * 1000);
</script> -->


</html>
