<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequest;
use App\Models\Job;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class JobController
 * @package App\Http\Controllers
 */
class JobController extends Controller
{
    private $job;

    /**
     * JobController constructor.
     * @param Job $job
     */
    public function __construct(Job $job)
    {
        $this->job = $job;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = $this->job->paginate();

        return response()->json($jobs, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param JobRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        $data =  $request->all();

        $job = $this->job->create($data);

        if ($job){
            return response()->json($job, Response::HTTP_CREATED);
        }else{
            return response()->json('Não foi possivel cadastrar a Vaga', Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
