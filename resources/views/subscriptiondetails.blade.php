<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@extends('dashboard')


@section('form')

<h1 style=" text-align:center;"> SISSU Registration</h1><br>
    <!-- <form action="{{url('subscription-save')}}" method="POST"> -->
        @csrf

        <div id="eg"></div>
        <div class="form-grp">
            <label>Serial Number</label>
            <input type="text" name="serialno" class="form-control" value="{{old('serialno')}}" required>
        </div>

        <br>
        <div class="form-grp">
            <label>Pin Number</label>
            <input type="text" name="pinno" class="form-control" value="{{old('pinno')}}" required>
        </div>
        <br>

        <div class="form-grp">
            <label>Account Number</label>
            <input type="text" name="accno" class="form-control" value="{{old('accno')}}" required>
        </div>

        <br>
        <div class="form-grp">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="status" name="status"  >
                <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
            </div>


        </div> <br>

        <div class="form-grp">
            <label>Priority</label>
            <input type="text" name="priority[]" class="form-control" value="1" >
        </div>

        <br>
        <div class="form-grp">
            <label>Phone Number</label>
            <input type="text" name="msisdn[]" autocomplete="off" class="form-control" value="{{old('msisdn')}}">
        </div><br>

        <div class="form-grp">
            <label>Priority</label>
            <input type="text" name="priority[]" class="form-control" value="2">
        </div>

        <br>
        <div class="form-grp">
            <label>Phone Number</label>
            <input type="text" name="msisdn[]" autocomplete="off" class="form-control" value="{{old('msisdn')}}">
        </div><br>

        <div class="form-grp">
            <label>Priority</label>
            <input type="text" name="priority[]" class="form-control" value="3">
        </div>

        <br>
        <div class="form-grp">
            <label>Phone Number</label>
            <input type="text" name="msisdn[]" autocomplete="off" class="form-control" value="{{old('msisdn')}}">
        </div><br>

        <div class="form-grp">
            <label>Priority</label>
            <input type="text" name="priority[]" class="form-control" value="4">
        </div>

        <br>
        <div class="form-grp">
            <label>Phone Number</label>
            <input type="text" name="msisdn[]" autocomplete="off" class="form-control" value="{{old('msisdn')}}">
        </div>

        <br><br>


        <button type="submit" class="btn btn-primary form-control">Save</button>
    </form>


    <br>
    <br>







 

   

    <br>



</div>
@endsection('form')


</body>

</html>


