$(document).ready(function() {

    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        // menculkan icon loading
        $('.loading').show();

        // ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        // $.get()
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data) {
            // menghilangkan icon loading
            $('.loading').hide();
            // menampilkan data hasil pencarian
            $('#container').html(data);
        });
    });

});

