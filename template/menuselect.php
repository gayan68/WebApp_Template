<?php
$slect1=$slect2=$slect3=$slect4=$slect5=$slect6=$slect7=$slect8=$slect9=$slect10=$slect11=$slect12=$slect13=$slect14=$slect15='class="dropbtn1"';

if($_REQUEST['components']=='availability'){
        switch ($_REQUEST['action'])
        {
            case "home" :
            	$slect1='class="dropbtn2"';
            break;
            case "catalog" :
            	$slect2='class="dropbtn2"';
            break;
            case "stock" :
            	$slect3='class="dropbtn2"';
            break;
         }
}     

if($_REQUEST['components']=='inventory'){
        switch ($_REQUEST['action'])
        {
            case "show_add_item" :
            	$slect1='class="dropbtn2"';
            break;
            case "show_add_qty" :
            	$slect2='class="dropbtn2"';
            break;
            case "show_add_unic" :
            	$slect3='class="dropbtn2"';
            break;
            case "show_edit_item" :
            	$slect4='class="dropbtn2"';
            break;
            case "show_one_item" :
            	$slect4='class="dropbtn2"';
            break;
            case "show_specialprice" :
            	$slect5='class="dropbtn2"';
            break;
            case "show_districtprice" :
            	$slect6='class="dropbtn2"';
            break;
            case "show_all_item" :
            	$slect7='class="dropbtn2"';
            break;
            case "repair_parts_list" :
            	$slect7='class="dropbtn2"';
            break;
            case "show_temp" :
            	$slect8='class="dropbtn2"';
            break;
            case "drawer_search" :
            	$slect9='class="dropbtn2"';
            break;
            case "shipmentlist" :
            	$slect10='class="dropbtn2"';
            break;
            case "one_shipment" :
            	$slect10='class="dropbtn2"';
            break;
            case "show_unic" :
            	$slect10='class="dropbtn2"';
            break;
            case "show_edit_unic" :
            	$slect10='class="dropbtn2"';
            break;
         }
}     

if($_REQUEST['components']=='billing'){
        switch ($_REQUEST['action'])
        {
            case "home" :
            	if($_GET['cust_odr']=='no')	 $slect1='class="dropbtn2"';
            	if($_GET['cust_odr']=='yes') $slect2='class="dropbtn2"';
            break;
            case "pay_bill" :
            	if($_GET['cust_odr']=='no')	 $slect1='class="dropbtn2"';
            	if($_GET['cust_odr']=='yes') $slect2='class="dropbtn2"';
            break;
            case "finish_bill" :
            	$slect1='class="dropbtn2"';
            break;
            case "payment" :
            	$slect4='class="dropbtn2"';
            break;
            case "today" :
            	$slect5='class="dropbtn2"';
            break;
            case "chque_return" :
            	$slect6='class="dropbtn2"';
            break;
            case "item_return" :
            	$slect7='class="dropbtn2"';
            break;
            case "finish_return" :
            	$slect7='class="dropbtn2"';
            break;
            case "warranty" :
            	$slect8='class="dropbtn2"';
            break;
            case "credit" :
            	$slect9='class="dropbtn2"';
            break;
            case "cust_sale" :
            	$slect9='class="dropbtn2"';
            break;
            case "sales_report2" :
            	$slect9='class="dropbtn2"';
            break;
            case "sales_report3" :
            	$slect9='class="dropbtn2"';
            break;
            case "quotation" :
            	$slect10='class="dropbtn2"';
            break;
            case "quotation_ongoing" :
            	$slect10='class="dropbtn2"';
            break;
            case "quotation_list" :
            	$slect10='class="dropbtn2"';
            break;
         }
}   

