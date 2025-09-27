document.querySelectorAll('.BtntDetail').forEach(item => {
item.addEventListener('click',(e) => {
    let gambar = document.querySelector('.card-img-top').src;
    console.log (`gambar: ${gambar}`);
});
});