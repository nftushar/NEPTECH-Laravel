$(document).ready(function() {
    $( "#post_search" ).Postsearch({
  
        source: function(request, response) {
            $.ajax({
            url: BASE_URL + '/' +"Postsearch",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.title;
               }); 
  
               response(resp);
            }
        });
    },
    minLength: 2
 });
});