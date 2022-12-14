</body>
<?php if (!empty(session()->getFlashData('error'))) { ?>
    <script>
        Swal.fire({
            title: 'Error!',
            text: '<?= session()->getFlashData('error') ?>',
            icon: 'error',
            confirmButtonText: 'Ok'
        })
    </script>
<?php } ?>

<!-- plugin for charts  -->
<script src="<?= base_url('asset/soft-ui/build/') ?>/assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="<?= base_url('asset/soft-ui/build/') ?>/assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="<?= base_url('asset/soft-ui/build/') ?>/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>

<script src="<?= base_url('asset/js/jquery-3.6.1.min.js') ?>"></script>
<script src="<?= base_url('asset/js/groubClass.js') ?>"></script>

</html>