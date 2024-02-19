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
        <table class="table table-striped table-bordered" id="table">
          <thead class="cal-thead">
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
            <tr id="u1">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">10:00 - 10:30 am</b></span>
              </td>
              <td class="ui-droppable"  data-userid="1">    
                <h3 class="details-task" style=" background: #5f8b4a; color: #000000">Amaan</h3>
                <div class="details-uren">
                  <ul>
                    <li>HairCut</li>
                    <li>Shaving</li>
                    <a  class="btn btn-primary btn-sm custom-btn-css" href="#">Edit</a> <a  class="btn btn-danger btn-sm custom-btn-css" href="#">Delete</a>
                  </div>
                 
              </td>
            </tr> 
            <tr id="u2">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">10:30 - 11:00 am</b></span>
              </td>
            </tr> 
            <tr id="u3">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">11:00 - 11:30 am</b></span>
              </td>
            </tr>  
            <tr id="u4">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">11:30 - 12:00 pm</b></span>
              </td>
            </tr>   
            <tr id="u5">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">12:00 - 12:30 pm</b></span>
              </td>
            </tr>  
            <tr id="u6">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">12:30 - 01:00 pm</b></span>
              </td>
            </tr>  
            <tr id="u7">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">01:00 - 01:30 pm</b></span>
              </td>
            </tr>  
            <tr id="u8">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">01:30 - 02:00 pm</b></span>
              </td>
            </tr>  
            <tr id="u9">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">02:00 - 02:30 pm</b></span>
              </td>
            </tr>  
            <tr id="u10">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">02:30 - 03:00 pm</b></span>
              </td>
            </tr>  
            <tr id="u11">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">03:00 - 03:30 pm</b></span>
              </td>
            </tr>  
            <tr id="u12">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">03:30 - 04:00 pm</b></span>
              </td>
            </tr> 
            <tr id="u13">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">04:00 - 04:30 pm</b></span>
              </td>
            </tr> 
            <tr id="u14">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">04:30 - 05:00 pm</b></span>
              </td>
            </tr> 
            <tr id="u15">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">05:00 - 05:30 pm</b></span>
              </td>
            </tr> 
            <tr id="u16">
              <td class="cal-userinfo">
                <span><b style="text-decoration: ">05:30 - 06:00 pm</b></span>
              </td>
            </tr>
          </tbody>
        <table>
      </div>
    </div>
  </div>  
  <script type="text/javascript">
              $(document).ready(function()
                   {
                 $("#table").DataTable();
                   });
              $(".cal-tbody").sortable({
                delay:150,
                stop:function(){
                  var selectedData = new Array();
                  $(".cal-tbody>tr").each(function(){
                    selectedData.push($($this).attr("id"));
                  })
                }  
              });     


  </script>  

              