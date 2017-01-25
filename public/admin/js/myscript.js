$(document).ready(function () {


});

function confirmDelete(link){
    swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function(isConfirm){
            if(isConfirm){
                window.location.href = link;
            }else{
                return false;
            }
        });
}