<?php

namespace App\Http\ViewComposers\Customer;

use App\Interfaces\Admin\CategoryInterface;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class NavbarViewComposer
{
    protected $cartRepository, $categoryRepository;

    public function __construct(CategoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */

    public function compose(View $view)
    {
        $user = Auth::guard('web')->user();
        $categories = $this->categoryRepository->getParentWise();
        /*dd(Category::with('descendants')->where('cat_id',1)->get());*/
        /*$categories = Category::nested()->get();*/
        $view->with('categories', $categories)->with('user', $user);
    }
}
