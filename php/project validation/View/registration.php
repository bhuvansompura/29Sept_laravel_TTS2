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
				<div class="grid grid-column-2 py-md-5">
						
					<div class="column1">
						<h4 class="tagline">registration</h4>
						<!-- <p>Fill in below form to find your courses</p> -->
							<form  method="post">
								<div class="">
									<input type="text" name="username" onblur="checkred(this)" class="form-input" placeholder="username" required>
								</div>
                                <div class="">
									<input type="password" name="password" class="form-input" placeholder="user password"required>
								</div>
								<div class="">
									<input type="email" name="email" class="form-input" placeholder="user email"required>
								</div>
								<div class="">
									<input type="mobile" name="mobile" class="form-input" placeholder="user mobile"required>
								</div>
								
								<button type="submit" name="register"  class="btn btn-secondary btn-theme2">Submit</button>
							</form>
								
              
				</div>
			</div>
		</div>
	</section>
	<script>
		function checkred(e) {
			const el = e;
			// New element
			const newEl = document.creatElement("div");
			el.before(newEl);
			el.after(newEl);


		}
	</script>