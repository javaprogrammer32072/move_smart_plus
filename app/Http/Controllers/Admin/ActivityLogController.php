<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminActivityLog;

class ActivityLogController extends Controller
{
    public function index()
    {
        $activity = AdminActivityLog::latest('performed_at')->paginate(30);

        return view('admin.activity.index', compact('activity'));
    }
}
