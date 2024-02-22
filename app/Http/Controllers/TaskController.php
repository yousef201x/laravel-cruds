<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        try {
            $tasks = Task::select('tasks.*')->paginate(10);
            return view('dashboard')->with('tasks', $tasks);
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }
}
