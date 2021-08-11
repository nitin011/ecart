<?php


namespace App\Http\ViewComposers\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AdminViewComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */

    public function compose(View $view)
    {
        $admin = Auth::guard('admin')->user();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $view->with('email', $admin->email ?? null)
            ->with('admin', $admin)
            ->with('logo', $logo);
    }
}
