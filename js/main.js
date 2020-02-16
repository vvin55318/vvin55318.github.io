// date
var tyear=new Date().getFullYear()
$("#copyright")[0].textContent=`© ${tyear} WenYen`
  
// profile name
var f_name=new Array()
f_name=[
    "StoryGame",
    "ColorPicker",
    "AnalogClock",
    "DigitalClock",
    "OpenAPI",
    "SansLogic",
    "padController",
    "WhacAMole",
    "LineWeatherBot",
    "MaskMap",
    "PomodoroTechnique"
]

for(i=0;i<f_name.length;i++){
    loop(f_name[i])
}

// 滑入 彈出效果
function loop(name){
    $("#fa_img_"+name).mouseover(function(){
        $("#fa_txt_"+name).css({"display":"block"})
    })
    $("#fa_img_"+name).mouseout(function(){
        $("#fa_txt_"+name).css({"display":"none"})
    })
}

