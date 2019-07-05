var tops= [35, 43, 55, 31, 29, 28, 22, 24, 30, 52];
var lefts=[14, 13,  7, 33, 47, 52, 66, 76, 71, 83];

var One = "V3pJeUxESTNMREkzTERRd0xETTNMRFF3TERNekxETXpMaklzTXpjc016Y3VNMTA9";
var Piece = "V3pZc09DdzBMRFEyTERRNExEUTRMalVzTnpFc056UXNOekF1Tnl3M05GMD0=";
var 鑰匙 = "基礎六四";

var tops = JSON.parse(window.atob(window.atob(One)));
var lefts = JSON.parse(window.atob(window.atob(Piece)));

var ft = 44;
var fl = 38.4;


var defaultShow = '#map';
var currentShow = defaultShow;
function showIframe(id,src) {
    // $(id).attr('src', src);
    showup('#'+id+'Con');
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
// for(let i=1;i<=10;++i) {
//     $('#btn'+i).css('top', tops[i-1]+'vh');
//     $('#btn'+i).css('left', lefts[i-1]+'vw');
//     $('#btn'+i).on('click',()=>{showTeam(i)});
// }
var talk = 0;
var QQ = ['我是 worldma 製作人 eethan1',
'感謝美宣 cphuamao 和選課網站製作人 disam8853 和 keylin1999',
'成功撐起危急的網站支援',
'有在關注的人應該注意到，這是個隨著營隊成長的網站',
'一個不會寫前端的人從"幹你 disam8853 我不想寫前端QQ"到在想出好玩的點子後越玩越開心',
'希望你們也喜歡，在ˊ之後學習資訊或是任何的路上 have fun',
'明天我有臨時一些事不能幫忙你們的小隊呈現',
'祝你們留下一個不會是最完美的，但最好玩的作品',
'> <']
function tell2(){
    if(talk >= QQ.length+88){
        alert("林俊逸");
    }else if(talk >= QQ.length){
        alert("88888888")
    }else{
        alert(QQ[talk])
    }
    talk += 1;
}
function tell() {
    
    alert("Find your path");
    return;
    if(talk==0)
        alert("Does One Piece really exist?");
    else if(talk>=1 && talk <=3)
        alert("We don't talk anymore~");
    else if(talk ==4) 
        alert("like we used to~ do");
    else 
        alert("Why not take a look at 丁@v@5ㄈ尺1p+?");
    talk = talk +1;
}

$(window).click(function() {
    console.log('jizz');
});

var startTime = Number((new Date('2019','6','4','12')));
var endTime = Number((new Date('2019','6','4','17','50')));
// var endTime = Date.now();
var now = Date.now();
if(now > endTime) now = endTime;
var po = (now - startTime)/(endTime - startTime);
var r = 4;

var teamTitle = [
    '演算法講師',
    '最強清潔員',
    '宅界大賢者',
    '管理學教授',
    '被犧牲大腿',
    '管院交際花',
    '普通的教授',
    '愛演講校友',
    '老屁股學長',
    '系辦大魔王'
]
var enTeamTitle = [
    'Algorithm Lawyer',
    'Superb Cleaner',
    'The Sage in 2D',
    'Sweetest Potato',
    'Sacrificed Ham',
    'Others\' Best Friend',
    'Ordinary Professor',
    'Talktive Sponsor',
    'The Stationary Front',
    'Department of the Great Devil'
]
function showTeam(i) {
    if(now >= endTime){
        $('.teamimg').attr('src', 'img/teams/Team'+i+'s.png');
        $('#title').html(teamTitle[i-1]);
        $('#entitle').html(enTeamTitle[i-1]);
    }else{
        $('.teamimg').attr('src', 'img/teams/Team'+i+'.png');
    }
    
    showup('#team');
}

for(let i=1;i<=10;++i) {
    let tmpt = tops[i-1] + (ft-tops[i-1])*po + (7 - Math.random()*14)*(1-po) + r*Math.sin(Math.PI*i/5);
    let tmpl = lefts[i-1] + (fl-lefts[i-1])*po + (4 -Math.random()*8)*(1-po) + r*Math.cos(Math.PI*i/5);
    tmpt = tmpt.toFixed(3);
    tmpl = tmpl.toFixed(3);
    console.log(tmpt, tmpl);
    $('#btn'+i).css('top', tmpt+'vh');
    $('#btn'+i).css('left', tmpl+'vw');
    $('#btn'+i).on('click',()=>{showTeam(i)});
}