<style>
  .w3l-form-12 .grid-column-2{
    grid-template-columns : auto 0fr
  }
  .column1{
    width: 50%;
    margin: 0 auto;
  }

</style>



<section class="w3l-form-12">
		<div class="form-12-content py-5" id="services">
			<div class="container py-md-3">
				<Ul id="dispdata"></Ul>
				<div class="grid grid-column-2 py-md-5">
						
					<div class="column1">
							 <form  method="post">
								<div class="">
									<input type="text" name="username" class="form-input" placeholder="username">
								</div>
                                <div class="">
									<input type="password" name="password" class="form-input" placeholder="user password">
								</div>
								<div class="">
									<input type="email" name="email" class="form-input" placeholder="user email">
								</div>
								<div class="">
									<input type="mobile" name="mobile" class="form-input" placeholder="user mobile">
								</div>
								
								<button type="submit" name="register"  class="btn btn-secondary btn-theme2">Submit</button>
							</form>
								
              
				</div>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script>
	$.ajax({
        url:"http://localhost/29SEP_LARAVEL_ttS/php/14API/allusers"
		
		success: function (response) {
			.console.log(response);
			let data = JSON.parse(response)
			.console.log(data);
		}

})
</script>