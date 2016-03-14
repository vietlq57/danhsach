<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Person;
use App\Http\Requests\CheckPersonRequest;





class PersonController extends Controller
{
    
	public $rules = array(
				'firstname' => 'required|max:20',
				'lastname' => 'required|max:20',
				'email' =>  'required|email',
				'phone' => 'required|numeric'
			);
	
    public function index(Request $request){
		
        $person = Person::paginate(5);
		
		$keys = $request->input('keys');
		if(!empty($keys)){
			$person = Person::where('PersonId', 'LIKE', '%'.$keys.'%')
								->orwhere('FirstName', 'LIKE', '%'.$keys.'%')
								->orwhere('LastName', 'LIKE', '%'.$keys.'%')
								->orwhere('Email', 'LIKE', '%'.$keys.'%')
								->orwhere('Phone', 'LIKE', '%'.$keys.'%')
								->paginate(5);
		}
		return view('person.index', [
			'person' => $person,
			
		]);
    }
    public function create(Request $request){
        
        
        return view('person.create');
        
    }
    
    public function store(Request $request){
		/*public function store(CheckPersonRequest $request){
			$data = $request->all();
			Person::create($data);
			return redirect('person');
		}*/
        $data = $request->all();
		$validator = Validator::make(
			$data, $this->rules
		);
		
		if ($validator->fails())
		{
			return redirect('person/create')->withInput()->withErrors($validator->errors());
		}
		//Person::create($data);
		else{
			$person = new Person;
			$person->firstname = $request->firstname;
			$person->lastname = $request->lastname;
			$person->email = $request->email;
			$person->phone = $request->phone;
			$person->save();
			return redirect('/person');
		}
		
		//return redirect('person');
        
    }
	
	public function edit($PersonId){
		$person = Person::findOrFail($PersonId);
		return view('person.edit', compact('person'));
	}
	
	public function update($PersonId , Request $request){
		$person = Person::findOrFail($PersonId);
		$data = $request->all();
		
		$validator = Validator::make(
			$data, $this->rules
		);
		
		if ($validator->fails()){
			return redirect('person/'.$person->PersonId .'/edit')->withInput()->withErrors($validator->errors());
		}else{
			$person->firstname = $request->firstname;
			$person->lastname = $request->lastname;
			$person->email = $request->email;
			$person->phone = $request->phone;
			$person->save();
			return redirect('person');
		}
		//$person->update($request->all());
		
		
		//$person->save();
 
		//return redirect('person');
	
	}
	
	
	/* public function search($keys){
		
		
		$data = Person::all();
		
		return view('person.search');
	} */   
}
