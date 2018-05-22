function formEvidentSubmit() {

    var dataArray={
        date:$('#dateEvident').val(),
        reason:$('#Annotation').val()
    };
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/saveFormEv',
        data: dataArray,
        sucess: function(data){
            console.log('save data Form Evident success: ' + data);
        }
    });
    window.location.href = "/admin_profile";

}