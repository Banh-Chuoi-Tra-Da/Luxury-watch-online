

//binh luan
Boolean = true;
function hienthi(element, bool, display1, display2) {
    if (bool == true) {
        element.style.display = display1;
    } else {
        element.style.display = display2;
    }
}
var btn_sua_xoa = document.getElementById('sua_xoa');
var ul_sua_xoa = document.getElementById('ul_sua_xoa');
console.log(ul_sua_xoa);
btn_sua_xoa.addEventListener('click', () => {
    Boolean = !Boolean;
    hienthi(ul_sua_xoa, Boolean, 'none', 'block')
})

var sua_binh_luan = document.getElementById('sua_binh_luan');
var click_sua_binh_luan = document.getElementById('click_sua_binh_luan');
click_sua_binh_luan.addEventListener('click', (event) => {
    event.preventDefault;
    Boolean = !Boolean;
    hienthi(sua_binh_luan, Boolean, 'none', 'block');
})
