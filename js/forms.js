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
    });


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



});