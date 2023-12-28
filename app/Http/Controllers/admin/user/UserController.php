<?php
namespace App\Http\Controllers\admin\user;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Sellers;
use App\Models\User;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the 'admin' middleware instead of 'auth'
    }
    function allus(Request $request)
    {
      $adminUsers = Admin::orderBy('created_at', 'desc')->paginate(10);

        $activeTab = $request->input('tab', 'admin');
        $userUsers = User::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.user.allus', compact('adminUsers', 'userUsers','activeTab'));
    }
    public function restore_us()
    {
        return redirect('admin/user/allus');
    }
    public function deleteus($id)
    {
        User::where('id', $id)->delete();
        return response()->json(['success' => 'Sản phẩm xóa thành công'], 200);
    }
    public function deletead($id)
    {
        Admin::where('id', $id)->delete();
        return response()->json(['success' => 'Sản phẩm xóa thành công'], 200);
    }
    function editus(Request $request, $id)
    {
        $user = user::find($id);
        if ($user == null) return Redirect('/thongbao');
        return view('admin/user/editus', ['user' => $user]);
    }
    public function updateus(Request $request, $id)
    {
       $user = User::find($id);
        if ($user == null) return redirect('/thongbao');
        $user->status = $request->input('status');
        $user->save();
        return redirect('admin/user/allus');
    }
    function editad(Request $request, $id)
    {
        $admin = Admin::find($id);
        if ($admin == null) return Redirect('/thongbao');
        return view('admin/user/editad', ['admin' => $admin]);
    }
    public function updatead(Request $request, $id)
    {
        $admin = Admin::find($id);
        if ($admin == null) return redirect('/thongbao');
        $admin->password = bcrypt($request->input('password'));
        $admin->status = $request->input('status');
        $admin->save();
     return redirect('admin/user/allus');
    }
    public function createacc()
    {
        return view('admin.user.addacc');
    }
    public function addad(Request $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            // $imagePath = $request->image->store('upload/img', 'public');
        }
        Admin::create([
            'name' => $request->name,
            'image'=> $imageName,
            'email' => $request->email,
            'password'=> bcrypt($request->password),
            'status' => $request->status,
        ]);
        return redirect()->route('admin.allus')->with('message', 'Bạn đã tạo tài khoản mới thành công');
    }
      public function addus(Request $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        }
        User::create([
            'name' => $request->name,
           'image'=> $imageName,
            'email' => $request->email,
            'password'=> bcrypt($request->password),
            'status' => $request->status,
        ]);
        return redirect()->route('admin.allus')->with('message', 'Bạn đã tạo tài khoản mới thành công');
    }
}
