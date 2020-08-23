
$(document).ready(function(){
    let eventId = $('#approveEventId').val();
    $('.statusChange').change(function () {
      
        $('#updateEventId').val(eventId);
        $('#updateEventStatusVal').val($(this).val());
        $('#updateEventStatus').modal('show');
    });

     $('#updateEvtSatFrm').submit(function (e) {
         e.preventDefault();
         let formData = new FormData(this);
         $.when(submitFunction(formData, 'createEventForm')).done(function (res) {
             if (res.status == 1) {
                 afterAlert('i', 'updateEventStatus', 1000);
                 toastr.success(res.msg);
                 let fd = new FormData();
                 fd.append('restEventStatus','restEventStatus');
                 fd.append('eventId', eventId);
                 $.when(submitFunction(fd, 'createEventForm')).done(function (res) {
                     setTimeout(function(){
                         location.href = 'dashboard';
                     },2000)
                  
                 });
             } else {
                 toastr.warning(res.msg);
                 afterAlert('i', 'updateEventStatus', 3000);

             }
         });

     });
});