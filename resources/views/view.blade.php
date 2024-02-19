<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.0/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/2.0.0/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
  <!-- DISPLAY USER SCHEDULER-->
<div class="table-responsive">
  <div data-parse="1595877840000" id="calplaceholder" style="max-height: 500px; margin-bottom: 0;">
    <div class="cal-sectionDiv">
      <table class="table table-striped table-bordered" id="mytable">
        <thead>
          <tr >
            <th class="cal-viewmonth" id="changemonth" style="font-weight:bold ">{{date('d-F-Y');}}</th>
            @foreach($worker as $key => $value)
            <th class="cal-toprow" style="font-weight:bold">{{$value->name}}</th>  
            @endforeach
          </tr>
          <tr id="h16">
            <td class="cal-usersheader" style="color:#000; background-color:#3b82b4; padding: 0px; font-weight:bold">TimeSlot</td>
            <td colspan="31" style="color:#FFFFFF; background-color:#3b82b4;"></td>
          </tr>
        </thead>
        <tbody class="cal-tbody" id="mytablebody">
          <tr class="time-slot" data-time="10:00 - 10:30 am">
            <td>
                <span><b style="text-decoration: ">10:00 - 10:30 am</b></span>
            </td>
            <td class="details-slot">   
               <div class="user-details draggable-details">  
                  <h3 class="details-task" style=" background: #5f8b4a; color: #000000">{{$Booking->customers}}</h3>
                  <div class="details-uren">
                    <ul>
                        <li>{{$Booking->services}}</li>
                    </ul>    
                        <a  class="btn btn-primary btn-sm custom-btn-css" href="#">Edit</a> <a  class="btn btn-danger btn-sm custom-btn-css" href="#">Delete</a>
                  </div> 
                </div>
            </td>
           </tr> 
           <tr class="time-slot" data-time="10:30 - 11:00 am">
            <td><span><b style="text-decoration: ">10:30 - 11:00 am</b></span></td>
            <td class="details-slot">  
            </td>
          </tr>
          <tr class="time-slot" data-time="11:00 - 11:30 am">
            <td><span><b style="text-decoration: ">10:30 - 11:00 am</b></span></td>
            <td class="details-slot"></td>
          </tr>
          <tr class="time-slot" data-time="11:30 - 12:00 am">
            <td><span><b style="text-decoration: ">11:30 - 12:00 am</b></span></td>
            <td class="details-slot"></td>
          </tr>
          <!-- Empty row for drop zone -->
          <tr class="empty-row">
            <td></td>
            <td class="details-slot empty-slot"></td>
          </tr>
          <!-- Add more time slots as needed -->
        </tbody>
      </table>

      <script>
        $(document).ready(function() {
          $(".user-details").draggable({
            revert: true,
            helper: "clone",
            start: function(event, ui) {
              $(this).data("original-position", ui.helper.position());
            },
            drag: function(event, ui) {
              var $slot = $(this).closest(".details-slot");
              ui.position.left = Math.min(Math.max(ui.position.left, 0), $slot.width() - ui.helper.width());
              ui.position.top = Math.min(Math.max(ui.position.top, 0), $slot.height() - ui.helper.height());
            }
          });
        
          $(".details-slot, .empty-slot").droppable({
            accept: ".user-details",
            drop: function(event, ui) {
              var targetSlot = $(this);
              var sourceSlot = ui.draggable.closest('.time-slot');
              if (targetSlot.closest('.time-slot').attr('data-time') !== sourceSlot.attr('data-time')) {
                var clonedContent = ui.draggable.clone();
                targetSlot.empty().append(clonedContent);
                sourceSlot.find('.details-slot').empty();
              }
              $(".user-details").draggable({
                revert: true,
                helper: "clone"
              });
            }
          });
        
          $(".time-slot").droppable({
            accept: ".user-details",
            drop: function(event, ui) {
              var targetSlot = $(this).find('.details-slot');
              var sourceSlot = ui.draggable.closest('.time-slot');
              if (targetSlot.closest('.time-slot').attr('data-time') !== sourceSlot.attr('data-time')) {
                var clonedContent = ui.draggable.clone();
                targetSlot.empty().append(clonedContent);
                sourceSlot.find('.details-slot').empty();
              }
              $(".user-details").draggable({
                revert: true,
                helper: "clone"
              });
            }
          });
        });
        </script>
              