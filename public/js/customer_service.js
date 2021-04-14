$( document ).ready(function() {

    $("#edit_profile_form").on("submit", function(event) {
        var token = $('meta[name="csrf-token"]').attr('content');

        event.preventDefault();

        var token = $('meta[name="csrf-token"]').attr('content');

        bootbox.dialog({
            message: "Anda akan melakukan perubahan pada data ini?",
            title: "Perhatian",
            buttons: {
                success: {
                    label: "Ya, Saya setuju",
                    className: "btn-primary",
                    callback: function() {

                        $.ajax({
                            url:'/borrower/edit',
                            method:"POST",
                            headers: {
                                'X-CSRF-TOKEN': token
                            },
                            async:true,
                            data:new FormData(document.getElementById("edit_profile_form")),
                            contentType: false,
                            cache: false,
                            processData: false,
                            dataType:'json',
                            beforeSend:function(){
                                loading();
                            },
                            success:function(response)
                            {

                                if(response.status == true){
                                    $(".result-message").removeClass('alert alert-danger').addClass('alert alert-success').html(response.message).fadeIn();
                                    setTimeout(function() {
                                        $(".result-message").fadeOut();
                                        close_loading();
                                    }, 2000);

                                }else{

                                    var text = "";
                                    $.each(response.message, function( index, value ) {
                                        text += '<p class="error"><i data-feather="x-square"></i> '+ value[0]+'</p>';
                                    });

                                    $(".result-message").removeClass('alert alert-success').addClass('alert alert-danger').html(text).fadeIn();
                                    setTimeout(function() {
                                        $(".result-message").fadeOut();
                                        close_loading();
                                    }, 2000);
                                }

                            },
                            error: function() {
                                alert('Server Error');
                            }
                        })
                    }
                },
            }
        });

    });
});