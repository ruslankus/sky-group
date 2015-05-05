$(document).ready(function(){

    var children_current_nr = $("fieldset[data-children]:last-of-type").data("children");
    if(children_current_nr !== 0 && children_current_nr<0) { children_current_nr = -1; }

    /**
     * Changing radio-button states
     */
    $("label.radio").click(function(){

        var name = $(this).data('name');

        $("label.radio").each(function(){
            if($(this).data('name') == name)
            {
                $(this).removeClass('active');
            }
        });

        $(this).addClass('active');
        //activate discount
        if($(this).attr('for') == 'discount-yes')
        {
            $(".if-discount").removeClass('hidden-block');
        }
        else if($(this).attr('for') == 'discount-no')
        {
            $(".if-discount").addClass('hidden-block');
        }
        //activate married-block
        if($(this).attr('for') == 'married-yes')
        {
            $(".if-married").removeClass('hidden-block');
        }
        else if($(this).attr('for') == 'married-no')
        {
            $(".if-married").addClass('hidden-block');
        }
        //activate same-adress block
        if($(this).attr('for') == 'same-no')
        {
            $(".if-same").removeClass('hidden-block');
        }
        else if($(this).attr('for') == 'same-yes')
        {
            $(".if-same").addClass('hidden-block');
        }
        //activate children block
        if($(this).attr('for') == 'children-yes')
        {
            $(".if-children").removeClass('hidden-block');
        }
        else if($(this).attr('for') == 'children-no')
        {
            $(".if-children").addClass('hidden-block');
        }

        //activate ссуды
        if($(this).attr('for') == 'ssudy-yes')
        {
            $(".if-ssudy").removeClass('hidden-block');
        }
        else if($(this).attr('for') == 'ssudy-no')
        {
            $(".if-ssudy").addClass('hidden-block');
        }

        //activate strah
        if($(this).attr('for') == 'strah-company')
        {
            $(".company-name").removeClass('hidden-block');
        }
        else if($(this).attr('for') == 'strah-bank')
        {
            $(".company-name").addClass('hidden-block');
        }

        //activate posobie
        if($(this).attr('for') == 'posobie-yes')
        {
            $(".if-posobie").removeClass('hidden-block');
        }
        else if($(this).attr('for') == 'posobie-no')
        {
            $(".if-posobie").addClass('hidden-block');
        }

        //activate kasa
        if($(this).attr('for') == 'kasa-yes')
        {
            $(".if-kasa").removeClass('hidden-block');
        }
        else if($(this).attr('for') == 'kasa-no')
        {
            $(".if-kasa").addClass('hidden-block');
        }

        //activate kasa
        if($(this).attr('for') == 'chasnaya-strahovka-yes')
        {
            $(".if-chasnaya-strahovka").removeClass('hidden-block');
        }
        else if($(this).attr('for') == 'chasnaya-strahovka-no')
        {
            $(".if-chasnaya-strahovka").addClass('hidden-block');
        }

        //activate other person
        if($(this).attr('for') == 'other-person-yes')
        {
            $(".if-other-person").removeClass('hidden-block');
        }
        else if($(this).attr('for') == 'other-person-no')
        {
            $(".if-other-person").addClass('hidden-block');
        }
    });


    /**
     * Changing radio buttons (used on page 6)
     */
    $("label.radio.lots-of").click(function(){

        var name = $(this).data('name');

        $("label.radio").each(function(){
            if($(this).data('name') == name)
            {
                $(this).removeClass('active');
            }
        });

        $(this).addClass('active');

        var for_of = $(this).attr('for');

        $(".strah-block").addClass('hidden-block');

        $(".strah-block."+for_of).removeClass('hidden-block');
    });


    /**
     * For check-boxes
     */
    $(".check-box-label").click(function(){
        if($(this).hasClass('checked'))
        {
            $(this).removeClass('checked');
        }
        else
        {
            $(this).addClass('checked');
        }
    });


    /**
     * Add one children info block
     */
    $(".add-child-info").click(function(){

        children_current_nr++;
        
        var html = '' +
            '<fieldset class="reg-3" id="children_'+children_current_nr+'">' +
            '</fieldset>' +
            '<div style="clear: both;"></div>';

        $(".children-list").append(html);
        $("fieldset#children_"+children_current_nr).load("/registration/children/", {child: children_current_nr, lng: $(this).data("lang")});
        return false;
    });

    /**
     * Sliding menu
     */
    $(".menu-button").click(function(){
        var $menu = $(".nav");
        console.log("click");
        if($menu.css("display") == 'block')
        {
            $(this).removeClass('active');
            $menu.fadeOut();
            console.log("remove");
        }
        else
        {
            $(this).addClass('active');
            $menu.fadeIn();
            console.log("add");
        }

        return false;

    });


    /**
     * Login box activation
     */
    $(".login-button").click(function(){

        if(!$(this).hasClass('out') && !$(this).hasClass('in'))
        {
            
            var box = $('.login-box');
            var top = $(this).offset().top;
            var height = $(this).height();

            var result_top = top + height;
            var result_left = $(this).offset().left - box.width() + $(this).width();

            box.css({'top':result_top+'px','right':'0px'});

            if(!box.hasClass('active'))
            {
                box.addClass('active');
            }
            else
            {
                box.removeClass('active');
            }
            return false;
        }

        return true;
    });


    $(".login-box .close").click(function(){
        $('.login-box').removeClass('active');
        return false;
    });
    
    // home slider move down
    $(".slider-move").on("click", function() {
        $('html, body').animate({
				scrollTop: $("main").offset().top
			}, 500);
        return false;
    });
    // custom slideshow
    $(".slider-wrapper > .slide").each(function(i){
        $(this).attr("data-id",i+1);
        var nav = $("<li>");
        if (i==0) {
            nav.addClass("active");
            $(this).addClass("active");
        }
        nav.data("id",i+1);
        nav.appendTo(".slider-nav > ul");
    });
    $(document).find(".slider-nav > ul > li").on("click", function() {
        if (!$(this).hasClass("active")) {
            var $id = $(this).data("id");
            $(this).addClass("active").siblings().removeClass("active");
            $(".slider-wrapper > .slide[data-id="+$id+"]").fadeIn(300);
            setTimeout(function() {$(".slider-wrapper > .slide[data-id="+$id+"]").siblings().hide();  }, 300);
        }
        return false;
    });
    $(document).find(".question").on("click", function() {
        var questionmark = $(".questionmark");
        if (questionmark.length>0) {
            if ($(this).find(".questionmark").lenght>0) {
                questionmark.html($(this).data("questionmark"));
                questionmark.appendTo($(this));
                questionmark.hide();
                questionmark.fadeIn();
            }
            if ($(this).find(".questionmark").css("display")=='none') {
                questionmark.html($(this).data("questionmark"));
                questionmark.fadeIn();
            }
            questionmark.on("click", function() {
                questionmark.fadeOut();
                return false;
            });
        } else {
            var question = $("<span>");
            question.html($(this).data("questionmark"));
            question.addClass("questionmark");
            question.appendTo($(this));
            question.hide();
            question.fadeIn();
            question.on("click", function() {
                question.fadeOut();
                return false;
            });
        }
        return false;
    });
    $(document).find("*[data-error]").each(function () {
        
        var $this = $(this);
        var $error = $(this).data("error");
        if ($error) {
            var $item = $("<span>");
            $item.html($error);
            $item.addClass("errorMessage");
            $item.css({width: $this.innerWidth(), top: $this.offset().top-30, left: $this.offset().left});
            $item.appendTo("body");
            $item.hide();
            $item.fadeIn();
        }
    });
    $(".terms-accept").on("click", function(){
        if ($(this).hasClass("checked")) {
            $("#submit_pay").prop("disabled",false);
        }
        else {
            
            $("#submit_pay").prop("disabled",true);
        }
        return false;
    });
});