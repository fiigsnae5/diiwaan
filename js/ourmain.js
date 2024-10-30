$("body").delegate(".get_form","click",function(e){
    e.preventDefault();
    var url = $(this).attr("href");
    // alert(url);
    $.get(url,function(data){
        $(".form_place").html(data);
    });

});