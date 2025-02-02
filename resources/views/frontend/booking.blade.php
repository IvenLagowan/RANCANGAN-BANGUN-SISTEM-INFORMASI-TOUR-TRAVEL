@extends('frontend.layouts.master')

@section('title')
{{ $post->title }}
@endsection

@section('content')

 <div class="row mb-4">
    <div class="col-md-12 mb-3">
        <form action="{{ url('booking/create') }}" method="post">
            @csrf
            <div class="container-fluid">
            	<img src="{{ asset('images/blogimg/img3.jpg') }}">
            	<div class="content text-warning">
            	    <div class="form-group">
	            	<h4 class="card-title text-center shadow mb-4 mt-5 rounded p-4">Travel Booking Form</h4>
	            	<div class="offset-2 pl-5 mt-2 col-md-10">
		                <input type="hidden" name="bookable_id" value="{{ $post->id }}">
					<!-- 		                <input type="hidden" name="bookable_type" value="App\post">
					 -->		            <div class="form-row mb-3">
				            <label for="names" class="col-md-3"><strong>Tour Name</strong></label>
				            <input type="text" required class="form-control col-md-6" name="title" value=" {{ $post->title }} ">
				        </div>
		                <div class="form-row mb-3">
				            <label for="name" class="col-md-3"><strong>Name</strong></label>
				            <input type="name" required class="form-control col-md-6" placeholder="Enter Your Name" name="name">
				        </div>
				        <div class="form-row mb-3">
				        	<label for="email" class="col-md-3"><strong>Email</strong></label>
				            <input type="email" required class="form-control col-md-6" placeholder="Enter Email" name="email" value=" ">				            
				        </div>
		        		<div class="form-row mb-3">
				            <label for="phone" class="col-md-3"><strong>PhoneNo</strong></label>
				            <input type="integer" required class="form-control col-md-6" placeholder="Enter PhoneNumber" name="phno">
				        </div>
				        <div class="form-row mb-3">
					        <label for="party" class="col-md-3"><strong>Tour Date</strong></label>
							    <label for="date" class="col-md-3 text-warning">Start Date<input type="date" name="start" min="2020-01-01" max="2020-12-30" required="" class="form-control"></label>
							    <label for="date" class="col-md-3 text-warning">End Date<input type="date" name="end" min="2020-01-01" max="2020-12-30" required="" class="form-control"></label>
						</div>
		        		<div class="form-row mb-3">
				            <label for="price" class="col-md-4"><strong>Price</strong>
				            <input type="integer" required class="form-control" name="price" value="{{ $post->price }}">
				        	</label>
				        

		               <script>
						function Total(noofpeople,ud,total,value){
							noofpeople=document.getElementById(noofpeople);
							ud>0?noofpeople.value++:noofpeople.value--;
							noofpeople.value=Math.max(noofpeople.value,0);
							document.getElementById(total).value=noofpeople.value*value;
						}
						function showAlert(){
							  if($("#myAlert").find("div#myAlert2").length==0){
							    $("#myAlert").append("<div class='alert alert-success alert-dismissable' id='myAlert2'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> Success! message sent successfully.</div>");
							  }
							  $("#myAlert").css("display", "");
						}
						</script>

						
				            <label for="price" class="col-md-2"><strong>No Of People</strong><br>					
							
							<input type='button' name='subtract' onclick='Total("noofpeople",-1,"total",{{ $post->price }});' value='-'/> 
											    	
							<input type='integer' name='noofpeople' id='noofpeople' readonly=true class="btn col-md-4" value="0"/>
											    	
							<input type='button' name='add' onclick='Total("noofpeople",1,"total",{{ $post->price }});' value='+'/>
							
							</label>			
						
				            <label for="total" class="col-md-3"><strong>Total Price</strong>	
							
								<input type='integer' name='total' id='total' value="0" class="form-control" id="total" />
							</label>	 		
		  				</div>
		  				<div class="form-row mb-3">
		  					<label for="date" class="col-md-9 text-warning">Message<textarea class="form-control" id="comment" rows="4" name="content"></textarea></label>
		  				</div>
		  			</div>	
		            </div>
		            <button value="showAlert" class="btn btn-success mt-3 col-md-4 offset-4" onclick="showAlert();" > Send </button>
			    	<div class="container" style="display:none; " id="myAlert">
			        <div class="alert alert-success alert-dismissable" id="myAlert2">
			            <!-- <button type="button" class="close shadow mb-3 rounded text-center" data-dismiss="alert" aria-hidden="true">&times;</button> -->
			            <strong class="offset-5">Success! </strong><br><img src="{{ asset('images/checkmark.png') }}" alt="logo" class="offset-5"><br>
			            <em class="offset-2">Your Booking sent successfully</em>
			        </div>
			    	</div>
	            	</div>
	            </div>
            </div>
		    <div class="col-md-12 text-right">
		        <a href="{{ url('/') }}" class="btn btn-primary">Go back</a>
		    </div>
        </form>
    </div>
</div>

@endsection