<?php if (isset($_POST['dodaj_ucitelja_k_predmetu'])) {
  
  $id_predmeta=$_POST['id_predmeta'];

?>
<form action="#" method="post">


<select name="id_ucitelja">
<?php $res=mysqli_query($con, "select * from ucitelji where id_ucitelja not in (select ucitelj_predmet.id_ucitelja from ucitelj_predmet where ucitelj_predmet.id_predmeta='$id_predmeta')");

while ($row=mysqli_fetch_array($res)) {


 ?>
  <option value="<?php echo $row['id_ucitelja']; ?>"><?php echo $row['ime_ucitelja'] . " " . $row['priimek_ucitelja']; ?></option>

<?php }
?>
<input type="hidden" name="id_predmeta" value="<?php echo $id_predmeta; ?>">
<input type="submit" name="dodaj_ucitelja_k_predmetu2" value="Dodaj učitelja">
</form><?php
}
if (isset($_POST['dodaj_ucitelja_k_predmetu2'])){
  $id_ucitelja=$_POST['id_ucitelja'];
  $id_predmeta=$_POST['id_predmeta'];
  mysqli_query($con, "insert into ucitelj_predmet (id_ucitelja, id_predmeta) values ('$id_ucitelja','$id_predmeta')");
  header("location:predmeti.php");
  ob_end_flush();
}
 ?>
