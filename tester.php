if ($selectedClient == '' && ($from=='' && $to=='')) {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes' and p.Project_Name='$id' order by Date_After";
}
else if ($selectedClient == '') {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes' and p.Project_Name='$id' and (Date_After between '$from' and '$to') order by Date_After";
}
 if ($selectedClient != '' && $id != '') {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and p.Client_Name='$selectedClient' and p.Project_Name='$id' order by Date_After";
}
//for date only
 if ($selectedClient == '' && $id == ''  && ($from !='' && $to !='')) {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and ( Date_After between '$from' and '$to') order by Date_After";
}
 if($id != '' && $selectedClient != '' && ($from!='' && $to!='')){
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes' and p.Project_Name='$id' and p.Client_Name='$selectedClient' and Date_After between '$from' and '$to' order by Date_After";
}
 if ($id =='' && ($from=='' && $to=='')) {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and p.Client_Name='$selectedClient' order by Date_After";
}
else if ($id =='') {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and p.Client_Name='$selectedClient' and ( Date_After between '$from' and '$to') order by Date_After";
}
