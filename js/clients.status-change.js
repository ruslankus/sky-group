$(document).ready(function(){

    $(".select-status").change(function(){

        var url = $(this).data('url');
        var cid = $(this).data('client');
        var sid = $(this).val();

        var link = url+'/cid/'+cid+'/sid/'+sid;

        var request = $.ajax({url: link});

        request.done(function(data){
            //TODO: do something
        });

        request.fail(function(jqXHR,textStatus) {
            alert( "Request failed: " + textStatus);
        });
    });

});