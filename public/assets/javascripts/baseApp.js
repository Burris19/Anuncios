(function(){

    $('.index').on('click', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        $('#containerBase').load('/admin/'+url, function(){

        	 $('#hola').on('click',function(e){
    			e.preventDefault();
    			alert('enviando');
    });
        });
    });

   

    alert('Bienvenidos');

})();