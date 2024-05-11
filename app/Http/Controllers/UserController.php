<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

use function App\Helpers\errorManager;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    

    public function index()
    {
        $users = $this->userRepository->getALl();

        return response()->json([
            'status' => true,
            'users' => $users
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        try {
            
            $user = $this->userRepository->getById($id);
            $user->delete();

        } catch (\Throwable $th) {
            errorManager('Delete user error', $th->getMessage() .' Line : '.$th->getLine(). ' Code error : '.$th->getCode());
            return response()->json([
                'success'=> false,
                'message'=> "Erreur survenue "
            ],500);
        } 
        return response()->json([
            'success'=> true,
            'users'=> $this->userRepository->getALl(),
            'message'=> "Suppression éffectuée !"
        ],200);
    }
}
