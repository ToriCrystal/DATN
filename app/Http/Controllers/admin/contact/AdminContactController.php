<?php

namespace App\Http\Controllers\admin\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;

class AdminContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin'); // Use the 'admin' middleware instead of 'auth'
    }
    
    public function index()
    {
        // Fetch contacts with completed_at = null for "Đang chờ" tab
        $pendingContacts = Contact::whereNull('completed_at')->paginate(16);

        // Fetch contacts with completed_at not null for "Đã hoàn tất" tab
        $completedContacts = Contact::whereNotNull('completed_at')->paginate(16);

        return view('admin.contact.index', compact('pendingContacts', 'completedContacts'));
    }

    public function markAsCompleted($id)
    {
        $contact = Contact::find($id);

        if ($contact) {
            // Update the completed_at field to the current timestamp
            $contact->update(['completed_at' => now()]);

            return redirect()->back()->with('message', 'Đánh dấu đã xem thành công.');
        }

        return redirect()->back()->with('error', 'Không tìm thấy liên hệ.');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);

        if ($contact) {
            $contact->delete();
            return redirect()->back()->with('message', 'Liên hệ được xóa thành công.');
        }

        return redirect()->back()->with('error', 'Không tìm thấy liên hệ.');
    }


}
