function readURL(input) {
    if (input.files && input.files[0]) {
        var ext = input.files[0].name.substr(input.files[0].name.lastIndexOf('.') + 1);
        ext = ext.toLowerCase();
        if (ext != 'jpg') {
            alert('請放置 jpg 圖檔');
            $(input).val('');
            $('.image-upload-wrap').removeClass('image-dropping');
            return;
        }

        var reader = new FileReader();
        reader.onload = function(e) {
            $('.image-upload-wrap').hide();
            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();
            $('.image-title').html(input.files[0].name);
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        removeUpload();
    }
}
function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').removeClass('image-dropping');
    $('.image-upload-wrap').show();
    $('.file-upload-input').val('');
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
});
$('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});