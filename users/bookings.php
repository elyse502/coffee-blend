<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php

    $bookings = $conn->query("SELECT * FROM bookings WHERE user_id='$_SESSION[user_id]'");
    $bookings->execute();

    $allBookings = $bookings->fetchAll(PDO::FETCH_OBJ);


?>

<section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?php echo APPURL; ?>/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Your Bookings</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo APPURL; ?>">Home</a></span> <span>Your Bookings</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
						<?php if(count($allBookings) > 0) : ?>
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>first_name</th>
						        <th>last_name</th>
						        <th>date</th>
						        <th>time</th>
						        <th>phone</th>
						        <th>message</th>
						        <th>status</th>

						      </tr>
						    </thead>
						    <tbody>
								<?php foreach($allBookings as $booking): ?>
						      <tr class="text-center">
						        <td class="product-remove"><?php echo $booking->first_name; ?></td>
						        
						        <td class="image-prod"><?php echo $booking->last_name; ?></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $booking->date; ?></h3>
						        </td>
						        
						        <td class="price"><?php echo $booking->time; ?></td>
						        
						        <td>
                                <?php echo $booking->phone; ?>
					            </td>
						        
						        <td class="total"><?php echo $booking->message; ?></td>
						        <td class="total"><?php echo $booking->status; ?></td>
						      </tr>
							<?php endforeach; ?>
						      
						    </tbody>
						  </table>
						  <?php else : ?>
							<p>you do not have any bookings for now</p>
						  <?php endif; ?>
					  </div>
    			</div>
    		</div>
    		
			</div>
		</section>



<?php require "../includes/footer.php"; ?>
