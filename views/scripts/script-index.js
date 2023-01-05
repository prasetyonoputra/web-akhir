// Munculkan image saat upload
let imageButton = document.getElementById("gambar");
let imageUpload = document.getElementById("image-upload");
imageButton.onchange = evt => {
    const [file] = imageButton.files
    if (file) {
        imageUpload.src = URL.createObjectURL(file);
    }
}