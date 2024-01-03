<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JobController extends Controller
{
    public function list(Request $request): View
    {
        $jobs = Job::orderByDesc('id')->paginate(5);
        return view('job.list', [
            'jobs' => $jobs,
        ]);
    }

    public function detail($id): View
    {
        $job = Job::findOrFail($id);
        return view('job.detail', [
            'job' => $job,
        ]);
    }
}
