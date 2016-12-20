<div class="row">
  <div class="col-md-4"><!-- Kolom kiri start -->
  <div class="card">
    <div class="card-header"><h4>Form Rasa</h4></div>
    <div class="card-body"><!-- card body start   -->
    <div class="row">
      <div class="col-md-12">
      <form action="" method="POST">
        <label>Keterangan</label>
        <input type="text" class="form-control" name="keterangan">
        <input type="submit" class="btn btn-danger" name="" value="Submit">
        <input type="reset" class="btn btn-danger" name="" value="Cancel">
      </form>
      </div>
    </div>
    </div><!-- card body end  -->
  </div>
  </div><!-- Kolom kiri end -->
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">List Rasa</div>
      <div class="card-body">
        <table class="datatable table table-striped primary cellspacing="0" width="100%"">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Keterangan</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            while ($row_category = $st->fetch(PDO::FETCH_ASSOC)){
            extract($row_category);
            echo "<tr>";
              echo "<td>{$no}</td>";
              echo "<td>{$id_rasa}</td>";
              echo "<td>{$keterangan}</td>";
              //Button EDIT
              echo "<td>";
                echo "<a href='#' class='btn btn-success btn-sm'>";
                  echo "<span class='fa fa-pencil'></span>";
                echo "</a>";
                echo "&nbsp;";
                //Button Delete
                echo "<a href='#' class='btn btn-info btn-sm'>";
                  echo "<span class='fa fa-trash-o'></span>";
                echo "</a>";
              echo "</td>";
            echo "</tr>";
            $no++;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>