if($_REQUEST['components']=='order_process'){
        switch ($_REQUEST['action'])
        {
            case "list_custodr" :
            	$slect1='class="dropbtn2"';
            break;
            case "list_one_custodr" :
            	$slect1='class="dropbtn2"';
            break;
            case "edit_custodr" :
            	$slect1='class="dropbtn2"';
            break;
            case "showadd_custodr" :
            	$slect1='class="dropbtn2"';
            break;
            case "list_pending" :
            	$slect2='class="dropbtn2"';
            break;
            case "list_my" :
            	$slect3='class="dropbtn2"';
            break;
            case "list_packed" :
            	$slect4='class="dropbtn2"';
            break;
            case "list_shipped" :
            	$slect5='class="dropbtn2"';
            break;
            case "list_delivered" :
            	$slect6='class="dropbtn2"';
            break;
            case "list_return" :
            	$slect7='class="dropbtn2"';
            break;
            case "list_unic_return" :
            	$slect7='class="dropbtn2"';
            break;
         }
}  
if($_REQUEST['components']=='repair'){
        switch ($_REQUEST['action'])
        {
            case "list_pending" :
            	$slect1='class="dropbtn2"';
            break;
            case "list_one" :
            	$slect1='class="dropbtn2"';
            break;
            case "list_my" :
            	$slect2='class="dropbtn2"';
            break;
            case "list_rejected" :
            	$slect3='class="dropbtn2"';
            break;
            case "list_finished" :
            	$slect4='class="dropbtn2"';
            break;
         }
}   

if($_REQUEST['components']=='trans'){
        switch ($_REQUEST['action'])
        {
            case "home" :
            	$slect1='class="dropbtn2"';
            break;
            case "approval" :
            	$slect2='class="dropbtn2"';
            break;
            case "today" :
            	$slect3='class="dropbtn2"';
            break;
            case "last100" :
            	$slect4='class="dropbtn2"';
            break;
            case "drawer_search" :
            	$slect5='class="dropbtn2"';
            break;
         }
}     

if($_REQUEST['components']=='supervisor'){
        switch ($_REQUEST['action'])
        {
            case "sale" :
            	$slect1='class="dropbtn2"';
            break;
            case "credit" :
            	$slect2='class="dropbtn2"';
            break;
            case "quotation" :
            	$slect3='class="dropbtn2"';
            break;
            case "quotation_ongoing" :
            	$slect3='class="dropbtn2"';
            break;
            case "quotation_list" :
            	$slect3='class="dropbtn2"';
            break;
            case "newcust" :
            	$slect4='class="dropbtn2"';
            break;
            case "editcust" :
            	$slect4='class="dropbtn2"';
            break;
            case "searchcust" :
            	$slect4='class="dropbtn2"';
            break;
            case "unlocked" :
            	$slect5='class="dropbtn2"';
            break;
         }
}  

if($_REQUEST['components']=='manager'){
        switch ($_REQUEST['action'])
        {
            case "daily_sale" :
            	$slect1='class="dropbtn2"';
            break;
            case "daily_sale_detail" :
            	$slect1='class="dropbtn2"';
            break;
            case "cust_sale" :
            	$slect1='class="dropbtn2"';
            break;
            case "sales_report2" :
            	$slect1='class="dropbtn2"';
            break;
            case "sales_report3" :
            	$slect1='class="dropbtn2"';
            break;
            case "sales_bycategory" :
            	$slect1='class="dropbtn2"';
            break;
            case "credit" :
            	$slect1='class="dropbtn2"';
            break;
            case "unvisited" :
            	$slect1='class="dropbtn2"';
            break;
            case "sold_qty" :
            	$slect1='class="dropbtn2"';
            break;
            case "warranty" :
            	$slect1='class="dropbtn2"';
            break;
            case "show_map" :
            	$slect1='class="dropbtn2"';
            break;
            case "newcust" :
            	$slect2='class="dropbtn2"';
            break;
            case "editcust" :
            	$slect2='class="dropbtn2"';
            break;
            case "searchcust" :
            	$slect2='class="dropbtn2"';
            break;
            case "show_custgroup" :
            	$slect2='class="dropbtn2"';
            break;
            case "show_return" :
            	$slect1='class="dropbtn2"';
            break;
            case "show_disposal" :
            	$slect1='class="dropbtn2"';
            break;
            case "device_mgmt" :
            	$slect4='class="dropbtn2"';
            break;
            case "unlocked" :
            	$slect5='class="dropbtn2"';
            break;
            case "quotation" :
            	$slect6='class="dropbtn2"';
            break;
            case "quotation_ongoing" :
            	$slect6='class="dropbtn2"';
            break;
            case "quotation_approve" :
            	$slect6='class="dropbtn2"';
            break;
            case "quotation_list" :
            	$slect6='class="dropbtn2"';
            break;
            case "unic_items" :
            	$slect7='class="dropbtn2"';
            break;
            case "shipment" :
            	$slect8='class="dropbtn2"';
            break;
            case "chque" :
            	$slect9='class="dropbtn2"';
            break;
            case "chque_range" :
            	$slect9='class="dropbtn2"';
            break;
            case "clear_chque_list" :
            	$slect9='class="dropbtn2"';
            break;
            case "chque_return" :
            	$slect9='class="dropbtn2"';
            break;
            case "inv_mgmt" :
            	$slect12='class="dropbtn2"';
            break;
            case "authorize_code" :
            	$slect10='class="dropbtn2"';
            break;
            case "payment" :
            	$slect11='class="dropbtn2"';
            break;
            case "payment_history" :
            	$slect11='class="dropbtn2"';
            break;
         }
}   

