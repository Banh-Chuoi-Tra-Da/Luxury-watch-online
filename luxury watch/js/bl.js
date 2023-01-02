
var btn_tang = document.querySelector('#soluong button:nth-child(2)');
var btn_giam = document.querySelector('#soluong button:nth-child(5)');
var soluong = document.querySelector('#soluong input:nth-child(3)');
btn_tang.addEventListener('click', () => {
    soluong.value++;
});
btn_giam.addEventListener('click', () => {
    if (soluong.value != 1) {
        soluong.value--;
    }
})
