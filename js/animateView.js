$(document).on("scroll",function(){for(var o=$(document).scrollTop()+$(window).height(),i=$(".animateView"),e=0;e<i.length;e++){var l=i[e];$(l).position().top<o?$(l).addClass("visible"):$(l).removeClass("visible")}});