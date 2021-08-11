<?php


namespace App\Repositories\Customer;


use App\Events\WelcomeCustomerUser;
use App\Interfaces\Customer\CustomerInterface;
use App\Models\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CustomerRepository implements CustomerInterface
{
    protected $smsRepository;

    public function __construct()
    {
    }

    public function getAll()
    {
        $data = User::latest()->get();
        return DataTables::of($data)
            ->editColumn('created_at', function ($data) {
                return $data->created_at ? date('d M Y', strtotime($data->created_at)) : '--';
            })
            ->addColumn('total_orders', function ($data) {
                return Order::where('user_id', $data->id)->count();
            })
            ->addColumn('action', function ($data) {
                return view('admin.pages.customers.partials.action', compact('data'));
            })
            ->rawColumns(['total_orders', 'action'])
            ->make(true);
    }

    public function updateProfile($data, $userId)
    {
        try {
            User::query()->findOrFail($userId)->update($data);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getTotalCustomerCount()
    {
        return User::count();
    }

    public function getRepeatedCustomerCount()
    {
        return Order::groupBy('user_id')->havingRaw('COUNT(user_id) > 1')->get()->count();
    }

    public function searchCustomer($query)
    {
        return User::where('first_name', 'LIKE', "%$query%")
            ->orWhere('last_name', 'LIKE', "%$query%")
            ->orWhere('phone', 'LIKE', "%$query%")
            ->get();
    }

    public function getById($id)
    {
        return User::with(['addresses', 'orders'])->findOrFail($id);
    }

    public function sendWelcomeEmailToCustomer(User $user): void
    {
        $data = $user->toArray();
        $data['encData'] = Crypt::encrypt($data['user_email']);
        event(new WelcomeCustomerUser($data));
    }
}
