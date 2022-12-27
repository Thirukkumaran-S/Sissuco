<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\Extension;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
   function subscriptiondetails(Request $request)
   {
     
      // $search = $request['search'] ?? "";
      // if ($search != "") {
      //    $subscriptiondetails = Subscription::where('serialno', 'LIKE', "%$search%")->get();
      // } else {
      //    $subscriptiondetails = Subscription::get();
      // }
      // $data = compact('subscriptiondetails', 'search');
      return view('subscriptiondetails');
    }


   function subscriptionstore(Request $request)
   {
      //    $validatedata=$request->validate([
      //       'serialno'=>'required|digits:8',
      //       'pinno'=>'required||digits:6',
      //       'accno'=>'required||digits:10',
      //       'status'=>'required',
      //       'prority[]'=>'required',
      //       'msisdn[]'=>'required'



      //   ]);
      // return $request;

      $subscription = new Subscription();
      $subscription->serialno = $request->input('serialno');
      $subscription->pinno = $request->input('pinno');
      $subscription->accno = $request->input('accno');
      $subscription->status = (int) $request->has('status');
      $subscription->save();

      for ($i = 0; $i < 4; $i++) {
         $extension = new Extension();
         $extension->subscription_id = $subscription->id;
         $extension->priority = $request->priority[$i];
         $extension->msisdn = $request->msisdn[$i];
         $extension->save();
      }
      return back();
   }
   

   function changeStatus($id)
   {
      $getStatus = Subscription::select('status')->where('id', $id)->first();
      if ($getStatus->status == 1) {
         $status = 0;
      } else {
         $status = 1;
      }
      Subscription::where('id', $id)->update(['status' => $status]);
      return redirect()->back();
   }

   public function delete($id)
   {
      $subscription = Subscription::find($id);
      $subscription->delete();


      return back();
   }


   public function searchview(){
      return view('subscriptionview');
   }




   public function search(Request $request){

      if($request->ajax()){
  
          $data=Subscription::where('serialno','like','%'.$request->search.'%')
          ->orwhere('accno','like','%'.$request->search.'%')->get();
  
  
          $output='';
      if(count($data)>0){
  
           $output ='
              <table class="table">
              <thead>
              <tr>
                  <th scope="col">Serial no</th>
                  <th scope="col">Pinno</th>
                  <th scope="col">Acc No</th>
                  <th scope="col">Status</th>
                 
              </tr>
              </thead>
              <tbody>';
  
                  foreach($data as $row){
                      $output .='
                      <tr>
                      <th scope="row">'.$row->serialno.'</th>
                      <td>'.$row->pinno.'</td>
                      <td>'.$row->accno.'</td>
                      <td>'.$row->status.'</td>
                      
                      </tr>
                      ';
                  }
  
  
  
           $output .= '
               </tbody>
              </table>';
  
  
  
      }
      else{
  
          $output .='No results';
  
      }
  
      return $output;
  
      }
  
  
  
  
    }
}


