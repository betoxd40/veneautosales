$( document ).ready(function() {
    var file;
    $('input[type=file]').change(function () {

        var idInput=$(this).attr('id');
        var files=this.files;
        $('#'+idInput+' + div').html(" ");
        for (var i = 0, f; f = files[i]; i++) {
            //Solo admitimos imágenes.
            if (!f.type.match('image.*')) {
                continue;
            }
            var reader = new FileReader();

            reader.onload = (function(theFile) {
                return function(e) {
                    // Insertamos la imagen
                    console.log(e.target.result);
                    $('#'+idInput+' + div').append('<img src="'+e.target.result+'" class="img-thumb mx-3" />');
                };
            })(f);

            reader.readAsDataURL(f);
        }
    });

});