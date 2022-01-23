<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Helper\RazkyFeb;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Validator;

class CustomAuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'check-number']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     */
    public function login()
    {
        $credentials = request(['contact', 'password']);

        if (!$token = JWTAuth::attempt($credentials)) {

            return RazkyFeb::responseErrorWithData(401, 0, 0,
                "Username atau Password Tidak Sesuai",
                "Credential didnt match", "");


//            return response()->json($myresponse, 401);
        }

        return $this->respondWithToken($token, "");
    }


    public function register(Request $request)
    {
        $rules = array(
            'nik' => 'required',
            'no_kk' => 'required',
            'contact' => 'required',
            'password1' => 'required',
            'password2' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            $errors = $messages->all();
            return back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->nik = $request->nik;
        $user->nomor_kk = $request->no_kk;
        $user->contact = $request->contact;
        $user->password = bcrypt($request->password1);
        $user->role = "3";

        if ($user->save()) {
            return back()->with(["success" => "Registrasi Berhasil, Silakan Login"]);
        } else {
            return back()->with(["failed" => "Gagal Menambahkan User Baru"]);
        }

    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile()
    {
        return response()->json(auth()->user());
    }


    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh(), "");
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token, $message)
    {
        /*
        FOR CUSTOM JWT
        $user = Auth::user();
        $payload = JWTFactory::sub($user->id)
            ->user('Foo Bar')
            ->message(['Apples', 'Oranges'])
            ->myCustomObject($user)
            ->make();

        $token = JWTAuth::encode($payload);

        return $token;
        */

        return response()->json([
            'status_code' => 1,
            'message' => $message,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 9999,
            'user' => auth()->user()
        ]);
    }
}
