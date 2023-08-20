<?php

        switch ($_REQUEST['action'])
        {
            case "home" :
               include_once  'components/dashboard/modle/dashboardModule.php';
               weatherLocation();
               if(isMobile())           
	               include_once  'components/dashboard/view/m_home.php';
	           else
	               include_once  'components/dashboard/view/home.php';
            break;

            default:
                print '<p><srtong>Bad Request</strong></p>';
            break;
        }
?>