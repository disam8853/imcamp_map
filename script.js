$('#btn1').css('top','5vmax');
$('#btn1').css('left','50vmax');

var show = [false,false];
var currentShow = -1;
function popup(index) {
    console.log(index, show[index]);
    currentShow = index;
    if(show[index]) {
        $('#team'+index).hide();
        $('#mapimg').show();
    } else {
        $('#team'+index).show();
        $('#mapimg').hide();
    }
    show[index] = !show[index];
}

function goback() {
    if(currentShow != -1) {
        $("#team"+currentShow).hide();
        $('#mapimg').show();
        show[currentShow] = false;
    }
    currentShow = -1;
}
for(let i=1;i<=1;++i) {
    $("#btn"+i).on("click",()=>{popup(i)});
}