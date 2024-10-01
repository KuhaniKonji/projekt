<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime učenca</th>
      <th>Ime naloge</th>
      <th>Predmet</th>
      <th>Naloga</th>
      <th>Oceni</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_oceni_nalogo=mysqli_fetch_array($res_oceni_nalogo)) {
      $id_oddane_naloge=$row_oceni_nalogo['id_oddane_naloge'];
      // code...
    ?>
    <tr>
      <td><?php echo $row_oceni_nalogo['ime'] . " " . $row_oceni_nalogo['priimek']; ?></td>
      <td><?php echo $row_oceni_nalogo['ime_naloge']; ?></td>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_oceni_nalogo['id_predmeta'] ?>"><?php echo $row_oceni_nalogo['ime_predmeta'] . " " . $row_oceni_nalogo['letnik']; ?></a></td>
      <td><a href="<?php echo $row_oceni_nalogo['naloga']; ?>" download> Naloga</td>
      <td> <form action="#" method="post">
        <input type="hidden" name="id_oddane_naloge" value="<?php echo $id_oddane_naloge; ?>">
        <input type="number" min="1" max="5" name="ocena">
        <input type="submit" name="oceni">
      </form> </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
