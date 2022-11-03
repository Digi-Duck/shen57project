const dialog = document.querySelector('.show-dialog')
const openbtn = document.querySelector('.qrcode-open')
const closebtn = document.querySelector('.qrcode-close')

function openwindow(){
    dialog.showModal();
}
function closewindow(){
    dialog.close();
}
// 點擊視窗外空白處可取消視窗
const linebox = document.querySelector('.linebox')

dialog.onclick = function(bodyclose){
    if(bodyclose.target == linebox){
        dialog.close();
    }
}