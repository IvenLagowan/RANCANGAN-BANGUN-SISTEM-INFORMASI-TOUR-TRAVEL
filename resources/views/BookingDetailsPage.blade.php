<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>A Fancy Table</h1>

<table id="customers">
    <tr>
        @foreach ($data as $booking)
        <div class="col-6">
            <h2 class="fw-light">📃Invoice</h2>
            <form action="" method="post" class="mb-5">
                <div class="invoice-bg">
                    <div class="d-flex justify-content-evenly mb-4">
                        <div class="w-100">
                            <img src="{{ asset('image/logo.png') }}" height="100"  class="d-block"  alt="main image">
                            <h4>Papua Tours</h4>
                        </div>
                        <div>
                            <p>
                                📨No: 13, Nabire, 63000, Papua Tours.
                            </p>
                        </div>
                    </div>
    
                    <h6>Invoice id : # </h6>
                    <pre>Invoice Date : </pre>
    
                    <br>
    
                    <h6>Traveller Info</h6>
                    <pre>Jumlah Dewasa : {{ $booking->number_of_adult }}</pre>
                    <pre>Jumlah Anak : {{ $booking->number_of_child }}</pre>
                    
                    <div class="d-flex justify-content-between p-3 mb-2 bg-body-secondary">
                        <div><h6>Description</h6></div>
                        <div><h6>Total</h6></div>
                    </div>
                    <div class="d-flex justify-content-between p-3 bg-transparent text-body">
                        <div>
                            <h6>{{ $booking->package->package_name }}</h6>
                            <h6>{{ $booking->package->tour_type }}</h6>
                            <h6>{{ $booking->package->duration }} Days</h6>
                            <h6>Travel Date : {{ \carbon\carbon::parse($booking->date)->format('d M, Y') }}</h6>
                            <h6>PickUp  {{ $booking->pick_up_location }}</h6>
                            <p>{{ $booking->pick_up_location_details }}</p>
                        </div>
                        <div>
                            <h6>{{ $booking->package->price_start_from }} $</h6>
                        </div>  
                    </div>
        
                    {{-- new --}}
                    <div class="d-flex justify-content-between ps-3 bg-transparent text-body">      
                        <div>
                            <h6> Number of Travellers : {{ $booking->number_of_adult + $booking->number_of_child }} </h6>
                        </div>
                        <div>
                            <h6>52 $</h6>
                        </div> 
                    </div>
                    
                    <hr>

                    <div class="d-flex justify-content-between ps-3 p-2 bg-secondary-subtle text-secondary-emphasis">
                        <div><h6 class="ps-3">Total Biaya</h6></div>
                        <div>{{ $booking->total_fee }} $</div>
                    </div>
        
                    <hr>        
                </div>
            </form>
        </div>  
    </tr>
   
</table>
        @endforeach
   

</body>
</html>


