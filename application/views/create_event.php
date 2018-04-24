<?php 

	$this->load->view('nav');
 ?>
 <form method="POST" action=""> 
		<div class="container">
		  <h2>Buat Event</h2>
		  <div id="accordion">
		    <div class="card">
		      <div class="card-header">
		        <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
		        <h4> 1. Detail Event </h4>
		        </a>
		      </div>
		      <div id="collapseOne" class="collapse show">
		        <div class="card-body">
		          <div class="container">		
						<form class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2" for="event"><strong>Judul Event*</strong></label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="judul" placeholder="Nama Event">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="lokasi"><strong>Lokasi Event</strong></label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="lokasi" placeholder="Lokasi Venue">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="tglevent">Tanggal Event</label>
								<div class="col-sm-10">
					                <div class='input-group date' id='datetimepicker1'>
					                    <input type='date' name="tanggal" class="form-control" />
					                </div>
					            </div>
							<script type="text/javascript">
							    $(function () {
							    $('#datetimepicker1').datetimepicker();
							    });
							</script>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="addimage"><strong>Event Image</strong></label>
								<div class="col-sm-10">
								<form action="" method="post" enctype="multipart/form-data">
										<input type="file" name="fileToUpload" name="image" id="fileToUpload">
								</form>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="ket"><strong>Tentang Event</strong></label>
								<div class="col-sm-10">
									<textarea class="form-control" name="tentang_event" rows="5" id="comment" placeholder="Tulis Deskripsi Event"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="ket"><strong>Event organizer</strong></label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="event_organizer" placeholder="Siapa yang mengorganisir Event?">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="ket"><strong>Tentang Organizer</strong></label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="5" id="comment" placeholder="Tulis Deskripsi Organizer"></textarea>
								</div>
							</div>
						</form>		
					</div>

		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
		        <h4> 2. Membuat Tiket </h4>
		      </a>
		      </div>
		      <div id="collapseTwo" class="collapse">
		        <div class="card-body">
		        	<div class="container">		
						<form class="form-horizontal">
							<div class="form-group">
								<button type="button" name="tiket_gratis" class="btn btn-warning btn-md">Tiket gratis</button>
								<button type="button" name="tiket_berbayar" class="btn btn-warning btn-md">Tiket Berbayart</button>
								<button type="button" name="donasi" class="btn btn-warning btn-md">Donasi</button>
							</div>
						</form>
					</div>
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		        <h4> 3. Pengaturan Tambahan </h4>
		        </a>
		      </div>
		      <div id="collapseThree" class="collapse">
		        <div class="card-body">
		          <div class="container">		
						<form class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2" for="event"><strong>Daftar privasi</strong></label>
								<div class="col-sm-10">
									<div class="radio">
									  <label><input type="radio" name="optradio" value="Halaman publik">  Halaman publik</label>
									</div>
									<div class="radio">
									  <label><input type="radio" name="optradio" value="Halaman privasi"> Halaman privasi</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="event"><strong>Event Type</strong></label>
								<div class="col-sm-10">
									<label for="sel1">Select The Type of Event:</label>
									  <select class="form-control" id="sel1">
									    <option>Concert/Performance</option>
									    <option>Training/Workshop/Seminar</option>
									    <option>Game/Competition</option>
									    <option>Others</option>
									  </select>									
								</div>
							</div>							
							<div class="form-group">
								<label class="control-label col-sm-2" for="event"><strong>Event Topic</strong></label>
								<div class="col-sm-10">
									<label for="sel1">Select The Topic of Event:</label>
									  <select class="form-control" id="sel1">
									    <option>Film/Music/Entertainment</option>
									    <option>Science/Technology</option>
									    <option>Food/Drink</option>
									    <option>Others</option>
									  </select>									
								</div>
							</div>	
							<div class="form-group">
								<label class="control-label col-sm-2" for="event"><strong>Remaining Tickets</strong></label>
								<div class="col-sm-10">
									<label class="checkbox-inline"><input type="checkbox" value=""> Show the number of remaining tickets on your event listing</label>										
								</div>
							</div>	
						</form>
					</div>
				  </div>		         
		        </div>
		      </div>
		    </div>
		  </div>
		 <center>
			<h1> Nice Job! You're almost done!</h1>
			<h2><button type="submit" class="btn btn-danger">SAVE</button></h2>
		</center>
		</div>
		</form>
<div>	<?php include"footer.php"; ?>s</div>
</body>
</html>


