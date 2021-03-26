<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data Form Intern</title>
  </head>
  <body>
    <h1 align="center"><b>Semua Data Form Internship</b></h1>
	<div class="table-responsive container">
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID FIR</th>
	  	<th scope="col">Date</th>
	  	<th scope="col">Position/Title</th>
	  	<th scope="col">Company</th>
	  	<th scope="col">Report To</th>
	  	<th scope="col">Departement</th>
	  	<th scope="col">Brand</th>
	  	<th scope="col">Location</th>
	  	<th scope="col">Education Background</th>
	  	<th scope="col">Day Efectif/Month</th>
	  	<th scope="col">Day Used</th>
	  	<th scope="col">UMR Default</th>
	  	<th scope="col">Presentation</th>
	  	<th scope="col">Result Insentif</th>
	  	<th scope="col">Total Insentif</th>
	  	<th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
		$no = 1;
		foreach($AllData as $data) { ?>
    <tr>
      <th scope="row"><?=$no++;?></th>
      <td><?=$data->id_fir;?></td>
      <td><?=$data->date;?></td>
      <td><?=$data->position_title;?></td>
      <td><?=$data->company;?></td>
      <td><?=$data->report_to;?></td>
      <td><?=$data->departement;?></td>
      <td><?=$data->brand;?></td>
      <td><?=$data->location;?></td>
      <td><?=$data->education_background;?></td>
      <td><?=$data->dayefectif_month;?></td>
      <td><?=$data->day_used;?></td>
      <td><?=$data->umr_default;?></td>
      <td><?=$data->presentation;?></td>
      <td><?=$data->result_insentif;?></td>
      <td><?=$data->total_insentif;?></td>
      <td>
				<a href="<?=base_url('form/update?id='.$data->id_fir);?>" class="btn btn-success">Edit</a> | &nbsp;
				<a href="" class="btn btn-danger">Delete</a>
			</td>
		</tr>
	<?php } ?>
  </tbody>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
