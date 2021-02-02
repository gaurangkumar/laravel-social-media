<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

namespace App\Controller\Codework;

use Friday\Controller\Controller;
use Friday\Foundation\Application;
use Friday\Model\DB;
use Friday\View\View;
use Friday\Http\Route;

use App\Slide;
use App\Quotation;
use App\Category;
use App\Product;
use App\Testimonial;
use App\Feedback;

class HomeController extends Controller
{
    public function __construct()
    {
        View::share ( 'email', '' );
        View::share ( 'mobile', '+91 7041208641' );
        View::share ( 'address', 'Umta, Visnagar, Gujarat - 384320' );
        View::share ( 'social',
            [
                'bxl-facebook'=>'https://mobile.facebook.com/patel.priya.967806',
                'bxl-twitter'=>'#',
                'bxl-skype'=>'#',
                'bxl-linkedin'=>'#',
                'bxs-phone'=>'tel:9913872923',
                'bxl-whatsapp'=>'https://wa.me/+91 7041208641?text=Hello JustCraftinAround',
                'bxl-instagram'=>'https://www.instagram.com/priyakpate/'
            ]
        );
        View::share ( 'route', Route::currentRouteName() );
    }

    public function index()
    {
        $title = "Hand made beautiful crafts | Just Craftin Around";
        $description = "Hand made beautiful crafts only on Just Craftin Around by Priya Patel";
        $categories = Category::all();

        $cats = $cats2 = [];
        foreach($categories as $cat) {
            $cats2[$cat->id] = $cat->name;
        }
        $categories = Category::limit(4)->all();
        $products = Product::limit(8)->all();
        foreach($products as $product) {
            $cats[$product->category] = $cats2[$product->category];
        }
        $testimonials = Testimonial::limit(5)->all();
        $slides = Slide::all();

		return view('index', compact('title', 'description', 'slides', 'categories', 'products', 'cats', 'testimonials'));
    }

    public function services()
    {
        $title = "Services | JustCraft";
        $description = "Services offer by us, Hand made beautiful crafts only on JustCraft";

        return view('services', compact('title', 'description'));
    }

    public function gallery()
    {
        $title = "Gallery | JustCraft";
        $description = "Our gallery, Hand made beautiful crafts only on JustCraft";

        return view('gallery', compact('title', 'description'));
    }

    public function blog()
    {
        $title = "Blog | JustCraft";
        $description = "Our blog, Hand made beautiful crafts only on JustCraft";

        return view('blog', compact('title', 'description'));
    }

    public function premix(Request $request)
    {
        $premixes = Premix::all();
        $industries = Industry::all();

        $slug = Route::current()->parameter('premix');
        $premix = Premix::where('slug',$slug)->first();
        if($premix == null) {
            return response()->view('errors.404', [], 404);
        }

        $title = $premix->name." Premix";
        $description = $premix->name." Premix";

        return view('premix', compact('title', 'description','premix', 'premixes', 'industries'));
    }

    public function about()
    {
        $title = "About Us | JustCraft";
        $description = "About Us, Hand made beautiful crafts only on JustCraft";

        return view('about', compact('title', 'description'));
    }

    public function contact()
    {
        $title = "Contact Us | JustCraft";
        $description = "Contact Us, Hand made beautiful crafts only on JustCraft";

        return view('contact', compact('title', 'description'));
    }

    public function products($category = null, $product = null)
    {
        $category = $this->getParam()['category'] ?? null;
        $product = $this->getParam()['product'] ?? null;

        if($category == null) {
            $title = "All Products | Hand made beautiful crafts | Just Craftin Around";
            $description = "Hand made beautiful crafts only on Just Craftin Around by Priya Patel";
            $categories = Category::all();
            $cats = [];
            foreach($categories as $cat) {
                $cats[$cat->id] = [$cat->name, $cat->slug];
            }
            $products = Product::orderBy('sno', 'DESC')->paginate(10);
//print_r(compact('title', 'description', 'products', 'categories', 'cats'));exit;

            return view('products', compact('title', 'description', 'products', 'cats'));
        }
        else {
            $product = Product::where('slug', $product)->first();
            $title = $product->name." - JustCraft";
            $description = "Hand made beautiful crafts only on JustCraft";
            $premixes = Premix::all();
            $industries = Industry::all();

            $products = Product::all();

            $categories = Category::all();

            $cats = [];
            foreach($categories as $cat) {
                $cats[$cat->id] = $cat->name;
            }

            return view('product', compact('products', 'premixes', 'industries', 'title', 'description', 'product'))->with('cats', $cats);
        }
    }

    public function inquiry(Request $request)
    {
        $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'phone'   => 'nullable|min:10|max:10',
            'subject' => 'nullable|string',
            'message' => 'required|string|max:10|max:2048'
        ]);

        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Inquiry::create($data);

        return redirect()->route('contact')
            ->with('success','Message sent successfully.');
    }

    public function quote()
    {
        // TODO
        $request = new \stdClass;
        foreach($_POST as $key => $val) {
            $request->$key = $val;
        }

		if (empty($request->name)) {
			session('msg', ['type'=>'danger', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Please enter your name !</strong>']);

			redirect(route('home'));
        }

		if (empty($request->type)) {
			session('msg', ['type'=>'danger', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Please select gift type !</strong>']);

			redirect(route('home'));
        }

		if (empty($request->date)) {
			session('msg', ['type'=>'danger', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Please enter delivery date !</strong>']);

			redirect(route('home'));
        }

		if (empty($request->mobile)) {
			session('msg', ['type'=>'danger', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Please enter your mobile number!</strong>']);

			redirect(route('home'));
        }

		if (strlen($request->mobile) < 10) {
			session('msg', ['type'=>'danger', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Please enter valid mobile number!</strong>']);

			redirect(route('home'));
        }

		if (empty($request->detail)) {
			session('msg', ['type'=>'danger', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Please enter your details !</strong>']);

			redirect(route('home'));
        }

		$data = [
            'name'   => $request->name,
            'type'   => $request->type,
            'date'   => $request->date,
            'mobile' => $request->mobile,
            'detail' => $request->detail,
        ];

		$query = Quotation::create($data);

		if($query) {
    		session('msg', ['type'=>'success', 'msg'=>'<i class="fa fa-success-circle"></i><strong> Saved Successfully</strong>']);
    
    		redirect(route('home'));
		} else {
			session('msg', ['type'=>'danger', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Error: Not saved!</strong>']);

			redirect(route('home'));
		}
    }

    public function savecontact()
    {
//var_dump($result);exit;
        // TODO
        $request = new \stdClass;
        foreach($_POST as $key => $val) {
            $request->$key = $val;
        }

		if (empty($request->name)) {
			echo 'Please enter your name !';
            exit;
        }

		if (empty($request->email)) {
			echo 'Please enter your email !';
            exit;
        }

		if (empty($request->subject)) {
			echo 'Please enter your subject !';
            exit;
        }

		if (empty($request->message)) {
			echo 'Please enter your message !';
            exit;
        }

		$data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

		$query = Feedback::create($data);

		if($query) {
			echo 'Saved Successfully';
            exit;
		} else {
			echo 'Error: Not saved!';
            exit;
		}
    }
}
