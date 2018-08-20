<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PICKUP POINT MAP</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> 
                        <span class="btn btn-primary btn-circle btn-sm"><i class="fa fa-map-o"></i></span>
                        <a href="javascript:void(0);"><span class="clear"> 
                            <span class="block m-t-xs"> <strong class="font-bold">PICKUP POINT</strong>
                            </span> <span class="text-muted text-xs block">On MAP</span></span></a>
                    </div>
                    <div class="logo-element">
                        <i class="fa fa-location-arrow"></i>
                    </div>
                </li>
                <li class="active">
                    <a href="<?php echo base_url();?>"><i class="fa fa-home"></i> <span class="nav-label">HOME</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <!--form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form-->
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">PICKUP POINT [ MAP ]</span>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>

            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-title no-borders">
                                <h5>NEW PICKUP POINT</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>PICKUP CODE</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label >PICKUP POINT NAME</label>
                                            <input type="text" class="form-control controls" >
                                        </div>
                                        <div class="form-group">
                                            <label >AMOUNT</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label >ONE SIDE AMOUNT</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label >PICKUP TIME</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label >DROP TIME</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label >DISTANCE</label>
                                            <input type="text" class="form-control" id="place" autofocus="" >
                                        </div>
                                        <button class="btn btn-primary" id="find">Find</button>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="product-box">
                                            <div class=" product-desc">
                                                <div class="m-b"> Location : {{ place }}</div>
                                                <div id="map" style="width:100%;height:300px;"></div>
                                                <div class="m-t">
                                                    <div class="form-group col-sm-6">
                                                        <label>Lat.</label>
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>Lng.</label>
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class=" clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
            <div class="footer">
                <div class="pull-right">
                    This page for <strong>DEMO</strong>.
                </div>
                <div>
                    <strong>Copyright</strong> DOCME &copy; 2014-2017
                </div>
            </div>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="assets/js/inspinia.js"></script>
    <script src="assets/js/plugins/pace/pace.min.js"></script>
    
    <script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 8.4478996, lng: 76.9556643},
          zoom: 5
        });
        new google.maps.Marker({position:{lat:8.4478996,lng:76.9556643},map:map});
      }
      $(document).ready(function(){
          $("#find").on("click",function(){
              var url = "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=thiruvallam&inputtype=textquery&fields=place_id&key=AIzaSyADDOS9zzHw3bSBQO_H2H15KN4d74Vkubw";
              $.ajax({
                  url:url,
                  type:"post",
                  dataType:"json",
                  async:false,
                  success:function(res){
                      alert(res);
                  }
              });
          });
      });
      
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADDOS9zzHw3bSBQO_H2H15KN4d74Vkubw&callback=initMap" async defer></script>
</body>

</html>
