<?php

namespace App\Exports;

use App\User;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class UserExport implements FromCollection, WithHeadings, WithEvents
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
		$result = DB::table('Users')->select('id','name','email','phone',DB::raw('(CASE 
        WHEN plasma_donar != "1" THEN "-" ELSE "Plasma Donore"
        END) AS plasma_donar'),DB::raw('(CASE 
        WHEN oxygen_provider != "1" THEN "-" ELSE "Oxygen Provider"
        END) AS oxygen_provider'))->where('role_type',3);
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
			'Joined On',
			'Contribution as plasma donors',
			'Contribution as oxygen providers',
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
