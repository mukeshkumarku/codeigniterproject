<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-6 column">
					
					<form class="form-inline" role="form" id="frmadd" action="<?php echo base_url() ?>home/savedata" method="POST">
                             <div class="form-group">
							 <label for="exampleInputName">Name</label>
							 <input class="form-control"  name="name"id="exampleInputname" type="text" />
						     </div>
						     <div class="form-group">
							 <label for="exampleInputEmail1">Email address</label>
							 <input class="form-control" name="email" id="exampleInputemail" type="email" />
						     </div>
							 <div class="form-group">
							 <label for="exampleInputName">Mobile</label>
							 <input class="form-control"  name="mobile" id="exampleInputmobile" type="text" />
						     </div>
                          <!--   <div class="form-group">
							 <label for="exampleInputPhone">Phone</label>
							 <input class="form-control" name="phone" id="exampleInputEmail1" type="text" />
						     </div>-->
							 <input type="submit" class="btn btn-success" id="submit_data" value="submit">
					</form>
				</div>
				<div class="col-md-6 column">
					<h3>
						Contact us
					</h3> <address> <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> 
					<abbr title="Phone">P:</abbr> (123) 456-7890</address>
				</div>
			</div>
		</div>
	</div>
</div>





<script>
$(document).ready(function (){

        // add data
        $("#frmadd").submit(function (e){
            e.preventDefault();
            $("#loader").show();
            var url = $(this).attr('action');
            var data = $(this).serialize();
            $.ajax({
                url:url,
                type:'POST',
                data:data
            }).done(function (data){
                $("#response").html(data);
                $("#loader").hide();
    
            });
        });
	});
    </script> 

</body>
</html>


    