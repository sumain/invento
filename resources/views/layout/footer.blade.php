	
		 <!-- Footer -->
		 <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
	
	
      <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }} "></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }} "></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }} "></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }} "></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }} "></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }} "></script>

	</body>
</html>
<script>
	$(function(){              
	 $(".numbers").on("keyup", function(e) {
		 $(this).val($(this).val().replace(/[^\d]/g, ''));                    
	});   
	$(".float_numbers").on("keyup", function(e) {
		 $(this).val($(this).val().replace(/[^\d.]/g, ''));                    
	});  
	$('#sample_1_filter,#sample_purchase').addClass('pull-right');
	
  });
  function round(x) {
	  return Number.parseFloat(x).toFixed(2);
	}
	
  function view_modal(path){
   $.ajax({
		url : path,
		type: "GET",
		
		success: function(data)
		{
			$('.modal-content').html(data);
			$('#basic').modal('show'); // show bootstrap modal when complete loaded

		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			alert('Error get data from ajax');
		}
	});
  }
  
  
  $('#divisionid').on('change',function(){
		//var id = $(this).find(':selected').data('id');
		var id = $(this).val();
		var level = $('#level').val();
		$.ajax({
			url : 'home/getDistrictName',
			type: "get",
			dataType: "json",
			data:{'id':id,'level':level},
			success: function(data)
			{
				//var obj = JSON.parse(data);
				var option ='<option value="">All</option>';
				$.each(data.districts, function(key,val){
					option +='<option value="'+val.id+'">'+val.name+'</option>';
				})

				$('#districtid').html(option);
				if(level){
					var option ='<option value="">All</option>';
					$.each(data.parents, function(key,val){
						option +='<option value="'+val.id+'">'+val.name+'</option>';
					})
					
					$('#parent').html(option);
				}

			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});	

	});
	
	$('#districtid').on('change',function(){
		
		var id = $(this).val();
		var level = $('#level').val();
		var divid = $('#divisionid').val();
		$.ajax({
			url : 'home/getThanaName',
			type: "get",
			dataType: "json",
			data:{'id':id,'level':level,'divid':divid},
			success: function(data)
			{
				//var obj = JSON.parse(data);
				var option ='<option value="">All</option>';
				$.each(data.upazila, function(key,val){
					option +='<option value="'+val.id+'">'+val.name+'</option>';
				})
				
				$('#thanaid').html(option);
				if(level){
					var option ='<option value="">All</option>';
					$.each(data.parents, function(key,val){
						option +='<option value="'+val.id+'">'+val.name+'</option>';
					})
					
					$('#parent').html(option);
				}

			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});	

	});
</script>
