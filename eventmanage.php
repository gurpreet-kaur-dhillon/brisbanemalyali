<?php
    use App\classes\Event;
    $eventcls = new Event;
    $values = array(
        'id' =>$_SESSION['id'],
        'role'=>$_SESSION['user_role']
    );
    $events =  $eventcls->fetchByUser($values);
?>


<div class="container">
    <h2 class="text-primary">Manage events</h2>
    <div class="row">
        <div class="col">
            <div class="table-responsive table-sm table-striped table-hover mt-2 text-nowrap">
                <table class="table table-striped table-sm " id="adminManageEvent">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Event date</th>
                            <?php
                                if($_SESSION['user_role'] == 1){
                                    echo "<th scope='col'>Status</th>";
                                    echo "<th scope='col'>Change</th>";
                                    echo "<th scope='col' class='d-none'></th>";
                                }
                            
                            ?>
                           
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            $count = 1;
                        foreach($events as $event):?>
                        
                        <tr>
                            <th scope="row"><?php echo $count++?></th>
                            <td><?php echo $event['event_name'];?></td>
                            <td><?php echo $event['event_location'];?></td>
                            <td><?php echo $event['event_date'];?></td>

                            <?php if($_SESSION['user_role'] == 1){
                                echo "<td>";

                                echo ucwords(EVENT_STATUS[$event['status']]);
                               
                                echo "</td>";

                                echo "<td><select class='form-control form-control-sm statusChange'>";
                                        echo "<option>Change</option>";
                                            foreach($eventStaus as $key => $role){
                                                echo  "<option value=$key>$role</option>";
                                            }  
                                echo  "</select></td>";
                                
                                echo "<td class='d-none'>".$event['event_id']."</td>";
                                
                            }?>



                            <td><?php echo $event['event_price'];?></td>

                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="dashboard/event/edit/<?php echo $event['event_id'];?>"
                                        class="btn btn-success btn-sm">
                                        <i class="fas fa-pen text-light"></i>
                                    </a>
                                    <button class="btn btn-danger deleteEvent btn-sm"
                                        data-eid="<?php echo $event['event_id'];?>">
                                        <i class="fas fa-trash-alt" data-eid="<?php echo $event['event_id'];?>"></i>
                                    </button>

                                </div>


                            </td>
                        </tr>
                        <?php endforeach;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--container div-->



<!-- delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="deleteEventForm">

                <input type="hidden" id="deleteId" value="" name="deleteId">
                <input type="hidden" id='bulkFormValue' value="" name="bulkFormAction">
                <input type="hidden" name="deleteevent">

                <div id="deleteEventMsg" class="p-1"></div>

                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary  cus_btn_width" type="submit" id="deleteBtn">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- update status-->
<div class="modal" tabindex="-1" role="dialog" id="updateEventStatus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" id="updateEvtSatFrm">
                            
                <input type="hidden" id="updateEventId" name='eventId'>            
                <input type="hidden" id="updateEventStatusVal" name="eventStatus">            
                <input type="hidden"  name="eventStatusUpdate">            
                          

                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>you want to change event status</h3>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="updateEvent" class="btn btn-primary">Change</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>