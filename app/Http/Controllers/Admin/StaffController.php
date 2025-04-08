<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class StaffController extends Controller
{
    public function index(Request $request)
    {
        // Lấy tham số 'name' từ request và xử lý khoảng trắng
        $name = trim($request->input('name'));

        // Truy vấn danh sách nhân viên
        $staffs = Admin::when($name, function ($query, $name) {
                // Tìm kiếm không phân biệt chữ hoa, chữ thường
                $query->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($name) . '%']);
            })
            ->orderByDesc('id') // Sắp xếp giảm dần theo ID
            ->paginate(10);

        // Trả dữ liệu ra view
        return view('admin.staff.list', compact('staffs'));
    }


    public function create(){
        return view('admin.staff.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|string',
            'role' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ]);

        $res = Admin::create($data);
        if($res){
            return redirect()->route('staff.index')->with('success', 'Thêm nhân viên mới thành công.');
        }
    }

    public function destroy(Admin $staff){
        $staff->delete();
        return back()->with('success', 'Xóa nhân viên thành công.');
    }
}
