<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

<!-- Plugin -->
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js"></script>
<script>
    // ready
    $(function() {
        $('#jantina').on('change', function() {
            if ($(this).is(':checked')) {
                $('#jantinaLelaki').show();
                $('#jantinaPerempuan').hide();
            } else {
                $('#jantinaLelaki').hide();
                $('#jantinaPerempuan').show();
            }
        });
        if ($('#jantina').is(':checked')) {
            $('#jantinaLelaki').show();
            $('#jantinaPerempuan').hide();
        } else {
            $('#jantinaLelaki').hide();
            $('#jantinaPerempuan').show();
        }
    });

    function tambah(id) {
        var nilai = parseInt(document.getElementById(id).value);
        if (id == 'iISTERI') {
            if (nilai < 4) {
                document.getElementById(id).value = nilai + 1;
            }
        } else {
            document.getElementById(id).value = nilai + 1;
        }
    }

    function kurang(id) {
        var nilai = parseInt(document.getElementById(id).value);
        if (nilai > 0) {
            document.getElementById(id).value = nilai - 1;
        }
    }

    
</script>
</body>

</html>