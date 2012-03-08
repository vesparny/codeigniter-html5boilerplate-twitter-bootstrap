

$(function(){
    var replacePage = function(url) {
        $.ajax({
            url: url,
            type: 'get',
            dataType: 'html',
            success: function(data){
                
            	
                $('.container').append(data);
            }
        });
    }

    $('a').click(function(e){
        history.pushState(null, "ale", this.href);
        replacePage(this.href);
        e.preventDefault();
    });

    $(window).bind('popstate', function(){
        replacePage(location.pathname);
    });
});







