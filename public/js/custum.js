$(document).ready(function(){
 $(".form-group .form-control").blur(function(){
    if($(this).val() !=""){
    $(this).siblings("label").addClass("active");
    }
    else{
    $(this).siblings("label").removeClass("active");
    }

 });

});

$('.continue').click(function(){
   $('.nav-tabs > #tab1').next('li').find('a').trigger('click');
});

$('.back').click(function(){
   $('.nav-tabs >#tab2').prev('li').find('a').trigger('click');
});

