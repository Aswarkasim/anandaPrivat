const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
    Swal({
        title: 'Data',
        text: flashdata,
        type: 'success'
    })
}

const flashdata_login = $('.gagal-login').data('flashdata');

if (flashdata_login) {
    Swal({
        title: 'Gagal !',
        text: flashdata_login,
        type: 'error'
    })
}


// Tommbol hapus
$('.tombol-hapus').on('click', function (e) {
    // Mematikan href
    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin ingin menghapus?',
        text: "data akan dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
})


// Tommbol ubah status
$('.tombol-ubah-status').on('click', function (e) {
    // Mematikan href
    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Ubah Status kursus?',
        text: "status akan diubah",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ubah Status'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
})

// Tommbol ubah status
$('.tombol-batal-order').on('click', function (e) {
    // Mematikan href
    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah pemesanan akan dibatalkan',
        text: "",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Batalkan'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
})




