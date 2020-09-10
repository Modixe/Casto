<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Target;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;

class TargetController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $target = Target::all();
        return $this->sendResponse($target->toArray(), 'Products retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $target= Target::create($input);
        return $this->sendResponse($target->toArray(), 'Product created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $target = Target::find($id);
        if (is_null($target)) {
            return $this->sendError('Product not found.');
        }
        return $this->sendResponse($target->toArray(), 'Product retrieved successfully.');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Target $target)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $target->name = $input['name'];
        $target->detail = $input['detail'];
        $target->save();
        return $this->sendResponse($target->toArray(), 'Product updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Target $target)
    {
        $target->delete();
        return $this->sendResponse($target->toArray(), 'Product deleted successfully.');
    }
}
