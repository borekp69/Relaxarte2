<?
//$uzivatel_id  = 10;
$treninkovy_plan_id = htmlspecialchars(trim("$_GET[treninkovy_plan_id]")); 
$treninkovy_plan_id_form = htmlspecialchars(trim("$_GET[treninkovy_plan_id]")); 

  require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
  $sql_trenink_plan = "SELECT * FROM treninkovy_plan WHERE treninkovy_plan_id = $treninkovy_plan_id ";
  $result_trenink_plan = $conn->query($sql_trenink_plan);
          while($radek_trenink_plan = $result_trenink_plan->fetch_assoc()) {


        
              $k_cerpani = $radek_trenink_plan["k_cerpani"];
              $lektor_procedury =  $radek_trenink_plan["lektor_procedury"];
              $typ_treninku = $radek_trenink_plan["typ_treninku"];          
              $stav_treninku = $radek_trenink_plan["stav_treninku"];  
              $treninkovy_plan_id = $radek_trenink_plan["treninkovy_plan_id"];  


  if ($stav_treninku == 1){ //naplanovano
      $barva_box = '#a1facd';
      $stav_treninku_str = 'Naplánováno';
     
  }elseif($stav_treninku == 2){ //vycerpano
      $barva_box = '#bfb8fa';
      $stav_treninku_str = 'Vyčerpáno'; 

  }elseif($stav_treninku == 3){ //stornováno klientem
      $barva_box = '#eee4a9';
      $stav_treninku_str = 'Storno klientem'; 

  }elseif($stav_treninku == 4){ //stornováno Relaxartem
      $barva_box = '#eee4a9';
      $stav_treninku_str = 'Storno Relexartem'; 

  }else{
      $barva_box = '#828283'; // chybovy stav
      $stav_treninku_str = 'Chybný stav'; 
}




            if ($typ_treninku == 1){  
                  $typ_treninku_tmp = 'individuální';

                  }else if ($typ_treninku == 2){ 
                  $typ_treninku_tmp = 'skupinový';
              
                  }else if ($typ_treninku == 3){ 
                      $typ_treninku_tmp = 'kombinace';  
              
                  }else{ 
                      $typ_treninku_tmp = 'Chybný stav tréninku';
                  }

                              require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                              $sql = "SELECT * FROM lektor WHERE lektor_id = $lektor_procedury";
                              $result = $conn->query($sql);
                              while($radek = $result->fetch_assoc()) {
                              $lektor = $radek["lektor_titul"].' '. $radek["lektor_prijmeni"].' '.$radek["lektor_jmeno"];                               
                              } 
                              $conn->close();
?>



       

               
                 <? //echo $stav_treninku_str;?>      
                <?// echo 'stav_treninku_str:'.$stav_treninku_str.'<br>';?>
                <b>Stav: <? echo $stav_treninku_str;?></b>
                  

           
          


   






<?
}
?>
