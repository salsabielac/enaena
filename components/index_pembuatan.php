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
        <input type="submit" class="btn btn-danger" name="Submit">
        <input type="reset" class="btn btn-danger"  name="Cancel">
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
            $view = $connect->query("SELECT * FROM tb_pembuatan");
          $no = 1;
          while ($data = $view->fetch_assoc()) {
            echo '<br>';
            echo '<tr>';
            echo '<td>' .$no. "</td>";
            echo '<td>' .$data['id']. '</td>';
            echo '<td>' .$data['rasa']. '</td>';  
             echo '<td>';
                echo '<a class="btn btn-success btn-sm" href="adm-pembuatan-edit.php?id='.$data['id'].'" >';
                  echo '<span class="fa fa-pencil"></span>';
                echo '</a>';
                echo "&nbsp;";
                //Button Delete
                echo '<a class="btn btn-danger btn-sm" href="adm-pembuatan.php?id='.$data['id'].'" >';
                  echo '<span class="fa fa-trash"></span>';
                echo '</a>';
              echo '</td>';
            echo '</tr>';
            $no++;
           }
           
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>