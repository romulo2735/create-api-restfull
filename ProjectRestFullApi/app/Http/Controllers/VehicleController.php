<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VehicleController extends Controller
{
    private $vehicle;

    /**
     * @param Vehicle $vehicle
     */
    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = $this->vehicle->paginate();

        return response()->json($vehicles, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleRequest $request)
    {
        $data = $request->all();

        $vehicle = $this->vehicle->create($data);

        if ($vehicle) {
            return response()->json($vehicle, Response::HTTP_OK);
        } else {
            return response()->json('Não foi possivel cadastrar o Carro', Response::HTTP_BAD_REQUEST);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = $this->vehicle->find($id);

        if (!$vehicle) {
            return response()->json('O Veiculo não existe', Response::HTTP_NOT_FOUND);
        } else {
            return response()->json($vehicle, Response::HTTP_OK);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleRequest $request, $id)
    {
        $data = $request->all();

        $vehicle = $this->vehicle->find($id);
        if (!$vehicle) {
            return respose()->json('Veiculo não encontrada', Response::HTTP_NOT_FOUND);
        }
        $vehicle->update($data);

        return response()->json($vehicle, Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = $this->vehicle->find($id);

        if (!$vehicle) {
            return response()->json('Veiculo não encontrado', Response::HTTP_NOT_FOUND);
        }
        $vehicle->delete();

        return response()->json('Veiculo deletedo com suceso', Response::HTTP_OK);
    }
}
