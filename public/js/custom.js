
// ADMIN SIDE
$('.bell_notification_clicker').on('click',function(){
    console.log(1);
    $('.Menu_NOtification_Wrap').toggleClass('active');
 });
$(document).click(function(event){if(!$(event.target).closest(".bell_notification_clicker ,.Menu_NOtification_Wrap").length){$("body").find(".Menu_NOtification_Wrap").removeClass("active");}});
$('.CHATBOX_open').on('click',function(){
    $('.CHAT_MESSAGE_POPUPBOX').toggleClass('active');
});
$('.MSEESAGE_CHATBOX_CLOSE').on('click',function(){
    $('.CHAT_MESSAGE_POPUPBOX').removeClass('active');
});
$(document).click(function(event){
    if(!$(event.target).closest(".CHAT_MESSAGE_POPUPBOX, .CHATBOX_open").length){
        $("body").find(".CHAT_MESSAGE_POPUPBOX").removeClass("active");
    }});

    // side bar menu
$('.sidebar_icon').on('click',function(){
        $('.sidebar').toggleClass('active_sidebar');
    });
$('.sidebar_close_icon i').on('click',function(){
        $('.sidebar').removeClass('active_sidebar');
    });
$('.troggle_icon').on('click',function(){
        $('.setting_navbar_bar').toggleClass('active_menu');
    });
$('.custom_select').click(function(){
    if($(this).hasClass('active')){
        $(this).removeClass('active');
    }else{
        $('.custom_select.active').removeClass('active');
        $(this).addClass('active');
    }});
    $(document).click(function(event){
        if(!$(event.target).closest(".custom_select").length){
            $("body").find(".custom_select").removeClass("active");
        }});
        $(document).click(function(event){
            if(!$(event.target).closest(".sidebar_icon, .sidebar").length){
                $("body").find(".sidebar").removeClass("active_sidebar");
            }});
// menutis


