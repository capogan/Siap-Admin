<?php

namespace App\Http\Controllers;

use App\AdminUsers;
use App\AdminUsersMemberCode;
use App\PcgMemberCode;
use App\Permissions;
use App\Roles;
use App\RolesHasPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SettingController extends Controller
{
    static $CONFIG = [
        "title" => "Pengaturan",
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user_admin(Request $request){
        $user_list = AdminUsers::get();
        $data = [
            'user_list'=> $user_list
        ];
        return view('pages.settings.useradmin.index', $this->merge_response($data, static::$CONFIG));
    }

    public function add_user_admin(Request $request){

        $roles = Roles::get();
        $data = [
            'roles'=> $roles
        ];

        return view('pages.settings.useradmin.add', $this->merge_response($data, static::$CONFIG));
    }

    public function store_user_admin(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admin_users'],
            'password' => ['required', 'string', 'min:8'],
        ],[
            'name.required' => 'Nama harus di isi',
            'email.required' => 'email harus di isi',
        ]);

        if ($validator->fails()) {
            return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
        }else{

            DB::beginTransaction();
            try{

                $useradmin = AdminUsers::create([

                    "name"              => $request->name,
                    "email"             => $request->email,
                    'password'           => Hash::make($request->password),
                    "created_at"        => date('Y-m-d H:i:s'),
                    "updated_at"        => date('Y-m-d H:i:s'),

                ]);

                $useradmin->assignRole($request->user_role);

                DB::commit();
                $message = "Produk Berhasil di Ubah";
            }
            catch (Exception $e) {
                DB::rollback();
            }
            return json_encode(['status'=> true, 'message'=> 'Sukses menambahkan pengguna']);
        }

    }

    public function user_admin_paging(Request $request){
//        $user_list = AdminUsers::join('model_has_roles','model_has_roles.model_id','admin_users.id')
//            ->rightJoin('roles','roles.id','=','model_has_roles.role_id')
//            ->select('admin_users.*','roles.name as role_name')
//            ->orderBy('created_at','DESC')
//            ->get();
        $user_list = AdminUsers::orderBy('created_at','DESC')->get();

        return DataTables::of($user_list)->addIndexColumn()->make(true);
    }

    public function role(){
        $permissions = roles::get();
        $data = [
            'permissions'=> $permissions
        ];
        return view('pages.settings.role.index', $this->merge_response($data, static::$CONFIG));
    }

    public function roles_paging(){
        return DataTables::of(Roles::orderBy('created_at','DESC')->get())->addIndexColumn()->make(true);
    }

    public function roles_add(){

        $exclude = array('pcg','master');
        $permissions = Permissions::whereNotIn('name', $exclude)->orderBy('id','ASC')->get();

        $data = [
            'permissions'=> $permissions
        ];
        return view('pages.settings.role.add', $this->merge_response($data, static::$CONFIG));
    }

    public function roles_insert(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'permissions' => 'required',
        ],
        [
            'name.required' => 'Nama role harus diisi',
        ]);

        if ($validator->fails()) {
            return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
        }else{

            DB::beginTransaction();
            try{

                $roles = Roles::Create([
                    'name'=>$request->name,
                    'guard_name'=>'web',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                    'created_by'=> Auth::user()->name,
                ]);

                $roles_name = Role::find($roles->id);

                foreach ($request->permissions as $val){
                    $permission_name = Permissions::where('id',$val)->first();
                    RolesHasPermission::create([
                        'permission_id'=>$val,
                        'role_id'=>$roles->id
                    ]);
                    $roles_name->givePermissionTo($permission_name);

                }

                DB::commit();

            }
            catch (Exception $e) {
                DB::rollback();
            }
            return json_encode(['status'=> true, 'message'=> 'Sukses menambahkan pengguna']);
        }

    }

    public function add_pcg(Request $request){

        $pcg_member_code = PcgMemberCode::orderBy('id','ASC')->get();
        $data = [
            'pcg_member_code'=> $pcg_member_code
        ];
        return view('pages.settings.userpcg.add', $this->merge_response($data, static::$CONFIG));
    }

    public function add_pcg_store(Request $request){

        $permission_name = 'pcg';
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admin_users'],
            'password' => ['required', 'string', 'min:8'],
            'member_code_list'=>['required']

        ],[
            'username.required' => 'Username harus di isi',
            'email.required' => 'email harus di isi',
            'member_code_list.required' => 'Pilih Kode Member',
        ]);

        if ($validator->fails()) {
            return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
        }else{

            DB::beginTransaction();
            try{

                $useradmin = AdminUsers::create([

                    'name'              => $request->username,
                    'email'             => $request->email,
                    'password'          => Hash::make($request->password),
                    'created_at'        => date('Y-m-d H:i:s'),
                    'updated_at'        => date('Y-m-d H:i:s'),
                    'full_name'         => $request->full_name,
                    'phone_number'      => $request->phone_number,
                    'address'           => $request->address,
                    'created_by'        => Auth::user()->name,

                ]);


                $useradmin->givePermissionTo($permission_name);

                foreach ($request->member_code_list as $val){
                    AdminUsersMemberCode::create([
                        'id_users'=>$useradmin->id,
                        'id_member_code'=>$val,
                    ]);
                }

                DB::commit();
                $message = "Produk Berhasil di Ubah";

            }
            catch (Exception $e) {
                DB::rollback();
            }

        }

        return json_encode(['status'=> true, 'message'=> 'Sukses menambahkan pengguna']);
    }



}
