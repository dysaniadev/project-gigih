<script>
    <?php if (session('success')) { ?>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            showConfirmButton: false,
            timer: 1000
        })
    <?php } elseif (session('warning')) { ?>
        Swal.fire({
            icon: 'warning',
            title: 'Peringatan',
            showConfirmButton: false,
            timer: 1000
        })
    <?php } elseif (session('danger')) { ?>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            showConfirmButton: false,
            timer: 1000
        })
    <?php } ?>
</script>