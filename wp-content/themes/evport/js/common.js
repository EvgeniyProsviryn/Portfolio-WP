$(function(){
    
    window.onload = function(){
        $('.loader-container').fadeOut(300);
        $('.loaderWall').fadeOut(800);
        $(".viewContainer2").mCustomScrollbar({theme:"minimal-dark"});
$(".viewContainer3").mCustomScrollbar({theme:"minimal-dark"});
$(".viewContainer4").mCustomScrollbar({theme:"minimal-dark"});
    }
    
    
    
    $('#def1').click(function(){
        $('ul.menu').animate({marginLeft:"-30px"},500);
        $('.viewContainer').animate({marginLeft:"-140px"},500);
        
        
        $('.viewContainer2').animate({marginLeft:"-140px",
                                      opacity:0    
                                     },500);
        
        $('.viewContainer3').animate({marginLeft:"-140px",
                                      opacity:0    
                                     },500);
        $('.viewContainer4').animate({marginLeft:"-140px",
                                      opacity:0    
                                     },500);
        $('.viewContainer5').animate({marginLeft:"-140px",
                                      opacity:0    
                                     },500);
    });

    $('#def2,#def3,#def4,#def5').click(function(){
        $('ul.menu').animate({marginLeft:"-330px"},500);
        $('.viewContainer').animate({marginLeft:"-440px"},500);
    });
    
    
    $('#def2').click(function(){
       
       $('.viewContainer2').animate({marginLeft:"55px",
                                      opacity:1    
                                     },500,function(){
             $('.viewContainer3,.viewContainer4,.viewContainer5').css('display','none');
       });
         $('.viewContainer2').css('display','block');
        
        
        $('.viewContainer3').animate({marginLeft:"-140px",
                                      opacity:0
                                     },500);
        $('.viewContainer4').animate({marginLeft:"-140px",
                                      opacity:0
                                     },500);
        $('.viewContainer5').animate({marginLeft:"-140px",
                                      opacity:0
                                     },500);

    });
    
    
    $('#def3').click(function(){
       
       $('.viewContainer3').animate({marginLeft:"55px",
                                      opacity:1    
                                     },500,function(){
             $('.viewContainer4,.viewContainer5,.viewContainer2').css('display','none');
       });
        $('.viewContainer3').css('display','block');
        
         $('.viewContainer4').animate({marginLeft:"-140px",
                                      opacity:0
                                     },500);
        $('.viewContainer5').animate({marginLeft:"-140px",
                                      opacity:0     
                                     },500);
        $('.viewContainer2').animate({marginLeft:"-140px",
                                      opacity:0      
                                     },500);
  
    });
    
    $('#def4').click(function(){
       
       $('.viewContainer4').animate({marginLeft:"55px",
                                      opacity:1    
                                     },500,function(){
             $('.viewContainer2,.viewContainer3,.viewContainer5').css('display','none');
       });
        $('.viewContainer4').css('display','block');
        
        $('.viewContainer2').animate({marginLeft:"-140px",
                                      opacity:0     
                                     },500);
        
        $('.viewContainer3').animate({marginLeft:"-140px",
                                      opacity:0      
                                     },500);
        $('.viewContainer5').animate({marginLeft:"-140px",
                                      opacity:0  
                                     },500);
        
    });
    
    $('#def5').click(function(){
       
       $('.viewContainer5').animate({marginLeft:"55px",
                                      opacity:1    
                                     },500,function(){
             $('.viewContainer3,.viewContainer4,.viewContainer2').css('display','none');
       });
        $('.viewContainer5').css('display','block');
        
        $('.viewContainer3').animate({marginLeft:"-140px",
                                      opacity:0    
                                     },500);
        $('.viewContainer4').animate({marginLeft:"-140px",
                                      opacity:0     
                                     },500);
        $('.viewContainer2').animate({marginLeft:"-140px",
                                      opacity:0    
                                     },500);
 
       
        
    });
    
   var html = parseInt($(".htmlSkill .persent").html())
   var js = parseInt($(".cssSkill .persent").html())
   var php = parseInt($(".jsSkill .persent").html())
   var photoshop = parseInt($(".move .htmlSkill .persent").html())
   var illustrator = parseInt($(".move .cssSkill .persent").html())
   var gimp = parseInt($(".move .jsSkill .persent").html())
   
   $(".htmlSkill .filter").css("width",html+"%");
   $(".cssSkill .filter2").css("width",js+"%");
   $(".jsSkill .filter3").css("width",php+"%");
    
   $(".move .htmlSkill .filter").css("width",photoshop+"%");
   $(".move .cssSkill .filter2").css("width",illustrator+"%");
   $(".move .jsSkill .filter3").css("width",gimp+"%"); 
    
    
})