<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // Lấy tham số 'email' từ request và xử lý khoảng trắng
        $email = trim($request->input('email'));

        // Truy vấn danh sách nhân viên theo email (tìm kiếm gần đúng)
        $users = User::when($email, function ($query, $email) {
            // Tìm kiếm không phân biệt chữ hoa, chữ thường trong trường email
            $query->whereRaw('LOWER(email) LIKE ?', ['%' . strtolower($email) . '%']);
        })
        ->orderByDesc('id') // Sắp xếp giảm dần theo ID
        ->paginate(10);

        // Trả dữ liệu ra view
        return view('admin.user.list', compact('users'));
    }




    public function handleStatus(User $user){
        $status = $user->status;
        if($status === 1){
            $user->status = 0;
        }
        else{
            $user->status = 1;
        }
        $user->save();
        return redirect()->back()->with('success', 'Cập nhật trạng thái thành công.');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->back()->with('success', 'Xóa khách hàng thành công.');
    }
}
