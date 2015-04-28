$(document).ready(function(){

    var children_current_nr = 2;

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

        //activate married-block
        if($(this).attr('for') == 'married-yes')
        {
            $(".if-married").removeClass('hidden-block');
        }
        else if($(this).attr('for') == 'married-no')
        {
            $(".if-married").addClass('hidden-block');
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
        var count_to_display = children_current_nr+1;

        var html = '' +
            '<fieldset class="reg-1" id="children_'+children_current_nr+'">' +
            '<label class="bold-label">'+count_to_display+'й ребёнок</label>' +
            '<input placeholder="Имя" type="text" name="children['+children_current_nr+'][name]" value="">' +
            '<input placeholder="Фамилия" type="text" name="children['+children_current_nr+'][surname]" value="">' +
            '<label>Дата Рождения</label>' +
            '<div style="clear: both;"></div>' +
            '<select name="children['+children_current_nr+'][day]" class="selector-1">' +
            '<option>Число</option>' +
            '</select>' +
            '<select name="children['+children_current_nr+'][month]" class="selector-2">' +
            '<option>Месяц</option>' +
            '</select>' +
            '<select name="children['+children_current_nr+'][year]" class="selector-3">' +
            '<option>Год</option>' +
            '</select>' +
            '</fieldset>' +
            '<div style="clear: both;"></div>';

        $(".children-list").append(html);

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
            var top = $(this).offset().top;
            var height = $(this).height();

            var result_top = top + height;
            var box = $('.login-box');

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
        console.log("opa");
        if (!$(this).hasClass("active")) {
            var $id = $(this).data("id");
            $(this).addClass("active").siblings().removeClass("active");
            $(".slider-wrapper > .slide[data-id="+$id+"]").fadeIn(300);
            setTimeout(function() {$(".slider-wrapper > .slide[data-id="+$id+"]").siblings().hide();  }, 300);
        }
        return false;
    });

});