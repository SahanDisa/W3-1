<?php 
  
  session_start();
  if(!isset($_SESSION['u_id'],$_SESSION['r_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}		
  require_once('./../../controller/contract/contractController.php');
  require_once('./../../controller/user/userController.php');
  require_once('./../../controller/contract/activityController.php');
  require_once('header.php');
  $con = new Contract();
  $result = $con->getAllActiveContracts();
  $res2 = $con->getAllInactiveContracts();

  $act = new Activity();
  
?>

  <div class="container">
    <!-- Heading  -->
    <h2>Contract Home</h2>
    <!-- Start the card View  -->
    <div class="row">
      <!-- 1st card -->
      <div class="col-sm">
        <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
          <!-- <div class="card-header">Header</div> -->
          <div class="card-body">
            <h1 class="card-title">5</h1>
            <p class="card-text">Contracts</p>
          </div>
        </div>
      </div>
      <!-- end card 1 -->
      <!-- 2nd card -->
      <div class="col-sm">
        <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
          <!-- <div class="card-header">Header</div> -->
          <div class="card-body">
            <h1 class="card-title">45</h1>
            <p class="card-text">Activities</p>
          </div>
        </div>
      </div>
      <!-- end card 2 -->
      <!--3rd card  -->
      <div class="col-sm">
        <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
          <!-- <div class="card-header">Header</div> -->
          <div class="card-body">
            <h1 class="card-title">29</h1>
            <p class="card-text">Quotations</p>
          </div>
        </div>
      </div>
      <!-- end card 3 -->
      <!-- 4th card  -->
      <div class="col-sm">
        <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
          <!-- <div class="card-header">Header</div> -->
          <div class="card-body">
            <h1 id="value" class="card-title">4</h1>
            <p class="card-text">Invoices</p>
          </div>
        </div>
      </div>
      <!-- end 4 -->
    </div>
    <br>
    <!-- end of row -->
    <!-- Find a contract  -->
    <div class="row">
      
      <div class="col-sm">
        <!-- Add a new Contract -->
        <h2 style="margin: 0px">Add a new Contract</h2>
        <small>Add new contract for the business environment</small><br>
        <a class="btn btn-primary" href="./contractAdd.php">Add New Contract</a>
        <!-- End add contract -->
      </div>
      <div class="col-sm">
        <h2 style="margin: 0px">Find a Contract</h2>
        <small style="margin: 0px">Search contracts from the database</small><br>
        <!-- searching -->
        <div class="container">
          <div class="row">
            <div class="form-group field" style="width: 200px">
              <input class="form-field" type="text" name="search" id="search" autocomplete="off" placeholder="Search the contract name here">
              <div id="output"></div>
            </div>           
          </div>
        </div>
      </div>
    </div>
    
    
    <script type="text/javascript">
      $(document).ready(function(){
        $("#search").keyup(function(){
            var contract = $(this).val();
            if (contract != "") {
              $.ajax({
                url: './search.php',
                method: 'POST',
                data: {contract:contract},
                success: function(data){
  
                  $('#output').html(data);
                  $('#output').css('display', 'block');
  
                  $("#search").focusout(function(){
                      $('#output').css('display', 'none');
                  });
                  $("#search").focusin(function(){
                      $('#output').css('display', 'block');
                  });
                }
              });
            } else {
            $('#output').css('display', 'none');
          }
        });
      });
    </script>
    
    <!--Contrat Summary Details  -->
    <h2>Ongoing Contracts</h2>
    <p>Contracts that are Active</p>
    <?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {

    ?>
    <!-- Contract Item -->
    <?php
        $res_act = $act->getProgressContract((int)$row["con_id"]);
        //echo $res_act;
    ?>
    <div class="container card text-white bg-primary" onclick="location.href='./contractSinglePage.php?con_id=<?php echo $row["con_id"]; ?>';" style="cursor: pointer;">
      <br>
      <h4 style="margin: 0px"><?php echo $row["con_name"]; ?></h4>
      <h6 style="margin: 0px"><?php echo $row["con_desc"]; ?></h6>
      <h6 style="margin: 0px">Start Date :<?php echo $row["startdate"]; ?>Upto End date : <?php echo $row["enddate"]; ?></h6>
      <h6 style="margin: 0px"><?php echo $row["location"]; ?></h6>
      <h6 style="margin: 0px">Progress : <?php echo " ".$res_act." %"; ?></h6>
      <div class="progress">
        <progress id="contract" value="<?php echo $res_act; ?>" max="100"> </progress>
        
      </div>
      <p style="text-align:right;"><?php echo $row["status"]; ?></p>
      <br>
    </div>
    <!-- Contract Item Ends -->
    <?php
      $i++;
      }
      if($i==0){
          echo "No results ";
      }
    ?>
  </div> 
  <div class="container">
  <h2>Finished Contracts</h2>
  <p>Contracts that are finished already</p>
  <!-- Database Results -->
  <?php
      $j=0;
      while($row2 = mysqli_fetch_array($res2)) {

    ?>
    <!-- Contract Item -->
    <div class="container card text-white bg-primary" onclick="location.href='./contractSinglePage.php?con_id=<?php echo $row2["con_id"]; ?>'"  style="cursor: pointer;">
      <br>
      <h4 style="margin: 0px"><?php echo $row2["con_name"]; ?></h4>
      <h6 style="margin: 0px"><?php echo $row2["con_desc"]; ?></h6>
      <h6 style="margin: 0px">Start Date :<?php echo $row2["startdate"]; ?>Upto End date : <?php echo $row["enddate"]; ?></h6>
      <h6 style="margin: 0px"><?php echo $row2["location"]; ?></h6>
      <div class="progress">
        <progress id="contract" value="93" max="100"> 93% </progress>
      </div>
      <p style="text-align:right;"><?php echo $row2["status"]; ?></p>
      <br>
    </div>
    <!-- Contract Item Ends -->
    <?php
      $j++;
      }
      if($j==0){
          echo "No results ";
      }
    ?>
  </div> 
  </div>
  
  <script>
	$('table.paginated').each(function () {
        var currentPage = 0;
        var numPerPage = 3; // number of items 
        var $table = $(this);
        //var $tableBd = $(this).find("tbody");

        $table.bind('repaginate', function () {
            $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
        });
        $table.trigger('repaginate');
        var numRows = $table.find('tbody tr').length;
        var numPages = Math.ceil(numRows / numPerPage);
        var $pager = $('<div class="pager"></div>');
        for (var page = 0; page < numPages; page++) {
            $('<span class="page-number"></span>').text(page + 1).bind('click', {
                newPage: page
            }, function (event) {
                currentPage = event.data['newPage'];
                $table.trigger('repaginate');
                $(this).addClass('active').siblings().removeClass('active');
            }).appendTo($pager).addClass('clickable');
        }
        if (numRows > numPerPage) {
            $pager.insertAfter($table).find('span.page-number:first').addClass('active');
        }
    });
</script>
<?php
  require_once('leftSidebar.php'); 
  require_once('footer.php'); 
?>	