<?php
$noSideBar = '';
$pageTitle = 'Add Reseller';

include 'config/config.php';
?>

<!-- Start Form  -->

<form class="form-horizontal">
    <legend>Add New Reseller</legend>
    <div class="form-group">
        <label for="name" class="col-md-2 control-label">Name :</label>
        <div class="col-md-4">
            <input type="text" class="form-control" id="name" placeholder="Enter Your Name" require="" autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-md-2 control-label">Password : </label>
        <div class="col-md-4">
            <input type="password" class="form-control" id="password" placeholder="Enter Your Password" require="" autocomplete="new-password">
        </div>
    </div>
    <div class="form-group">
        <label for="username" class="col-md-2 control-label">Username :</label>
        <div class="col-md-4">
            <input type="text" class="form-control" id="username" placeholder="Enter Your Username" require="" autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-md-2 control-label">Email :</label>
        <div class="col-md-4">
            <input type="text" class="form-control" id="emil" placeholder="Enter Your Email" require="" autocomplete="off">
        </div>
    </div>
    <legend>Service :</legend>
    <!-- Rounded switch -->
    <div class="form-group ">
        <label for="" class="col-md-2 control-label">Add Codes :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
        </label>
    </div>
    <div class="form-group ">
        <label for="" class="col-md-2 control-label">Add Users :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
        </label>
    </div>
    <div class="form-group ">
        <label for="" class="col-md-2 control-label">Add MAG :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
        </label>
    </div>

    <legend>Service Free :</legend>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label">Total Free :</label>
        <input type="text">
    </div>
    <div class="form-group ">
        <label for="" class="col-md-2 control-label"> Free 1 day  :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>
    <div class="form-group ">
        <label for="" class="col-md-2 control-label"> Free 3 days :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>
    <div class="form-group ">
        <label for="" class="col-md-2 control-label"> Free 7 days :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>
    <div class="form-group ">
        <label for="" class="col-md-2 control-label"> Free 10 days :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <legend>Service Price :</legend>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label">1 Month | Cost :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label">3 Month | Cost :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label">6 Month | Cost :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label">1 Year | Cost :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label">2 Years | Cost :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label">3 Years | Cost :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <legend>Other Options:</legend>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label">Download m3u file (for Codes only):</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label">Add Codes By MAC :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label">Add Codes By Serial :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label"> Allow add Free Codes/Users/MAG :</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label">Allow Delete Codes/Users/MAG + Invoices:</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <div class="form-group ">
        <label for="" class="col-md-2 control-label">Allow Change/Edit Codes/Users/MAG:</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider "></span>
        </label>
    </div>

    <legend>Packages (Bouquets):</legend>

    <div class="checkbox">
        <label class="custom-control-label">
            <input type="checkbox" class="custom-control-input"> Check me out
        </label>
    </div>
    
    <div class="form-group">
                <!-- custom -->

                <ul class="list-group list-group-flush col-md-offset-1 col-md-4">
    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check1" checked>
        <label class="custom-control-label" for="check1">Check me</label>
      </div>
    </li>
    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check2">
        <label class="custom-control-label" for="check2">Check me</label>
      </div>
    </li>
    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check3" checked>
        <label class="custom-control-label" for="check3">Check me</label>
      </div>
    </li>
    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check4" checked>
        <label class="custom-control-label" for="check4">Check me</label>
      </div>
    </li>
    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>

    <li class="list-group-item">
      <!-- Default checked -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="check5">
        <label class="custom-control-label" for="check5">Check me</label>
      </div>
    </li>
    
  </ul>
    </div>
    <!-- <div>
        <label for="" class="col-md-2 control-label">General</label>
        <div class="checkbox">
            <label>
                <input type="checkbox">
            </label>
        </div>
    </div> -->

    <legend>Saved Data</legend>
    <div class="form-group">
    <button type="submit" class="btn btn-default col-md-offset-5">Save</button>
    </div>

</form>

<!-- end Form  -->

<?php 
include TEMP . 'bodyend.php';
include TEMP . 'footer.php';

?>