if($_REQUEST['components']=='topmanager'){
        switch ($_REQUEST['action'])
        {
            case "daily_sale" :
            	$slect1='class="dropbtn2"';
            break;
            case "daily_sale_detail" :
            	$slect1='class="dropbtn2"';
            break;
            case "cust_sale" :
            	$slect1='class="dropbtn2"';
            break;
            case "sales_report2" :
            	$slect1='class="dropbtn2"';
            break;
            case "sales_report3" :
            	$slect1='class="dropbtn2"';
            break;
            case "sales_bycategory" :
            	$slect1='class="dropbtn2"';
            break;
            case "credit" :
            	$slect1='class="dropbtn2"';
            break;
            case "unvisited" :
            	$slect1='class="dropbtn2"';
            break;
            case "sold_qty" :
            	$slect1='class="dropbtn2"';
            break;
            case "newcust" :
            	$slect2='class="dropbtn2"';
            break;
            case "editcust" :
            	$slect2='class="dropbtn2"';
            break;
            case "searchcust" :
            	$slect2='class="dropbtn2"';
            break;
            case "show_custgroup" :
            	$slect2='class="dropbtn2"';
            break;
            case "show_return" :
            	$slect1='class="dropbtn2"';
            break;
            case "show_disposal" :
            	$slect1='class="dropbtn2"';
            break;
            case "device_mgmt" :
            	$slect4='class="dropbtn2"';
            break;
            case "unlocked" :
            	$slect5='class="dropbtn2"';
            break;
            case "quotation" :
            	$slect6='class="dropbtn2"';
            break;
            case "quotation_ongoing" :
            	$slect6='class="dropbtn2"';
            break;
            case "quotation_approve" :
            	$slect6='class="dropbtn2"';
            break;
            case "quotation_list" :
            	$slect6='class="dropbtn2"';
            break;
            case "unic_items" :
            	$slect7='class="dropbtn2"';
            break;
            case "shipment" :
            	$slect8='class="dropbtn2"';
            break;
            case "chque" :
            	$slect9='class="dropbtn2"';
            break;
            case "chque_range" :
            	$slect9='class="dropbtn2"';
            break;
            case "clear_chque_list" :
            	$slect9='class="dropbtn2"';
            break;
            case "chque_return" :
            	$slect9='class="dropbtn2"';
            break;
            case "inv_mgmt" :
            	$slect12='class="dropbtn2"';
            break;
            case "authorize_code" :
            	$slect10='class="dropbtn2"';
            break;
            case "manage_user" :
            	$slect11='class="dropbtn2"';
            break;
            case "payment" :
            	$slect12='class="dropbtn2"';
            break;
            case "payment_history" :
            	$slect12='class="dropbtn2"';
            break;
         }
}   

if($_REQUEST['components']=='purchase_order'){
        switch ($_REQUEST['action'])
        {
            case "home" :
            	$slect1='class="dropbtn2"';
            break;
            case "list_po" :
            	$slect2='class="dropbtn2"';
            break;
            case "one_po" :
            	$slect2='class="dropbtn2"';
            break;
            case "supplier" :
            	$slect3='class="dropbtn2"';
            break;
         }
} 
if($_REQUEST['components']=='hr'){
        switch ($_REQUEST['action'])
        {
            case "home" :
            	$slect1='class="dropbtn2"';
            break;
         }
} 
  
