var tops= [35, 43, 55, 31, 29, 28, 22, 24, 30, 52];
var lefts=[14, 13,  7, 33, 47, 52, 66, 76, 71, 83];

var tri = "V3pJeUxESTNMREkzTERRd0xETTNMRFF3TERNekxETXpMaklzTXpjc016Y3VNMTA9";
var vago = "V3pZc09DdzBMRFEyTERRNExEUTRMalVzTnpFc056UXNOekF1Tnl3M05GMD0=";

var defaultShow = '#map';
var currentShow = defaultShow;
function showTeam(i) {
    $('.teamimg').attr('src', 'img/teams/Team'+i+'/bg.png');
    showup('#team');
}

function showup(e) {
    $(currentShow).hide();
    $(e).css('display', 'block');
    $('#btnback').show();
    currentShow = e;
}

function goback() {
    if(currentShow != defaultShow) {
        $(currentShow).hide();
        $(defaultShow).show();
        $('#btnback').hide();
    }
    currentShow = defaultShow;
}
for(let i=1;i<=10;++i) {
    $('#btn'+i).css('top', tops[i-1]+'vh');
    $('#btn'+i).css('left', lefts[i-1]+'vw');
    $('#btn'+i).on('click',()=>{showTeam(i)});
}
var talk = 0;
function tell() {
    if(talk==0)
        alert("Where to go? tri vago");
    else if(talk>=1 && talk <=3)
        alert("We don't talk anymore~");
    else if(talk ==4) 
        alert("like we used to~ do");
    else 
        alert("Why not take a look at 丁5");
    talk = talk +1;
}
$(window).click(function() {
    // this.window.moveTo(0,1);
    console.log('jizz');
    // document.body.requestFullscreen();
});