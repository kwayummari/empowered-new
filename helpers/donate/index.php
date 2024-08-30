<div class="container">

<ul class="tabs">
	<li><a href="#tab1">1. Amount</a></li>
	<li><a href="#tab2">2. Name</a></li>
	<li><a href="#tab3">3. Payment</a></li>
</ul><!-- end .tabs -->

<div class="step" id="tab1">
	<h3>Select a Donation Amount</h3>
	<div class="amount">$10</div>
	<div class="amount">$25</div>
	<div class="amount">$50</div>
	<div class="amount">
		<input type="text" />
	</div>
	
	<div class="next">Next <i class="ion-ios-arrow-forward"></i></div>
</div><!-- end #tab1 -->

<div class="step" id="tab2">
	<h3>Name &amp; Info</h3>
	<form action="" class="info">
		<label for="name">Name</label>
		<input type="text" name="name" id="name" />
		
		<label for="email">email</label>
		<input type="email" name="email" id="email" placeholder="feelthebern@gmail.com" />
		
		<label for="address">address</label>
		<input type="text" name="address" id="address" />
		
		<label for="state">State</label>
		<select name='state'>
		  <option value='SQ'>ST</option>
		  <option value='SW'>SW</option>
		  <option value='SE'>SE</option>
		</select>
		
		<label for="zip">ZIP</label>
		<input type="text" name="zip" id="zip" />
		
		label
	</form>
	<div class="next">Next <i class="ion-ios-arrow-forward"></i></div>
</div><!-- end #tab2 -->

<div class="step" id="tab3">
	<div class="final">Complete Donation <i class="ion-checkmark"></i></div>
</div><!-- end #tab2 -->
	
</div><!-- end .container -->

