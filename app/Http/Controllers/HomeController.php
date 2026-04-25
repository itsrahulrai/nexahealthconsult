<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->latest()->take(4)->get();
        return view('frontend.index', compact('blogs'));
    }

    public function pages($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        // dd($page);
        return view('frontend.pages', compact('page'));
    }
 

    public function blogs()
    {
        $blogs = Blog::with('category')->latest()->paginate(9);
        return view('frontend.blogs', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::with('category')->where('slug', $slug)->firstOrFail();
        $recentBlogs = Blog::latest()->take(3)->get();
        $categories = Category::withCount('blogs')->get();

        // dd($blog, $recentBlogs, $categories );

        return view('frontend.blogs-details', compact('blog', 'recentBlogs', 'categories'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $blogs = Blog::with('category')
            ->where('category_id', $category->id)
            ->latest()
            ->paginate(6);
        $categories = Category::withCount('blogs')->get();
        return view('frontend.blogs', compact('blogs', 'categories', 'category'));
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'fname' => ['required', 'regex:/^[A-Za-z ]+$/', 'max:255'],
            'lname' => ['required', 'regex:/^[A-Za-z ]+$/', 'max:255'],
            'phone' => ['required', 'digits:10'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['nullable', 'string', 'max:2000'],
        ], [
            'fname.regex' => 'First name should contain only letters',
            'lname.regex' => 'Last name should contain only letters',
        ]);

        $fullName = $request->fname . ' ' . $request->lname;

        $data = [
            'name' => strip_tags($fullName),
            'mobile' => strip_tags($request->phone),
            'email' => strip_tags($request->email),
            'message' => strip_tags($request->message),
        ];

        $html = '
        <div style="font-family:Arial;background:#f4f8f8;padding:20px">
            <div style="max-width:600px;margin:auto;background:#ffffff;border-radius:10px;overflow:hidden;border:1px solid #e5e5e5">

                <div style="background:#0C6161;color:#ffffff;padding:18px;text-align:center">
                    <h2 style="margin:0;font-weight:600">Contact Enquiry</h2>
                </div>

                <div style="padding:25px">

                    <p style="margin-bottom:20px;font-size:14px;color:#333">
                        You have received a new enquiry from website.
                    </p>

                    <table width="100%" cellpadding="10" cellspacing="0"
                        style="border-collapse:collapse;font-size:14px;border:1px solid #eee">

                        <tr style="background:#e8f3f3">
                            <td width="35%"><b>Name</b></td>
                            <td>' . $data['name'] . '</td>
                        </tr>

                        <tr>
                            <td><b>Mobile</b></td>
                            <td>' . $data['mobile'] . '</td>
                        </tr>

                        <tr style="background:#e8f3f3">
                            <td><b>Email</b></td>
                            <td>' . $data['email'] . '</td>
                        </tr>

                        <tr>
                            <td><b>Message</b></td>
                            <td>' . $data['message'] . '</td>
                        </tr>

                    </table>

                </div>

                <div style="background:#0C6161;color:#fff;padding:12px;text-align:center;font-size:12px">
                    © ' . date('Y') . ' Nexa Health Consult. All rights reserved.
                </div>

            </div>
        </div>';

        // send mail
        Mail::send([], [], function ($mail) use ($data, $html)
        {

            $mail->to('drsanjeevkalra11@icloud.com')
                ->subject('New  Enquiry - ' . $data['name'])
                ->from('drsanjeevkalra11@icloud.com', 'Nexa Health Consult')
                ->html($html);
        });

        return redirect()->route('thankyou');
    }

  

}
