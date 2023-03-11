<!--HEADER -->
<?php require_once 'header.php' ?>

    <div class="page-content">
    	<div class="row">
		  
		<!-- SIDEBAR -->
		<?php require_once 'sidebar.php' ?>

		  <div class="col-md-10">
		  	

		  	<div class="row">

				<!--- ALERT START  -->
				<?php  
						if($_GET['durum'] == "bos"){ ?>

							<div class="col-md-12">
								<div class="alert alert-warning"> <span class="glyphicon glyphicon-remove"></span> Boş alan bırakmayın</div>
							</div>

					<?php
							}elseif($_GET['durum'] == "no"){ ?>
							<div class="col-md-12">
								<div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span> İşlem gerçekleştirilemedi</div>
							</div>
					<?php }elseif($_GET['durum'] == "ok"){ ?>
							<div class="col-md-12">
								<div class="alert alert-success"> <span class="glyphicon glyphicon-check"></span> İşlem başarılı!</div>
							</div>

					<?php }elseif($_GET['guncelle'] == "bos"){ ?>
						<div class="col-md-12">
								<div class="alert alert-warning"> <span class="glyphicon glyphicon-remove"></span> Boş Alan bırakmayın.</div>
							</div>
						<?php
					}elseif($_GET['guncelle'] == "no"){ ?>
							<div class="col-md-12">
								<div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span> İşlem gerçekleştirilemedi</div>
							</div>
					<?php
					}elseif($_GET['guncelle'] == "ok"){ ?>
							<div class="col-md-12">
								<div class="alert alert-success"> <span class="glyphicon glyphicon-check"></span> İşlem başarılı!</div>
							</div>
					<?php
					}elseif($_GET['beceri-sil'] == "ok"){ ?>
							<div class="col-md-12">
								<div class="alert alert-success"> <span class="glyphicon glyphicon-check"></span> İşlem başarılı!</div>
							</div>
					<?php
					}elseif($_GET['beceri-sil'] == "no"){ ?>

							<div class="col-md-12">
								<div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span> İşlem gerçekleştirilemedi</div>
							</div>
					<?php
					}
					?>

						<!--- ALERT FINISH  -->

		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Okullarım</div>
                          <div class="panel-options">
								<a href="okul-ekle.php" data-rel="collapse" style="color:white;"><i class="glyphicon glyphicon-plus"></i></a>
							</div>
						
						
		  			</div>
		  			<div class="content-box-large box-with-header">
                      <table class="table">
			              <thead>
			                <tr>
			                  <th>ID</th>
			                  <th>Okul Adı</th>
			                </tr>
			              </thead>
                          <tbody>


                        <?php
                            $sql = "SELECT * FROM egitim";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            $is = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($is as $row) {  ?>
                          
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['adi']; ?></td>
                                        <td>
                                
                                        </td>
                                        <td>
                                            <a href="okul-duzenle.php?okul_id=<?php echo $row['id'] ?>"  ><button class="btn btn-xs btn-primary "><span class="glyphicon glyphicon-edit"></span> Düzenle</button> </a>
                                            <br>
                                            <br>
                                            <a href="islem.php?is_sil=<?php echo $row['id'] ?>"  ><button class="btn btn-xs btn-danger "><span class="glyphicon glyphicon-remove"></span> Sil</button> </a>


                                        </td>
                                        </tr>
                          <?php
                            }
                        ?>

			                
			                
			              </tbody>
			            </table>



						<br /><br />
					</div>
		  		</div>
		  	</div>

		  	
		  </div>
		</div>
    </div>

<!-- FOOTER -->
<?php require_once 'footer.php' ?>

