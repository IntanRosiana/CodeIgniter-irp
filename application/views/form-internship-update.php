<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Form Internship Recruitment</title>
</head>

<body>
    <center><img src="https://www.eurokarsgroup.com/wp-content/uploads/2019/11/Eurokars-Services-logo.jpg"></center>
    <h1 class="text-center">Form Internship Recruitment</h1>
    <div class="container">
		<form method="post" action="<?=base_url('form/updateProcess');?>">
        <div class="row">
            <div class="col-xs-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <label class="col-xs-12">ID FIR : </label>
                        <input class="form-control" name="id_fir" type="text" name="id_fir" value="<?=$dataForm->id_fir ?>" readonly/>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <label class="col-xs-12">Date : </label>
                        <input class="form-control" name="date" type="date" value="<?=$dataForm->date ?>"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <label class="col-xs-12">Position/Title : </label>
                        <select class="form-select" name="position_title" aria-label="Default select example">
                            <option>Open this select menu</option>
                            <option value="1" <?php if($dataForm->position_title == '1') { echo 'selected'; } ?>>Staff</option>
                            <option value="2" <?php if($dataForm->position_title == '2') { echo 'selected'; } ?>>Supervisior</option>
                            <option value="3" <?php if($dataForm->position_title == '3') { echo 'selected'; } ?>>Assistant Manager</option>
                            <option value="4" <?php if($dataForm->position_title == '4') { echo 'selected'; } ?>>Manager</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <label class="col-xs-12">Company : </label>
                        <input class="form-control" name="company" type="text" placeholder="Placeholder" value="<?=$dataForm->company ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <label class="col-xs-12">Report to : </label>
                        <input class="form-control" name="report_to" type="text" placeholder="Placeholder" value="<?=$dataForm->report_to ?>"/>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <label class="col-xs-12">Departement : </label>
                        <input class="form-control" name="departement" type="text" placeholder="Placeholder" value="<?=$dataForm->departement ?>" />
                    </div>
				</div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <label class="col-xs-12">Brand : </label>
                        <input class="form-control" name="brand" type="text" placeholder="Placeholder"  value="<?=$dataForm->brand?>" />
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <label class="col-xs-12">Location : </label>
                        <select class="form-select" name="location" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="1">Jakarta</option>
                            <option value="2">Bandung</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <label class="col-xs-12">Education Background : </label>

                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" value="associate_degree" name="degree" 
								aria-label="..." <?php if($dataForm->education_background == 'associate_degree') { echo 'checked'; } ?>>
                                Associate Degree
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" value="bachelor_degree" name="degree"
                                    aria-label="..." <?php if($dataForm->education_background == 'bachelor_degree') { echo 'checked'; } ?>>
                                Bachelor Degree
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" value="master_degree" name="degree"
                                    aria-label="..." <?php if($dataForm->education_background == 'master_degree') { echo 'checked'; } ?>>
                                Master Degree
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" value="other" name="degree"
                                    aria-label="..." <?php if($dataForm->education_background == 'other') { echo 'checked'; } ?>>
                                Other
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <label class="col-xs-12">Insentif Calculation : </label>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <label class="col-xs-12">Day Efectif/Month : </label>
                                <input class="form-control" name="dayefectif_month" type="number" placeholder="20"  value="<?=$dataForm->dayefectif_month ?>"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <label class="col-xs-12">Day Used : </label>
                                <input class="form-control" name="day_used" type="number" placeholder="20"  value="<?=$dataForm->day_used ?>" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <label class="col-xs-12">UMR Default : </label>
                                <input class="form-control" name="umr_default" type="number" placeholder="4.207.750"  value="<?=$dataForm->umr_default ?>" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <label class="col-xs-12">Presentation : </label>
                                <input class="form-control" name="presentation" type="number" placeholder="S1=75%. D3=65%"  value="<?=$dataForm->presentation ?>" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <label class="col-xs-12">Result Insentif : </label>
                                <input class="form-control" name="result_insentif" type="text" placeholder="S1 = UMR 75% D3 = UMR 65%"  value="<?=$dataForm->result_insentif ?>" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <label class="col-xs-12">Total Insentif : </label>
                                <input class="form-control" name="total_insentif" type="text" placeholder="(day efektif * day used)"  value="<?=$dataForm->total_insentif ?>" />
                            </div>
                        </div>
						<div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>
