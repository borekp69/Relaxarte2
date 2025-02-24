<?
$uzivatel_id  = 10;

  require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
  $sql_trenink_plan = "SELECT * FROM treninkovy_plan WHERE uzivatel_id = $uzivatel_id ";
  $result_trenink_plan = $conn->query($sql_trenink_plan);
          while($radek_trenink_plan = $result_trenink_plan->fetch_assoc()) {
              $datum_treninku_zacatek = $radek_trenink_plan["datum_treninku_zacatek"];
              $datum_treninku_konec = $radek_trenink_plan["datum_treninku_konec"];
              $pocet_lekci = $radek_trenink_plan["pocet_lekci"];
              $k_cerpani = $radek_trenink_plan["k_cerpani"];
              $lektor_procedury =  $radek_trenink_plan["lektor_procedury"];
              $typ_treninku = $radek_trenink_plan["typ_treninku"];
              $detail_zamereni = $radek_trenink_plan["detail_zamereni"]; 
              $skupinovy_dynamicke_cviceni = $radek_trenink_plan["skupinovy_dynamicke_cviceni"]; 
              $skupinovy_dynamicka_meditace = $radek_trenink_plan["skupinovy_dynamicka_meditace"]; 
              $skupinovy_zdrave_jogove_protazeni = $radek_trenink_plan["skupinovy_zdrave_jogove_protazeni"]; 
              $skupinovy_tajczy_cjuan = $radek_trenink_plan["skupinovy_tajczy_cjuan"]; 
              $zpusob_zvyseni_kondice = $radek_trenink_plan["zpusob_zvyseni_kondice"];
              $zpusob_nabrani_svalove_hmoty = $radek_trenink_plan["zpusob_nabrani_svalove_hmoty"];
              $zpusob_dychani_posileni_hss = $radek_trenink_plan["zpusob_dychani_posileni_hss"];
              $zpusob_posileni_panevniho_dna = $radek_trenink_plan["zpusob_posileni_panevniho_dna"];
              $zpusob_stabilizace_kloubu = $radek_trenink_plan["zpusob_stabilizace_kloubu"];
              $zpusob_srovnani_patere = $radek_trenink_plan["zpusob_srovnani_patere"];
              $zpusob_energeticka_harmonizace = $radek_trenink_plan["zpusob_energeticka_harmonizace"];
              $zpusob_dysbalance = $radek_trenink_plan["zpusob_dysbalance"];
              $zpusob_koordinace  = $radek_trenink_plan["zpusob_koordinace"];
              $zpusob_psychika = $radek_trenink_plan["zpusob_psychika"];
              $prihlaseny_uzivatel = $radek_trenink_plan["prihlaseny_uzivatel"];
              $datum = $radek_trenink_plan["datum"];
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


<div class="row" style="border-style: double;">
  <div class="col-sm-12"  style="background-color:<? echo $barva_box; ?>;">  
   <br>   


                  <div class="col-sm-3"> 
                  <b>Typ tréninku: <? echo $typ_treninku_tmp;?></b> 
                  </div>

                  <div class="col-sm-2"> 
                  Stav: <? echo $stav_treninku_str?>
                  </div>

                  <div class="col-sm-2"> 
                  <b>K čerpání: <? echo  $k_cerpani; ?></b> 
                  </div>

                  <div class="col-sm-3"> 
                  <b><? echo $lektor;?></b>                    
                  </div>


   


              <script type="text/javascript" language="JavaScript">
              function HideContent(d) {
              document.getElementById(d).style.display = "none";
              }
              function ShowContent(d) {
              document.getElementById(d).style.display = "block";
              }
              function ReverseDisplay(d) {
              if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
              else { document.getElementById(d).style.display = "none"; }
              }
              </script>

    
              <div class="col-sm-2"> 
                          <a href="javascript:ReverseDisplay('uniquename_T<? echo $treninkovy_plan_id;?>')">
                          <button type="button" class="btn btn-default btn-sm" >
                          <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Podrobnosti</button>
                          </a><br><br>
              </div>
       </div>
  
      </div>




<?
}
?>