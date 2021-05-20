<?php
namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;
use Image;
use Input;
use Auth;
use Session;
use Carbon\Carbon;
class Admin extends Model
{	 
	 public static function getUserAcquisitionGraph($range)
	{
		$date		=	Carbon::now()->subDays($range); 
		$user		=	Auth::user();
		$result		=	array();
		$result2	=	array();
		$result3	=	array();
		$result4	=	array();
		 
		if($range){
		$totalcouponapplied 		=	DB::table('affiliated_coupons_applied')
										->select(DB::raw('DATE(created_at) as day'),DB::raw('count(id) as dayCount'))
										->where(DB::raw('DATE(created_at)'),'>',$date)
										->where('affiliated_coupons_applied.affiliated_userid',$user->id)
										->groupBy(DB::raw('DATE(created_at)'))
										->get(); 
		foreach($totalcouponapplied as $list){
			$result2[]=$list->dayCount;
		}
		$result['totalcouponapplied'] = implode(',',$result2);
		
		$totalproductsold = DB::table('orders')
										->select(DB::raw('DATE(created_at) as day'),DB::raw('count(id) as dayCount'))
										->where(DB::raw('DATE(created_at)'),'>',$date)
										->where('affiliated_userid',$user->id)
										->groupBy(DB::raw('DATE(created_at)'))
										->get(); 
		foreach($totalproductsold as $list){
			$result3[]=$list->dayCount;
		}
		$result['totalproductsold'] = implode(',',$result3);
		
		$totalaffiliated_usercommission = DB::table('orders')
										->select(DB::raw('DATE(created_at) as day'),DB::raw('sum(affiliated_usercommission) as dayCount'))
										->where(DB::raw('DATE(created_at)'),'>',$date)
										->where('affiliated_userid',$user->id)
										->groupBy(DB::raw('DATE(created_at)'))
										->get(); 
		foreach($totalaffiliated_usercommission as $list){
			$result4[]=$list->dayCount;
		}
		$result['totalaffiliated_usercommission'] = implode(',',$result4);
	}else{
		
		$totalcouponapplied 		=	DB::table('affiliated_coupons_applied')
										->select(DB::raw('DATE(created_at) as day'),DB::raw('count(id) as dayCount'))
										->where('affiliated_coupons_applied.affiliated_userid',$user->id)
										->groupBy(DB::raw('DATE(created_at)'))
										->get(); 
		foreach($totalcouponapplied as $list){
			$result2[]=$list->dayCount;
		}
		$result['totalcouponapplied'] = implode(',',$result2);
		
		$totalproductsold = DB::table('orders')
										->select(DB::raw('DATE(created_at) as day'),DB::raw('count(id) as dayCount'))
										->where('affiliated_userid',$user->id)
										->groupBy(DB::raw('DATE(created_at)'))
										->get(); 
		foreach($totalproductsold as $list){
			$result3[]=$list->dayCount;
		}
		$result['totalproductsold'] = implode(',',$result3);
		
		$totalaffiliated_usercommission = DB::table('orders')
										->select(DB::raw('DATE(created_at) as day'),DB::raw('sum(affiliated_usercommission) as dayCount'))
										->where('affiliated_userid',$user->id)
										->groupBy(DB::raw('DATE(created_at)'))
										->get(); 
		foreach($totalaffiliated_usercommission as $list){
			$result4[]=$list->dayCount;
		}
		$result['totalaffiliated_usercommission'] = implode(',',$result4);
	}
		
		return $result;
	}
	 

	 public static function getLatestOrders()
	{
		  
		$user	=	Auth::user();
		$result	=	array();
		 
	 
	 
		
		$result = DB::table('orders')
										->join('order_items','order_items.order_id','orders.id') 
										->join('products','products.id','order_items.product_id') 
										->join('customers','customers.id','orders.user_id') 
										->select('orders.*','products.sku','products.name','products.image','products.url_slug','customers.email','customers.fname','customers.lname') 
										->where('affiliated_userid',$user->id)
										->limit(100)
										->get(); 
										
		 
	  
		return $result;
	}
	
