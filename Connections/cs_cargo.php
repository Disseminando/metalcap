<select name="arq_cargo" id="arq_cargo">
 <option value="0">Selecione</option>
<?php
$con = mysql_connect ("localhost", "root", "");
if (!$con)
  {
  die ('Não foi possível conectar:'. mysql_error());
  }
  mysql_select_db ("metalcap", $con);
  $sql = "SELECT * FROM cargo ORDER BY cargo_nome ASC";
     $qr = mysql_query($sql) or die(mysql_error());
     while($ln = mysql_fetch_assoc($qr)){
      echo '<option value="'.$ln['cargo_id'].'">'.$ln['cargo_nome'].'</option>';
     }
?>
</select>