<?php
namespace App\Http\Controllers;
use App\Traits\ApiResponser, Illuminate\Http\Request, Illuminate\Http\Response, App\Value;
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
     * RETURN LIST OF VALUES
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $values=Value::all();
        return $this->successResponse($values); 
    }
    /**
     * CREATE A VALUE
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'value'=>'required|numeric'
        ];
        $this->validate($request, $rules);
        $value = Value::create($request->all());
        return $this->successResponse($value, Response::HTTP_CREATED); 
    }
    /**
     * OBTAIN AND SHOW A VALUE
     * @return Illuminate\Http\Response
     */
    public function show($value,Request $request)
    { 
        $value=Value::findOrFail($value);
        return $this->successResponse($value); 
    }
    /**
     * UPDATE AN EXISTING VALUE
     * @return Illuminate\Http\Response
     */
    public function update($value,Request $request)
    {
       $rules = [
            'value'=>'numeric'
        ];
        $this->validate($request, $rules); 
        $value=Value::findOrFail($value);
        
        $value->fill($request->all());
        
        if($value->isClean())
        {
            return $this->errorResponse("Atleast one value must change",Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $value->save();
        return $this->successResponse($value); 
    }
    /**
     * REMOVE AN EXISTING VALUE
     * @return Illuminate\Http\Response
     */
    public function destroy($value)
    {
        $value=Value::findOrFail($value);
        $value->delete();
        return $this->successResponse($value); 
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
        return $this->successResponse($value); 
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
        return $this->successResponse($value); 
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
        return $this->successResponse($value); 
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
        return $this->successResponse($value); 
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
        $value=sqrt($values['num1']);
        return $this->successResponse($value); 
    }
}