	public static function getDonorGraph($range)
	{
		$date		=	Carbon::now()->subDays($range); 
		$user		=	Auth::user();
		$result		=	array();
		$result2	=	array();
		$result3	=	array();
		$result4	=	array();
		 
		 
		if($range){
		$totalproductsold = DB::table('Donor')
							->select(DB::raw('DATE(created_at) as day'),DB::raw('count(id) as dayCount'))
							->where(DB::raw('DATE(created_at)'),'>=',$date) 
							->groupBy(DB::raw('DATE(created_at)'))
							->get(); 
		}else{
		$totalproductsold = DB::table('Donor')
							->select(DB::raw('DATE(created_at) as day'),DB::raw('count(id) as dayCount'))  
							->groupBy(DB::raw('DATE(created_at)'))
							->get(); 	
		}
		
		foreach($totalproductsold as $list){
			$result2[]=$list->dayCount;
			$result3[]=$list->day;
		}
		$result['donors_date']  = "'".implode("','",$result3)."'";
		$result['donors'] = implode(',',$result2);
		
		 
		
		return $result;
	}
	public static function getDonorGraphAjax($range)
	{
		$date		=	Carbon::now()->subDays($range); 
		$user		=	Auth::user();
		$result		=	array();
		$result2	=	array();
		$result3	=	array();
		$result4	=	array();
		 
		 
		if($range){
		$totalproductsold = DB::table('Donor')
							->select(DB::raw('DATE(created_at) as day'),DB::raw('count(id) as dayCount'))
							->where(DB::raw('DATE(created_at)'),'>=',$date) 
							->groupBy(DB::raw('DATE(created_at)'))
							->get(); 
		}else{
		$totalproductsold = DB::table('Donor')
							->select(DB::raw('DATE(created_at) as day'),DB::raw('count(id) as dayCount'))  
							->groupBy(DB::raw('DATE(created_at)'))
							->get(); 	
		}
		
		foreach($totalproductsold as $list){
			$result2[]=$list->dayCount;
			$result3[]=$list->day;
		}
		$result['donors_date']  = implode(',',$result3);
		$result['donors'] = implode(',',$result2);
		
		 
		
		return $result;
	}
	public static function getOxyProviderGraph($range)
	{
		$date		=	Carbon::now()->subDays($range); 
		$user		=	Auth::user();
		$result		=	array();
		$result2	=	array();
		$result3	=	array();
		$result4	=	array();
		 
		 
		if($range){
		$totalproductsold = DB::table('OxygenCylinder')
							->select(DB::raw('DATE(created_at) as day'),DB::raw('count(id) as dayCount'))
							->where(DB::raw('DATE(created_at)'),'>=',$date) 
							->groupBy(DB::raw('DATE(created_at)'))
							->get(); 
		}else{
		$totalproductsold = DB::table('OxygenCylinder')
							->select(DB::raw('DATE(created_at) as day'),DB::raw('count(id) as dayCount'))  
							->groupBy(DB::raw('DATE(created_at)'))
							->get(); 	
		}
		
		foreach($totalproductsold as $list){
			$result2[]=$list->dayCount;
			$result3[]=$list->day;
		}
		$result['oxyProvider_date']  = "'".implode("','",$result3)."'";
		$result['oxyProvider'] = implode(',',$result2);
		
		 
		
		return $result;
	}
	public static function getOxyProviderGraphAjax($range)
	{
		$date		=	Carbon::now()->subDays($range); 
		$user		=	Auth::user();
		$result		=	array();
		$result2	=	array();
		$result3	=	array();
		$result4	=	array();
		 
		 
		if($range){
		$totalproductsold = DB::table('OxygenCylinder')
							->select(DB::raw('DATE(created_at) as day'),DB::raw('count(id) as dayCount'))
							->where(DB::raw('DATE(created_at)'),'>=',$date) 
							->groupBy(DB::raw('DATE(created_at)'))
							->get(); 
		}else{
		$totalproductsold = DB::table('OxygenCylinder')
							->select(DB::raw('DATE(created_at) as day'),DB::raw('count(id) as dayCount'))  
							->groupBy(DB::raw('DATE(created_at)'))
							->get(); 	
		}
		
		foreach($totalproductsold as $list){
			$result2[]=$list->dayCount;
			$result3[]=$list->day;
		}
		$result['oxyProvider_date']  = implode(',',$result3);
		$result['oxyProvider'] = implode(',',$result2);
		
		 
		
		return $result;
	}
	
	
	public static function getUserGraph($range)
	{
		$date		=	Carbon::now()->subDays($range); 
		$user		=	Auth::user();
		$result		=	array();
		$result2	=	array();
		$result3	=	array();
		$result4	=	array();
		 
		 
		if($range){
		$totalproductsold = DB::table('Users')
							->join('Countries','Users.phoneCode','Countries.tel_code')
							->select(DB::raw('Countries.name as day'),DB::raw('count(Users.id) as dayCount'))
							->where(DB::raw('DATE(Users.created_at)'),'>=',$date) 
							->where('Users.role_type',3)
							->groupBy('Countries.name')
							->orderBy('dayCount','DESC')
							->limit(5)
							->get(); 
		}else{
		$totalproductsold = DB::table('Users')
							->join('Countries','Users.phoneCode','Countries.tel_code')
							->select(DB::raw('Countries.name as day'),DB::raw('count(Users.id) as dayCount'))
							->where('Users.role_type',3)
							->groupBy('Countries.name')
							->orderBy('dayCount','DESC')
							->limit(5)
							->get(); 	
		}
		
		foreach($totalproductsold as $list){
			$result2[]=$list->dayCount;
			$result3[]=$list->day;
		}
		$result['users_date']  = "'".implode("','",$result3)."'";
		$result['users'] = implode(',',$result2);
		
		 
		
		return $result;
	}
}
?>