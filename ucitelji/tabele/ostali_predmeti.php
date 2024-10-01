<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime predmeta</th>
      <th>Učitelj</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_ostali_predmeti=mysqli_fetch_array($res_ostali_predmeti)) {
      // code...
     ?>
    <tr>
      <td><?php echo $row_ostali_predmeti['ime_predmeta'] . " " . $row_ostali_predmeti['letnik']; ?></td>
      <td><?php echo $row_ostali_predmeti['ime_ucitelja'] . " " . $row_ostali_predmeti['priimek_ucitelja']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
