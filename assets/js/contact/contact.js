$(document).ready(function(){

    $(btnsubmit).on('click',
        function(){
            if($('#name').val() === '' || $('#lname').val() === '' ||$('#phonenumber').val() === ''){
                alert("missing values");
            }else{
                $.ajax({
                    type: "POST",
                    url: baseUrl+"contact/save",
                    data: {
                        contact_id: $('#id').val(),
                        first_name: $('#name').val(),
                        last_name: $('#lname').val(),
                        phone_number: $('#phonenumber').val(),
                    }
                    }).done(function (result) {
                    clearForm();
                    loadGrid();

                });
            }       
        }
    );

    function clearForm(){
        $('#id').val('');
        $('#name').val('');
        $('#lname').val('');
        $('#phonenumber').val('');
    }

   
});