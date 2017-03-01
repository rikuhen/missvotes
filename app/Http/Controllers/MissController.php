<?php

namespace MissVote\Http\Controllers;

use Illuminate\Http\Request;

use MissVote\Http\Requests\MissRequest;

use MissVote\RepositoryInterface\MissRepositoryInterface;

use Response;

use Redirect;

class MissController extends Controller
{
    
    public $miss;

    // public $role;

    public function __construct(MissRepositoryInterface $miss)
    {
        $this->miss = $miss;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $misses = $this->miss->enum();
        $data = [
            'misses' => $misses
        ];
        return view('backend.miss.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.miss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(MissRequest $request)
    {
        $data = $request->all();
        $miss = $this->miss->save($data);
        $sessionData = [
            'tipo_mensaje' => 'success',
            'mensaje' => '',
        ];
        if ($miss) {
            $sessionData['mensaje'] = 'Misse Creado Satisfactoriamente';
        } else {
            $sessionData['tipo_mensaje'] = 'error';
            $sessionData['mensaje'] = 'El misse no pudo ser creado, intente nuevamente';
        }
        
        return Redirect::action('MissController@edit',$miss->id)->with($sessionData);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $miss = $this->miss->find($id);
        return view('backend.miss.edit',[
            'miss'=>$miss
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(MissRequest $request, $id)
    {
        $data = $request->all();
        $miss = $this->miss->edit($id,$data);
        $sessionData = [
            'tipo_mensaje' => 'success',
            'mensaje' => '',
        ];
        if ($miss) {
            $sessionData['mensaje'] = 'Misse Editado Satisfactoriamente';
        } else {
            $sessionData['tipo_mensaje'] = 'error';
            $sessionData['mensaje'] = 'El misse no pudo ser creado, intente nuevamente';
        }
        
        return Redirect::action('MissController@edit',$miss->id)->with($sessionData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        
        $miss = $this->miss->remove($id);
        
        $sessionData = [
            'tipo_mensaje' => 'success',
            'mensaje' => '',
        ];
        
        if ($miss) {
            $sessionData['mensaje'] = 'Misse Eliminado Satisfactoriamente';
        } else {
            $sessionData['tipo_mensaje'] = 'error';
            $sessionData['mensaje'] = 'El misse no pudo ser eliminado, intente nuevamente';
        }
        
        return Redirect::action('MissController@index')->with($sessionData);
            
        
    }
}
