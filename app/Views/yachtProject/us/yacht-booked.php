<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Yacht Book</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!-- faviicon -->
	<link rel="icon" href="<?php echo site_url('yachtProject/us/');?>images/favicon.ico" type="image/x-icon">

</head>
<body>

	<section class="my-4">
		<div class="container">
			<div class="d-flex py-3">
				<img src="<?= base_url()?>uploads/thumbnail/<?php echo $record['thumb-img']?>" width="400px" height="450px" class="img-thumbnail m-auto">
			</div>

			<div class="text-center">
				<h2>Congratulations!</h2>
				<p class="text-muted">Your YACHT has been booked</p>
				<p class="text-primary h4">Basic Details Of Yacht</p>
			</div>

			<div class="row mt-5" style="margin-left: 250px;">
				<div class="col-6 m-auto">
					<p><span style="font-weight: bold;">Build Name</span> : <?php echo $record['build_name'];?></p>
					<p><span style="font-weight: bold;">Yacht Length</span> : <?php echo $record['yacht_length'];?></p>
					<p><span style="font-weight: bold;">Size :</span> <?php echo $record['size'];?></p>
					<p><span style="font-weight: bold;">Yacht Name</span> : <?php echo $record['hname'];?></p>
					<p><span style="font-weight: bold;">Yacht Type</span> : <?php echo $record['yacht_type'];?></p>
					<p><span style="font-weight: bold;">Engine</span> : <?php echo $record['engine'];?></p>
				</div>
				<div class="col-6">
					<p><span style="font-weight: bold;">Maximum Speed</span> : <?php echo $record['max_speed'];?></p>
					<p><span style="font-weight: bold;">Builder</span> : <?php echo $record['builder'];?></p>
					<p><span style="font-weight: bold;">Year of Build</span> : <?php echo $record['year_of_build'];?></p>
					<p><span style="font-weight: bold;">Guest</span> : <?php echo $record['guest'];?></p>
					<p><span style="font-weight: bold;">Cabin</span> : <?php echo $record['cabin'];?></p>
					<p><span style="font-weight: bold;">Price</span> : <?php echo $record['price'];?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
