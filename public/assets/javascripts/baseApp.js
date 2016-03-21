(function(){

    var urlActive = '/admin';


    $('.index').on('click', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        window.urlActive = url;
        loadContent(url);
    });

    /*
     * Save Register
     */
    function sendData(){
        $('.sendForm').submit(function (e){
            e.preventDefault();

            var self = $(this);
            var url = self.prop('action')
            var data = self.serialize();

            $.post(url, data, function (response) {

                if( response.success){

                    loadContent(window.urlActive);

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

    function addRegister(required){
        var clone = $('.crud-table-clone').clone();
        clone.removeClass('crud-table-clone');
        clone.removeAttr("style");
        clone.find('td:first').text(required.name);
        clone.find('td:eq(1)').text(required.URL);
        $('.crud-table-body').append(clone);
    }

    function showEdit(){
        $('.edit-row').on('click', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            var urlBase = $(this).attr('href');
            var url = urlBase + '/' + id;

            $('#modalDiv').load(url, function(){
                $('#myModal').modal('show');
                sendUpdate()
            });
        })
    }

    /*
     * Show modal for delete register
     */
    function showDelete(){
        $('.remove-row').on('click', function(e){
            e.preventDefault();

            var id = $(this).data('id');
            var urlBase = $(this).attr('href');
            var url = urlBase + '/' + id + '/edit';

            $('#modalDiv').load(url, function(){
                $('#myModal').modal('show');
                sendDelete();

            });
        });
    }
    /*
     * Function delete register
     */

    function sendDelete(){
        $('.deleteForm').submit(function(e){
            e.preventDefault();
            var type = $(this).find('.updateModal').data('type');
            var self = $(this);
            var url = self.prop('action');
            var data = self.serialize();

            $.post(url, data, function (response) {

                if( response.success){

                    $.notify({
                        title: '<strong>Bien!!</strong>',
                        message: response.message
                    },{
                        type: 'success'
                    });

                    if(type == 'modal'){
                        $('#myModal').modal('hide');
                        setTimeout(function(){
                            loadContent(window.urlActive);
                        }, 2000);
                    }

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

        })
    }

    /*
     * Funcion para actualizar registro
     */
    function sendUpdate(){

        $(".UpdateForm").submit(function (e){
            e.preventDefault();
            var type = $(this).find('.updateModal').data('type');
            var self = $(this);
            var url = self.prop('action');
            var data = self.serialize();

            $.post(url, data, function (response) {

                if( response.success){

                    $.notify({
                        title: '<strong>Bien!!</strong>',
                        message: response.message
                    },{
                        type: 'success'
                    });

                    if(type == 'modal'){
                        $('#myModal').modal('hide');
                        setTimeout(function(){
                            loadContent(window.urlActive);
                        }, 2000);
                    }

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

    /*
     * Funcion para cargar contenido
     */
    function loadContent(url){
        $('#containerBase').load('/admin/'+url, function(){
            sendData();
            showEdit();
            showDelete();
            sendUpdate();
        });
    }

})();