<?php

namespace App\Exports;

use App\User;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class InquiryExport implements FromCollection, WithHeadings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
	
	protected $param;

    function __construct($param) {
            $this->param = $param;
    }
	
    public function collection()
    {
		$param  = $this->param;
		$result = DB::table('inquiries')->select('id','name','phone',DB::raw('DATE_FORMAT(created_at, "%d/%m/%Y") as date'),'comment');
		// if($param['title']!=''){		
		// 	$search = $param['title'];
		// 	$result->where(function ($query) use($search) {
		// 		$query->where('USER1.username', 'LIKE', '%' . $search . '%')
		// 		->orWhere(DB::raw("CONCAT(USER1.first, ' ', USER1.last)"), 'LIKE', "%".$search."%");
		// 	});		
		// } 			 
		// if($param['start_date']!='' && $param['end_date']!=''){
		// 	$result->whereBetween(DB::raw('date(USER1._c)'), [$param['start_date'],$param['end_date']]);
		// }

		// $result->orderBy('USER1._c','desc');
		// $result->groupBy('user.id'); 					
		$res =  $result->get();	   
		return $res;
		
    }
	
	public function headings(): array
    {
        return [
            '#',
			'Name',
			'Phone',
			'Date',
			'Comment'
        ];
    }
	
	public function registerEvents(): array
{
    return [

        AfterSheet::class    => function(AfterSheet $event) {
			
			$columns = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I',];
			
			foreach($columns as $column){
			
            $event->sheet->getDelegate()->getColumnDimension($column)->setAutoSize(true);
			}
        },
    ];
 }
}
