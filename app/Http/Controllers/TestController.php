<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $boards = DB::table('_board')
                    ->orderByDesc('id')
                    ->get();
                    
        return view('user.index', ['boards' => $boards]);
    }

    public function destroy(Request $request){
        DB::table('_board')
            ->where('id', $request->id)
            ->delete();
        return redirect()->action([TestController::class, 'index']);
    }

    public function editProcess(Request $request){
        DB::table('_board')
            ->where('id', $request->id)
            ->update([   
                'title'=>$request->title,
                'content'=>$request->content,
                ]);
        return redirect()->action([TestController::class, 'index']);
    }

    public function edit($id) {
        $views = DB::table('_board')
                ->where('id', $id)
                ->get();

        return view('user.edit', ['views' => $views]);
    }

    public function show($id) {
        $views = DB::table('_board')
                ->where('id', $id)
                ->get();

        return view('user.view', ['views' => $views]);
    }

    public function write() {
        return view('user.write');
    }

    public function save(Request $request) {
        DB::table('_board')->insert(
            [   
            'email'=>$request->email,
            'title'=>$request->title,
            'content'=>$request->content,
            'created_at'=>now(),
            'updated_at'=>now(),
            ]
        );
        return redirect()->action([TestController::class, 'index']);
    }
}
