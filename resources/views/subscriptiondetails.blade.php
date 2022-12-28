<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@extends('dashboard')


@section('form')

<div class="main">
    <div class="main-topic">
        <h5 style="font-weight: bold"> SISSU Registration</h5>
        </div>
    <!-- <form action="{{url('subscription-save')}}" method="POST"> -->
        @csrf
        <div id="eg"></div>
<div class="user-details">
    

        <div class="grp">
            
            <label>Serial Number</label>
            <input type="text" name="serialno" class="input" value="{{old('serialno')}}" required  placeholder="Enter Serial Number">
        </div>
        

        
        <div class="grp">
            <label>Pin Number</label>
            <input type="text" name="pinno" class="input" value="{{old('pinno')}}" required  placeholder="Enter Pin Number">
        </div>
        

        <div class="grp">
            <label>Account Number</label>
            <input type="text" name="accno" class="input" value="{{old('accno')}}" required  placeholder="Enter Account Number">
        </div>

        

        <div class="grp">
            <label>Priority</label>
            <input type="text" name="priority[]" class="input" value="1" >
        </div>

        
        <div class="grp">
            <label>Phone Number</label>
            <input type="text" name="msisdn[]" autocomplete="off" class="input" value="{{old('msisdn')}}" placeholder="Enter Phone Number">
        </div>

        <div class="grp">
            <label>Priority</label>
            <input type="text" name="priority[]" class="input" value="2">
        </div>

        
        <div class="grp">
            <label>Phone Number</label>
            <input type="text" name="msisdn[]" autocomplete="off" class="input" value="{{old('msisdn')}}" placeholder="Enter Phone Number">
        </div>

        <div class="grp">
            <label>Priority</label>
            <input type="text" name="priority[]" class="input" value="3">
        </div>

        
        <div class="grp">
            <label>Phone Number</label>
            <input type="text" name="msisdn[]" autocomplete="off" class="input" value="{{old('msisdn')}}" placeholder="Enter Phone Number">
        </div>

        <div class="grp">
            <label>Priority</label>
            <input type="text" name="priority[]" class="input" value="4">
        </div>

        
        <div class="grp">
            <label>Phone Number</label>
            <input type="text" name="msisdn[]" autocomplete="off" class="input" value="{{old('msisdn')}}" placeholder="Enter Phone Number">
        </div>

        <div class="cheackbox">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="status" name="status"  >
                <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
            </div>


        </div> 


        <button type="submit" class="btn btn-primary form-control">Save</button>
    </div>
    

    </form>


    <br>
    <br>







 

   

    <br>



</div>
@endsection('form')


</body>

</html>


