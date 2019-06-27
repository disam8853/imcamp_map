$('#btn1').css('top','5vmax');
$('#btn1').css('left','50vmax');

var show = [false,false];
var currentShow = -1;
function popup(index) {
    console.log(index, show[index]);
    currentShow = index;
    if(show[index]) {
        $('#team'+index).hide();
    } else {
        $('#team'+index).show();
    }
    show[index] = !show[index];
}

function wrp(i) {
    return ()=>{
        popup(i);
    };
}
function goback() {
    if(currentShow != -1) {
        $("#team"+currentShow).hide();
        show[currentShow] = false;
    }
    currentShow = -1;
}
for(let i=1;i<=1;++i) {
    $("#btn"+i).on("click",wrp(i));
}