<?php
namespace App\Http\Controllers;
use App\Traits\ApiResponser, 
    Illuminate\Http\Request, 
    Illuminate\Http\Response, App\Value;
class ValueController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * SAVE A VALUE
     * @return Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $rules = [
            'value'=>'required|numeric'
        ];
        $values=$request->all();
        $this->validate($request, $rules); 
        $request->session()->put('value', $values['value']);
        return response()->json(['save'=>true]); 
    }
    /**
     * FETCH SAVED VALUE
     * @return Illuminate\Http\Response
     */
    public function savedValue(Request $request)
    {
        $value = $request->session()->get('value');
        return response()->json(['value'=>@$value]);
    }
    /**
     * FETCH SAVED VALUE
     * @return Illuminate\Http\Response
     */
    public function clear(Request $request)
    {
        $value = $request->session()->forget('value');
        return response()->json(['value'=>@$value]);
    }
    /**
     * ADD TWO VALUES
     * @return Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $rules = [
            'num1'=>'required|numeric', 'num2'=>'required|numeric'
        ];
        $values=$request->all();
        $this->validate($request, $rules); 
        $value=$values['num1']+$values['num2'];
        return response()->json(['answer'=>$value]); 
    }
    /**
     * SUBTRACT TWO VALUES
     * @return Illuminate\Http\Response
     */
    public function subtract(Request $request)
    {
        $rules = [
            'num1'=>'required|numeric', 'num2'=>'required|numeric'
        ];
        $values=$request->all();
        $this->validate($request, $rules); 
        $value=$values['num1']-$values['num2'];
        return response()->json(['answer'=>$value]); 
    }
    /**
     * MULTIPLY TWO VALUES
     * @return Illuminate\Http\Response
     */
    public function multiply(Request $request)
    {
        $rules = [
            'num1'=>'required|numeric', 'num2'=>'required|numeric'
        ];
        $values=$request->all();
        $this->validate($request, $rules); 
        $value=$values['num1']*$values['num2'];
        return response()->json(['answer'=>$value]); 
    }
    /**
     * DIVIDE TWO VALUES
     * @return Illuminate\Http\Response
     */
    public function divide(Request $request)
    {
        $rules = [
            'num1'=>'required|numeric', 'num2'=>'required|numeric'
        ];
        $values=$request->all();
        $this->validate($request, $rules); 
        $value=$values['num1']/$values['num2'];
        return response()->json(['answer'=>$value]); 
    }
    /**
     * FIND SQUARE ROOT OF A VALUE
     * @return Illuminate\Http\Response
     */
    public function square_root(Request $request)
    {
        $rules = [
            'num1'=>'required|numeric'
        ];
        $values=$request->all();
        $this->validate($request, $rules); 
        $value=number_format(sqrt($values['num1']),4);
        return response()->json(['answer'=>$value]); 
    }
}
