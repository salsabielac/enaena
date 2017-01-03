<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"><span class="highlight">Menus</span></a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <div class="list-group">
    <label>Jenis Kue</label>
			    <?php
					$no = 1;
					$view = $connect->query("SELECT * FROM tb_jenis");
					$no = 1;
					while ($data = $view->fetch_assoc()) {		
          ?>
      <a href="#" class="list-group-item list-group-item">
        <?php echo $data['ket_jenis'];?>
      </a>
          <?php  } ?>
    </div>
  </div>
  <div class="sidebar-footer">
  </div>
</aside>