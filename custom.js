function submitFunction(formData, url) {
    return $.ajax({
        type: 'POST',
        url: url,
        dataType: 'JSON',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,

    });
}

 function noticePopup(msg, alertStatus) {
     setTimeout(function () {

         $(".notice_popup").fadeTo(2000, 500).slideUp(500, function () {
             $(".alert-dismissible").alert('close');
         });
     }, 3000);
     return `<div class="alert alert-${alertStatus} alert-dismissible fade show  notice_popup" role="alert">
                <strong>${msg}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>`;

 }

 function tosterSuccess(message) {
     toastr.success(message)
 }

 function tosterWarning(message) {
     toastr.warning(message)
 }

 function tosterDanger(message) {
     toastr.error(message)
 }

 function afterAlert(type,mName,tOut=2000){
    if(type == 'c'){
        $('.'+mName).modal('hide');
    }{
        $('#'+mName).modal('hide');
    }
    setTimeout(function(){
        location.reload();
    },tOut);
 }

 

$(document).ready(function(){
    $('#homeSearchDate').datepicker({
        minDate: new Date() 
    });
    

    $('.backbtn').click(function(){
        window.history.back();
    });
   

   
});