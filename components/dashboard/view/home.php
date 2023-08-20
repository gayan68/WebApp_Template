<?php
                include_once  'template/header.php';
?>
<!-- --------------------------Google Charts-------------------------------- -->

</div>
<div class="grid_16">
  
</div>

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Dashboard</h1>
    </div>
    <?php
    	if(isset($_GET['re'])){
    		if($_GET['re']=='success') $color='success'; else $color='error';
    		print '<p class="info" id="'.$color.'" style="margin-right:10px"><span class="info_inner">'.$_GET['message'].'</span></p>';
    	}
    ?>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left" >
      <!--THIS IS A PORTLET-->
		<div class="portlet">
            <div class="portlet-header"><img src="images/icons/chart_bar.gif" width="16" height="16" alt="Temprature Report" /> Data Box</div>
            <div class="portlet-content">
            <!--THIS IS A PLACEHOLDER FOR FLOT - Report & Graphs -->
            <div id="placeholder" style="width:auto; height:400px;">
            
		<div id="awcc1534355130242" class="aw-widget-current"  data-locationkey='<?php print $weather_location; ?>' data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1534355130242"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
           <p>&nbsp;</p>
 			<div id="chart_div1" style="width: 100%; height: 200px;"></div>
            
            </div>
            </div>
        </div>      
      <!--THIS IS A PORTLET-->
      </div>
      <!-- FIRST SORTABLE COLUMN END -->
      <!-- SECOND SORTABLE COLUMN START -->
      <div class="column">
      <!--THIS IS A PORTLET-->        
      <!--THIS IS A PORTLET-->        
        <div class="portlet">
		<div class="portlet-header"><img src="images/icon_map.png" width="16" height="16" alt="MAP View" />Map View</div>

		<div class="portlet-content">
		<a class="aw-widget-legal"></a>

        <div id="chart_div1" style="width: 100%; height: 200px;"></div>
            

		</div>
        </div>   
      <!--THIS IS A PORTLET--> 
      <!--THIS IS A PORTLET--> 
    </div>
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
   
    
    <div class="portlet">
        <div class="portlet-header fixed"><img src="images/icon_water.png" width="16" height="16" alt="Data Box" />Data Box</div>
		<div class="portlet-content nopadding">
		
		<div id="chart_div2" style="height:300px"></div>

		</div>
      </div>
     
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<?php
                include_once  'template/footer.php';
?>
