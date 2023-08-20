<?php
                include_once  'template/m_header.php';
?>
	<script src="js/md5.min.js"></script>
<!-- --------------------------Google Charts-------------------------------- -->

<!-- ------------------------------------------------------------------------------------ -->
<div class="w3-container" style="margin-top:75px">
<?php 
	if(isset($_REQUEST['message'])){
		if($_REQUEST['re']=='success') $color='green'; else $color='red';
	print '<span style="color:'.$color.'; font-weight:bold;font-size:large;">'.$_REQUEST['message'].'</span>'; 
	}
?>	
<hr>
<div class="w3-row">
  <div class="w3-col s3"></div>
  <div class="w3-col">

	<table align="center" width="100%" border="0">
	<tr><td align="center">
	<a href="https://www.accuweather.com/en/lk/colombo/311399/weather-forecast/311399" class="aw-widget-legal">
	</a><div id="awcc1537113177886" class="aw-widget-current"  data-locationkey="<?php print $weather_location; ?>" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1537113177886"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>		<div id="chart_div1" style="width: 100%; height: 350px;"></div></td><td><div id="landscape" style="vertical-align:top" ></div>
	</td></tr>
	<tr><td colspan="2"><div id="portrait">
    
  
  </div></td></tr>
	<tr><td colspan="2"><hr /></td></tr>
	<tr><td colspan="2" align="center"><div id="chart_div2" style="width:100%"></div></td></tr>
	</table>

  </div>
</div>

</div>
<br />
<br />
<br />
<?php
                include_once  'template/m_footer.php';
?>