if($_REQUEST['components']=='fin'){
        switch ($_REQUEST['action'])
        {
            case "home" :
            	$slect1='class="dropbtn2"';
            break;
            case "expense" :
            	$slect2='class="dropbtn2"';
            break;
            case "list_expense" :
            	$slect2='class="dropbtn2"';
            break;
            case "one_expense" :
            	$slect2='class="dropbtn2"';
            break;
            case "journal_entry" :
            	$slect3='class="dropbtn2"';
            break;
            case "list_journal" :
            	$slect3='class="dropbtn2"';
            break;
            case "one_journal" :
            	$slect3='class="dropbtn2"';
            break;
            case "quotation" :
            	$slect4='class="dropbtn2"';
            break;
            case "quotation_ongoing" :
            	$slect4='class="dropbtn2"';
            break;
            case "quotation_list" :
            	$slect4='class="dropbtn2"';
            break;
            case "report" :
            	$slect5='class="dropbtn2"';
            break;
            case "rep_balance_sheet" :
            	$slect5='class="dropbtn2"';
            break;
            case "rep_profit_and_loss" :
            	$slect5='class="dropbtn2"';
            break;
            case "rep_trial_balance" :
            	$slect5='class="dropbtn2"';
            break;
            case "daily_sale" :
            	$slect5='class="dropbtn2"';
            break;
            case "cust_sale" :
            	$slect5='class="dropbtn2"';
            break;
            case "credit" :
            	$slect5='class="dropbtn2"';
            break;
            case "chque" :
            	$slect6='class="dropbtn2"';
            break;
            case "chque_return" :
            	$slect6='class="dropbtn2"';
            break;
            case "salary" :
            	$slect7='class="dropbtn2"';
            break;
            case "one_salary" :
            	$slect7='class="dropbtn2"';
            break;
            case "payroll" :
            	$slect8='class="dropbtn2"';
            break;
            case "payroll_list" :
            	$slect8='class="dropbtn2"';
            break;
            case "payroll_one" :
            	$slect8='class="dropbtn2"';
            break;
            case "loan" :
            	$slect9='class="dropbtn2"';
            break;
            case "loan_one" :
            	$slect9='class="dropbtn2"';
            break;
            case "chart_of_accounts" :
            	$slect10='class="dropbtn2"';
            break;
            case "one_chart_of_accounts" :
            	$slect10='class="dropbtn2"';
            break;
            case "acount_history" :
            	$slect10='class="dropbtn2"';
            break;
         }
}   

if($_REQUEST['components']=='report'){
        switch ($_REQUEST['action'])
        {
            case "sales_report" :
            	$slect1='class="dropbtn2"';
            break;
            case "sales_trend" :
            	$slect2='class="dropbtn2"';
            break;
            case "deleted" :
            	$slect3='class="dropbtn2"';
            break;
            case "salesman" :
            	$slect4='class="dropbtn2"';
            break;
            case "chque" :
            	$slect5='class="dropbtn2"';
            break;
            case "credit" :
            	$slect6='class="dropbtn2"';
            break;
            case "payment_commision" :
            	$slect7='class="dropbtn2"';
            break;
            case "unlocked" :
            	$slect8='class="dropbtn2"';
            break;
            case "return_items" :
            	$slect9='class="dropbtn2"';
            break;
            case "return_one" :
            	$slect9='class="dropbtn2"';
            break;
            case "cost" :
            	$slect10='class="dropbtn2"';
            break;
            case "sub" :
            	$slect11='class="dropbtn2"';
            break;
            case "approval" :
            	$slect12='class="dropbtn2"';
            break;
         }
}   
if($_REQUEST['components']=='settings'){
        switch ($_REQUEST['action'])
        {
            case "manage_user" :
            	$slect1='class="dropbtn2"';
            break;
            case "edit_user" :
            	$slect1='class="dropbtn2"';
            break;
            case "manage_category" :
            	$slect2='class="dropbtn2"';
            break;
            case "system_settings" :
            	$slect3='class="dropbtn2"';
            break;
            case "devices" :
            	$slect4='class="dropbtn2"';
            break;
            case "bill_edit" :
            	$slect5='class="dropbtn2"';
            break;
         }
}     

?>

