(function(){

    $('.index').on('click', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        $('#containerBase').load('/admin/'+url, function(){


        });
    });

})();