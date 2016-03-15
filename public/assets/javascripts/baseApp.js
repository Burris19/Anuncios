(function(){

    $('#configurationPrincipal').on('click', function(e){
        e.preventDefault();

        $('#containerBase').load('/admin/configurePrincipal', function(){


        });

    });




})();