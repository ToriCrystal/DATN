<?php
namespace App\Http\Controllers\admin\Vouchers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;

class VoucherController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); 
    }
    public function index()
    {
        $vouchers = Voucher::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.vouchers.allvoucher', compact('vouchers'));
    }
    public function create()
    {
        return view('admin.vouchers.form');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:vouchers',
            'usage_limit' => 'nullable|integer|min:1',
            'expires_at' => 'nullable|date',
            'discount_type' => 'required|in:percent,fixed',
            'discount_value' => 'required|numeric|min:0',
        ]);
        $voucher = new Voucher($validatedData);
        $voucher->save();
        return redirect()->route('admin.allvoucher')->with('message', 'Voucher thêm thành công');
    }
    public function edit(Voucher $voucher)
    {
        return view('admin.vouchers.form', compact('voucher'));
    }
    public function update(Request $request, Voucher $voucher)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:vouchers,code,' . $voucher->id,
            'usage_limit' => 'nullable|integer|min:1',
            'expires_at' => 'nullable|date',
            'discount_type' => 'required|in:percent,fixed',
            'discount_value' => 'required|numeric|min:0',
        ]);
        $voucher->update($validatedData);
        return redirect()->route('admin.allvoucher')->with('message', 'Voucher cập nhật thành công');
    }
    public function destroy(Voucher $voucher)
    {
        $voucher->delete();
        return redirect()->route('admin.allvoucher')->with('message', 'Voucher xóa thành công');
    }
}
