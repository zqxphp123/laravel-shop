<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Process\Pipe;
use Illuminate\Support\Collection;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function index(Request $request,?string $name =null )
    {
//        $result = Process::pipe(function (Pipe $pipe) {
//            $pipe->command('cat ../.env');
//            $pipe->command('grep -i "Laravel"');
//        });
//        $result = Process::pipe([
//            'cat example.txt',
//            'grep -i "laravel"',
//        ]);
//        var_dump($result->successful());
//        var_dump($result->output());
        echo __('Welcome to our application');
        return view('greeting', ['name' => $name ?? 'Guest']);
    }
    public function list(UserRequest $request)
    {
        $request->validated();
        Cache::store('file')->put('bar', 'baz', 600);
        $collection = collect([1, 2, 3, 4, 5,7,9]);

        $upper = $collection->after(6);
        var_dump($upper);
        $response = Http::get('http://example.com');
        return 1111;
    }


    public function process(Request $request )
    {
        var_dump(app_path().'/../');
        $result = Process::pipe(function (Pipe $pipe) {

            $pipe->command('php -v');
        });

        var_dump($result->successful());
        var_dump($result->output());

    }


    public function userList(Request $request)
    {
        try {
            DB::connection()->getPdo(); // 获取PDO实例
            echo "数据库连接成功";
        } catch (\Exception $e) {
            echo "数据库连接失败: " . $e->getMessage();
        }
    }



}
