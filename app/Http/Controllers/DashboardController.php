<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Admin;
use DB;
use Auth;
use App\Exports\PlasmaExport;
use App\Exports\OxygenExport;
use App\Exports\UserExport;
use App\Exports\InquiryExport;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    // Dashboard - Analytics
    public function dashboardAnalytics(){
        $pageConfigs = [
            'pageHeader' => false
        ];

		// $totalDonor	=	DB::table('Donor')->select('id')->get();
		// $totalOxygenCylinder	=	DB::table('OxygenCylinder')->select('id')->get();
		// $totalUser	=	DB::table('Users')->select('id')->get();
		 
		// $data['totalDonor']	=	count($totalDonor);
		// $data['recentUser']	=	DB::table('Users')->orderBy('id','DESC')->paginate(5);
		 
		// $data['totalOxygenCylinder']	=	count($totalOxygenCylinder);
		// $data['totalUser']	=	count($totalUser);
		
		// $data['getDonorGraph']			=	Admin::getDonorGraph(7);
		// $data['getOxyProviderGraph']	=	Admin::getOxyProviderGraph(7);
		// $data['getUserGraph']	=	Admin::getUserGraph(7);
        return view('/pages/dashboard-analytics');
    }

    // Dashboard - Ecommerce
    public function dashboardEcommerce(){
        $pageConfigs = [
            'pageHeader' => false
        ];
		
		

        return view('/pages/dashboard-ecommerce', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    

    public function adminUser(){
        
        return view('/pages/admin-user');
    }

    public function accessRole(){
        
        return view('/pages/access-role');
    }

    public function plasmaDonors(){
        
		$totalDonor	=	DB::table('Donor')->orderBy('id','desc')->get(); 
		  
        
        return view('/pages/plasma-donors',compact('totalDonor'));
    }
    public function plasmadownloadExcel(Request $request)
	{	$data['title'] 		= $request->title;
		$data['start_date']	= $request->input('start_date');
		$data['end_date']	= $request->input('end_date');
		$data['usertype']  = $request->input('usertype');
		// $users = User::getExportUserList($data);

		// Export all users
		return Excel::download(new PlasmaExport($data), 'PlasmaExport.xlsx'); 
	}

    public function oxygenProviders(){
        $OxygenCylinder	=	DB::table('OxygenCylinder')->orderBy('id','desc')->get(); 
        return view('/pages/oxygen-providers',compact('OxygenCylinder'));
    }

    public function oxygendownloadExcel(Request $request)
	{	$data['title'] 		= $request->title;
		$data['start_date']	= $request->input('start_date');
		$data['end_date']	= $request->input('end_date');
		$data['usertype']  = $request->input('usertype');
		// $users = User::getExportUserList($data);

		// Export all users
		return Excel::download(new OxygenExport($data), 'Oxygen.xlsx'); 
	}

    public function userList(){
          $users	=	DB::table('Users')->where('role_type',3)->orderBy('id','desc')->get(); 
        return view('/pages/user-list',compact('users'));
    }

    public function userdownloadExcel(Request $request)
	{	$data['title'] 		= $request->title;
		$data['start_date']	= $request->input('start_date');
		$data['end_date']	= $request->input('end_date');
		$data['usertype']  = $request->input('usertype');
		// $users = User::getExportUserList($data);

		// Export all users
		return Excel::download(new UserExport($data), 'User.xlsx'); 
	}

    public function accessManager(){
        
        return view('/pages/access-manager');
    }

    public function inquiriesList(){
         $inquiries	=	DB::table('inquiries')->orderBy('id','desc')->get(); 
        return view('/pages/inquiries-list',compact('inquiries'));
    }
    public function inquirydownloadExcel(Request $request)
	{	$data['title'] 		= $request->title;
		$data['start_date']	= $request->input('start_date');
		$data['end_date']	= $request->input('end_date');
		$data['usertype']  = $request->input('usertype');
		// $users = User::getExportUserList($data);

		// Export all users
		return Excel::download(new InquiryExport($data), 'Inquiry.xlsx'); 
	}
	
	 public function donorAjax(Request $request){
        $request->validate([
            'range' => 'required',
            
        ]); 
		$range =  request('range');
		 
		$data['getDonorGraph']	=	Admin::getDonorGraphAjax($range);
       if($data['getDonorGraph']){
            return response()->json([
                'error' => false,
                'data' => $data,
                'message' => 'Plasma Donors!'
            ], 200);
        }else{
            return response()->json([
			'error' => true,
                'data' => null,
                'message' => 'failed to get Plasma Donors!']);
        }
    }

    
	 public function oxyProviderGraphAjax(Request $request){
        $request->validate([
            'range' => 'required',
            
        ]); 
		$range =  request('range');
		 
		$data['getOxyProviderGraph']	=	Admin::getOxyProviderGraphAjax($range);
       if($data['getOxyProviderGraph']){
            return response()->json([
                'error' => false,
                'data' => $data,
                'message' => 'Oxygen Providers!'
            ], 200);
        }else{
            return response()->json([
			'error' => true,
                'data' => null,
                'message' => 'failed to get Oxygen Providers!']);
        }
    }
    
	 public function userGraphAjax(Request $request){
        $request->validate([
            'range' => 'required',
            
        ]); 
		$range =  request('range');
		$data['getUserGraph']	=	Admin::getUserGraph($range);  
       if($data['getUserGraph']){
            return response()->json([
                'error' => false,
                'data' => $data,
                'message' => 'Users List!'
            ], 200);
        }else{
            return response()->json([
			'error' => true,
                'data' => null,
                'message' => 'failed to get Users List!']);
        }
    }
	
	 public function addDonor(Request $request){
         $validatedData = $request->validate([				
			'city' => 'required',						
			'donorName' => 'required',						
			'bloodGroup' => 'required', 
			'recoveredOn' => 'required',						
			'contactNumber' => 'required',						
			'email' => 'required'						
		]);	
		DB::beginTransaction(); 
		try {
			
			$data  =   array();  
			
			$data['city']					= $request->city; 
			$data['donorName']				= $request->donorName; 
			$data['bloodGroup']				= $request->bloodGroup; 
			$data['recoveredOn']        	= date('Y-m-d',strtotime($request->recoveredOn)); 
			$data['contactCountryCode']		= 91; 
			$data['contactNumber']			= $request->contactNumber; 
			$data['whatsappCountryCode']	= 91; 
			$data['whatsappContactNumber']	= $request->whatsappContactNumber; 
			$data['email']					= $request->email; 
			$data['otherInfo']				= $request->otherInfo; 
			$data['likeCount']				= 0; 
			$data['disLikecount']			= 0; 
			$data['created_at']				= now();  
			DB::table('Donor')->insertGetId($data);
			DB::commit();		
			return redirect('plasma-donors')->with('success','Plasma Donor added successfuly.');  
		} catch (\Exception $e) {
			DB::rollback();
			return redirect('plasma-donors')->with('failed','Failed to add plasma donar.');  
			}
    }
	
	 public function addOxyProvider(Request $request){
          $validatedData = $request->validate([				
			'city' => 'required',						
			'cylinderCapacity' => 'required',						
			'contactPerson' => 'required',  					
			'contactNumber' => 'required',						
			'email' => 'required'						
		]);	
		DB::beginTransaction(); 
		try {
			
			$data  =   array();  
			
			$data['city']					= $request->city; 
			$data['cylinderCapacity']		= $request->cylinderCapacity; 
			$data['contactPerson']			= $request->contactPerson;  
			$data['contactCountryCode']		= 91; 
			$data['contactNumber']			= $request->contactNumber; 
			$data['whatsappCountryCode']	= 91; 
			$data['whatsappContactNumber']	= $request->whatsappContactNumber; 
			$data['email']					= $request->email; 
			$data['address']				= $request->address; 
			$data['otherInfo']				= $request->otherInfo; 
			$data['likeCount']				= 0; 
			$data['disLikecount']			= 0; 
			$data['created_at']				= now();  
			DB::table('OxygenCylinder')->insertGetId($data);
			DB::commit();	
			return redirect('oxygen-providers')->with('success','Plasma Donor added successfuly.');  
		} catch (\Exception $e) {
			DB::rollback();
			return redirect('oxygen-providers')->with('failed','Failed to add plasma donar.');  
			}
    }

    
	public function categoryDatacollect(){
        return view('/pages/category');
    }

	public function subcategoryDatacollect(){
        return view('/pages/subcategory');
    }

	public function Campaign(){
        return view('/pages/campaign');
    }
	
	public function paymentApproval(){
        return view('/pages/paymentapproval');
    }
	
	
}

