window.addEventListener('DOMContentLoaded', (event) => {
    //Remove fungsi upload attachment pada trix WYSIWYG editor
    const attachButton = document.querySelector('.trix-button--icon-attach');
    attachButton.remove();

    //Ubah tulisan pada tombol submit trix editor
    document.querySelector('input[type=submit]').value = 'Update Konten';
});