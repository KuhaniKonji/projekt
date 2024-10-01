<table class="table" align="center">
  <thead>
    <tr>
      <th>Ocene</th>
      <th>Povprečje</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php while ($row_redovalnica=mysqli_fetch_array($res_redovalnica)) {
        echo $row_redovalnica['ocena'];
        // code...
      } ?></td>
      <td><?php $row_avg=mysqli_fetch_array($res_avg); echo $row_avg['AVG(ocenjene_naloge.ocena)']; ?></td>
    </tr>
  </tbody>
</table>
