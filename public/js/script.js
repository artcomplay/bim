function appendText(images, htmlFirst, htmlSecond){
    $('.carousel-inner').append(
        htmlFirst + images[0] + htmlSecond,
        htmlFirst + images[1] + htmlSecond,
        htmlFirst + images[2] + htmlSecond,
        htmlFirst + images[3] + htmlSecond,
        htmlFirst + images[4] + htmlSecond,
        htmlFirst + images[5] + htmlSecond
    );
}

let images = ['santa.png', 'kia.png', 'savushkin.png', 'condor.png', 'kothoz.png', 'komunalnik.png', 'ritualgranit.png', 'bch.png', 'bugproekt.png', 'keramin.png', 'baranovich.png','volat.png', 'santarest.png', 'gulvern.png', 'baranovich.png', 'advokat.png', 'logosl.png', 'santarest.png'];
let htmlFirst = '<div class="col-2 carousel-item display"><img src="image/partners/';
let htmlSecond = '" alt=""></div>';
appendText(images, htmlFirst, htmlSecond);
let t = 0;

function interval(t){
    if(t == 0 || t == null){
        t = 5000;
    }
    setInterval(function() {
        $("div.carousel-item").remove();
        let firstElement = images.shift();
        images.push(firstElement);
        appendText(images, htmlFirst, htmlSecond);
        $('.carousel-item').css('margin-right', '1px');
        $('.carousel-item').css('margin-right', '0px');
    }, t);
}



function getPosition(e){
	var x = y = 0;
 
	if (!e) {
		var e = window.event;
	}
 
	if (e.pageX || e.pageY){
		x = e.pageX;
		y = e.pageY;
	} else if (e.clientX || e.clientY){
		x = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
		y = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
	}
 
	return {x: x, y: y}
}



interval(t);

$( document ).ready(function() {
    $('.myWidget_copyright').remove();
});

setInterval(function() {
    $('div.myWidget_copyright').remove();
}, 10000);


function dateTime(){
    Data = new Date();
    Year = Data.getFullYear();
    Month = Data.getMonth();
    Day = Data.getDate();
    
    switch (Month)
    {
      case 0: fMonth="января"; break;
      case 1: fMonth="февраля"; break;
      case 2: fMonth="марта"; break;
      case 3: fMonth="апреля"; break;
      case 4: fMonth="мае"; break;
      case 5: fMonth="июня"; break;
      case 6: fMonth="июля"; break;
      case 7: fMonth="августа"; break;
      case 8: fMonth="сентября"; break;
      case 9: fMonth="октября"; break;
      case 10: fMonth="ноября"; break;
      case 11: fMonth="декабря"; break;
    }
    
    document.getElementById("dates").innerHTML = (Day + " " + fMonth + " " + Year);
    
    var time = setInterval(function() {
        var date = new Date();
        document.getElementById("times").innerHTML = (date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds());
    }, 1000);
  
}

dateTime();
/*
$( window ).scroll(function() {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if(scrollTop > 200){
        $('.menu-horizontal').css('position','fixed').css('left','50px');
        $('.h-list').css('display','block').css('margin-bottom','40px');
        $('.logo-img').css('position','fixed').css('left','40px').css('margin-top','20px').css('width','80px').css('margin-left','0%');


    } else if(scrollTop <= 200){
        $('.menu-horizontal').css('position','inherit').css('left','0px');
        $('.h-list').css('display','inline').css('margin-bottom','0px');
        $('.logo-img').css('position','absolute').css('margin-left','-58%').css('margin-top','0px').css('width','150px').css('left','0px');

    }
    console.log(scrollTop);
});*/