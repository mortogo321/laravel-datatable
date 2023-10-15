<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Builder;

class UsersController extends Controller
{
    public function index(Request $request, Builder $builder): View | JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(User::query())->toJson();
        }

        $html = $builder->parameters([
            'buttons' => [],
            "lengthMenu" => [10, 25, 50, 75, 100],
            'pagingType' => 'simple_numbers',
        ])
            ->columns([
                ['data' => 'id', 'title' => 'Id'],
                ['data' => 'name', 'title' => 'Name'],
                ['data' => 'email', 'title' => 'Email'],
                ['data' => 'created_at', 'title' => 'Created', 'render' => "dayjs(full.created_at).format('ddd D MMM, YYYY hh:mm a')"],
            ]);

        return view('users.index', compact('html'));
    }
}
