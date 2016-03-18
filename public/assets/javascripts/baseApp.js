(function(){

    $('.index').on('click', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        $('#containerBase').load('/admin/'+url, function(){

            sendData();

        });
    });


    function sendData(){
        $('.sendForm').submit(function (e){
            e.preventDefault();

            var self = $(this);
            var url = self.prop('action')
            var data = self.serialize();

            $.post(url, data, function (response) {

                if( response.success){
                    $.notify({
                        title: '<strong>Bien!!</strong>',
                        message: response.message
                    },{
                        type: 'success'
                    });
                }else{
                    $.each(response.errors, function(indice, value){
                        $.notify({
                            title: '<strong>Wooo!!</strong>',
                            message: value
                        },{
                            type: 'danger'
                        });
                    })
                }


            });
        });
    }



})();