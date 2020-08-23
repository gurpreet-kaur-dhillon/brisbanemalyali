$(document).ready(function(){

    $('#adminManageEvent').DataTable();

    

    $('.deleteEvent').click(function(){
        let eid = $(this).data('eid');
        $('#deleteId').val(eid);
        $('#deleteEventMsg').html('');
        $('#deleteEventForm .modal-body').html(`You are going to delete this event`);
        $('#deleteBtn').html('Delete');
        $('#bulkFormValue').val('delete');
        $('#deleteModal').modal('show');
    });


    $('#deleteEventForm').submit(function(e){
        
        e.preventDefault();
        let formData = new FormData(this);

        $.when(submitFunction(formData, 'createEventForm')).done(function (res) {
            if (res.status == 1) {
                location.reload();
            } else {
                $('#deleteEventMsg').html(noticePopup(res.msg, 'warning'));
            }
        });
        
    });
    

    $('.statusChange').change(function(){
        let eventId = $(this).parent().next().html();
       
        $('#updateEventId').val(eventId);
        $('#updateEventStatusVal').val($(this).val());
        $('#updateEventStatus').modal('show');
    });

    $('#updateEvtSatFrm').submit(function (e) {
        e.preventDefault();
        let formData = new FormData(this);
         $.when(submitFunction(formData, 'createEventForm')).done(function (res) {
             if (res.status == 1) {
                 toastr.success(res.msg);
                 afterAlert('i','updateEventStatus', 3000);
             } else {
                 toastr.warning(res.msg);
                afterAlert('i', 'updateEventStatus', 3000);
                 
             }
         });

    });

});