/**
* eServices
* 
**/
$(document).ready(function(){

    // === Sidebar navigation === //
    $('.submenu > a').click(function(e)
    {
        e.preventDefault();
        var submenu = $(this).siblings('ul');
        var li = $(this).parents('li');
        var submenus = $('#sidebar li.submenu ul');
        var submenus_parents = $('#sidebar li.submenu');
        if(li.hasClass('open'))
        {
            if(($(window).width() > 768) || ($(window).width() < 479)) {
                submenu.slideUp();
            } else {
                submenu.fadeOut(250);
            }
            li.removeClass('open');
            
        } else {
            if(($(window).width() > 768) || ($(window).width() < 479)) {
                submenus.slideUp();
                submenu.slideDown();
            } else {
                submenus.fadeOut(250);
                submenu.fadeIn(250);
            }
            submenus_parents.removeClass('open');
            li.addClass('open');
        }


    });

    var ul = $('#sidebar > ul');
    $('#sidebar > a').click(function(e)
    {
        e.preventDefault();
        var sidebar = $('#sidebar');
        if(sidebar.hasClass('open'))
        {
            sidebar.removeClass('open');
            ul.slideUp(250);
        } else
        {
            sidebar.addClass('open');
            ul.slideDown(250);
        }


    });

    
    $(function(){
       
         $("#sidebar >ul >li> a").click(function(e){
            e.preventDefault();

            if(!$(this).parent().hasClass('submenu')){
                $("#sidebar >ul >li").removeClass('active');
                $("#sidebar >ul >li >ul >li").removeClass('active');
                $(this).parent().addClass('active'). // <li>
                siblings().removeClass('active');
            } 
        });

        $("#sidebar > ul > li > ul > li > a").click(function(e){
            e.preventDefault();
            $("#sidebar >ul >li").removeClass('active');
            $("#sidebar >ul >li >ul >li").removeClass('active');
            $(this).parent().addClass('active'); // <li>
               
           
        });

        // Ajax on menu


        $("#sidebar a").click(function(e){
            e.preventDefault();
            //get the href link clicked
            var addressValue = $(this).attr("href");
            console.log(addressValue );
            if ( addressValue !== '#') {
                // fetch (Ajax) the content of the view
                $.get(addressValue, function(data){
                    $('#content').html(data);
                });
            }
        });

        // Ajax on links contained in content
        $("#content a").live( 'click', (function(e){
            e.preventDefault();
            
            //get the href link clicked
            var addressValue = $(this).attr("href");
            console.log(addressValue );
            if ( addressValue !== '#') {
                // fetch (Ajax) the content of the view
                $.get(addressValue, function(data){
                    $('#content').html(data);
                });
            }
        }));
    });

    
   

    $(function(){
        $("table a").live('click',function(e){
            e.preventDefault();
            
            //get the href link clicked
            var addressValue = $(this).attr("href");
            console.log(addressValue );
            if ( addressValue !== '#') {
                // fetch (Ajax) the content of the view
                $.get(addressValue, function(data){
                    $('#content').html(data);
                });
            }
        });
    });

    // fetch the dashboard when on first load
    $.get('/dashboard/index', function(data){
        $('#content').html(data);
        // $('#content').css("display", "none");
        // $('#content').fadeIn();
    });


    // === Resize window related === //
    $(window).resize(function()
    {
        if($(window).width() > 479)
        {
            ul.css({'display':'block'});
            $('#content-header .btn-group').css({width:'auto'});
        }
        if($(window).width() < 479)
        {
            ul.css({'display':'none'});
            fix_position();
        }
        if($(window).width() > 768)
        {
            $('#user-nav > ul').css({width:'auto',margin:'0'});
            $('#content-header .btn-group').css({width:'auto'});
        }
    });
    if($(window).width() < 468)
    {
    ul.css({'display':'none'});
    fix_position();
    }
    if($(window).width() > 479)
    {
    $('#content-header .btn-group').css({width:'auto'});
    ul.css({'display':'block'});
    }
    // === Tooltips === //
    $('.tip').tooltip();
    $('.tip-left').tooltip({ placement: 'left' });
    $('.tip-right').tooltip({ placement: 'right' });
    $('.tip-top').tooltip({ placement: 'top' });
    $('.tip-bottom').tooltip({ placement: 'bottom' });
    // === Search input typeahead === //
    $('#search input[type=text]').typeahead({
    source: ['Dashboard','Form elements','Common Elements','Validation','Wizard','Buttons','Icons','Interface elements','Support','Calendar','Gallery','Reports','Charts','Graphs','Widgets'],
    items: 4
    });
    // === Fixes the position of buttons group in content header and top user navigation === //
    function fix_position()
    {
    var uwidth = $('#user-nav > ul').width();
    $('#user-nav > ul').css({width:uwidth,'margin-left':'-' + uwidth / 2 + 'px'});
    var cwidth = $('#content-header .btn-group').width();
    $('#content-header .btn-group').css({width:cwidth,'margin-left':'-' + uwidth / 2 + 'px'});
    }
    // === Style switcher === //
    $('#style-switcher i').click(function()
    {
    if($(this).hasClass('open'))
    {
    $(this).parent().animate({marginRight:'-=220'});
    $(this).removeClass('open');
    } else
    {
    $(this).parent().animate({marginRight:'+=220'});
    $(this).addClass('open');
    }
    $(this).toggleClass('icon-arrow-left');
    $(this).toggleClass('icon-arrow-right');
    });
    $('#style-switcher a').click(function()
    {
    var style = $(this).attr('href').replace('#','');
    $('.skin-color').attr('href','css/unicorn.'+style+'.css');
    $(this).siblings('a').css({'border-color':'transparent'});
    $(this).css({'border-color':'#aaaaaa'});
    });


    // slide up and down all the boxes
    $("div.widget-title").live("click", function () {
      if ($(this).next().is(":hidden")) {
        $(this).next().show("slow");
      } else {
        $(this).next().slideUp( );
      }
    });

    
       

    $('#spinner')
    .hide()  // hide it initially
    .ajaxStart(function() {
        $(this).show();
    })
    .ajaxStop(function() {
        $(this).hide();
    });

    



    // Ajaxify POST request
    // variable to hold request
    var request;
    // bind to the submit event of our form
    $("#CostIndexForm").live("submit", function(event){

        // prevent default posting of form
        event.preventDefault();

        // abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $(this);
        // let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");
        // serialize the data in the form
        var serializedData = $form.serialize();

        // let's disable the inputs for the duration of the ajax request
        $inputs.prop("disabled", true);

        // fire off the request to /dashboard/index
        var request = $.ajax({
            url: "/dashboard/index",
            type: "post",
            data: serializedData
        });

        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR){
            // log a message to the console
             
             $('<div class="alert alert-info"/>')
                .append( response + '<a class="close" data-dismiss="alert" href="#">×</a>')
                .appendTo('#log')
                .hide().fadeIn();
                
           
        });

        // callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown){
            // log the error to the console
            console.error(
                "The following error occured: "+
                textStatus, errorThrown
            );
        });

        // callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
            // reenable the inputs
            $inputs.prop("disabled", false);
        });

        
    });


}); 