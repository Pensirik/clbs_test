<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmit;
use App\Models\FormSubmitData;
use App\Models\Formfield;

class FormSubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function formfield(Request $requet)
    {
            $dummyFields = 	[
                ['name' => 'name', 'label' => 'first name'],
                ['name' => 'surname', 'label' => 'surname'],
                ['name' => 'email', 'label' => 'email'],
                ['name' => 'telephone', 'label' => 'telephone']
            ];

            echo json_encode($dummyFields);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        $errors = [];
        $data = [];
        $input =  $request->all();



        if (empty($input['name'])) {
            $errors['name'] = 'firstname is required.';
        }
        if (empty($input['surname'])) {
            $errors['surname'] = 'surname is required.';
        }

        if (empty($input['email'])) {
            $errors['email'] = 'Email is required.';
        }
        if (empty($input['telephone'])) {
            $errors['telephone'] = 'Telephone is required.';
        }


        if (!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
            $data['success'] = true;
            $data['message'] = 'OK!';
        }
      
        // 1.formsubmit
        $formsubmit =new FormSubmit;
        $formsubmit->date = date('Y-m-d H:i:s');
        $formsubmit->save();
       

        // 2.formsubmitData
        foreach($input as $key => $value){
            if($key != '_token'){
                $formsubmitData =new FormSubmitData;
                $formsubmitData->formSubmit_id = $formsubmit->id;
                $formsubmitData->name = $key;
                $formsubmitData->value = $value;
                $formsubmitData->save();
            }
         }
       
         return response()->json($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
