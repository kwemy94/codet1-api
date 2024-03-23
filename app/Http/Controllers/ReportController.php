<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Repositories\ReportRepository;
use Illuminate\Support\Facades\Validator;
use App\Http\Validation\RapportValidation;

class ReportController extends Controller
{
    private $reportRepository;

    public function __construct(ReportRepository $reportRepository){
        $this->reportRepository = $reportRepository;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, RapportValidation $rapportValidation)
    {
        $validator = Validator::make(
            $request->all(),
            $rapportValidation->rules(),
            $rapportValidation->message()
        );

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                'errors' => $validator->errors()
            ], 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
