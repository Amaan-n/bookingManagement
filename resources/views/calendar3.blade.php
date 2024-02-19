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
                  <h3 class="details-task" style=" background: #5f8b4a; color: #000000">Amaan</h3>
                  <div class="details-uren">
                    <ul>
                        <li>Shaving</li>
                    </ul>    
                        <a  class="btn btn-primary btn-sm custom-btn-css" href="#">Edit</a> <a  class="btn btn-danger btn-sm custom-btn-css" href="#">Delete</a>
                  </div> 
                </div>
            </td>
           </tr> 
           <tr class="time-slot" data-time="10:30 - 11:00 am">
            <td><span><b style="text-decoration: ">10:30 - 11:00 am</b></span></td>
            <td class="details-slot">
                <td class="details-slot">   
                    <div class="user-details draggable-details">  
                       <h3 class="details-task" style=" background: #bd3f3f; color: #000000">Nadeem</h3>
                       <div class="details-uren">
                         <ul>
                             <li>HairCut</li>
                         </ul>    
                             <a  class="btn btn-primary btn-sm custom-btn-css" href="#">Edit</a> <a  class="btn btn-danger btn-sm custom-btn-css" href="#">Delete</a>
                       </div> 
                     </div>
                 </td>
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
       $("user-details").sortable();
        </script>
              