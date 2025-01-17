<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PagesController extends CI_Controller
{

	public $data;

	/* 
	$route['about-us'] = 'PagesController/about';
	$route['contact-us'] = 'PagesController/contact';
	$route['appointment'] = 'PagesController/appointment';
	$route['blogs'] = 'PagesController/blogs';
	$route['projects'] = 'PagesController/projects';
	$route['services'] = 'PagesController/services';
	$route['teams'] = 'PagesController/teams';
	$route['shop'] = 'PagesController/shop';


	$route['team-detail'] = 'PagesController/team_detail';
	$route['shop-detail'] = 'PagesController/shop_detail';
	$route['blog/(:any)'] = 'PagesController/blog_detail/$1';
	$route['service/(:any)'] = 'PagesController/service_detail/$1';
	*/

	public function index()
	{
		$this->data['page'] = [
			'title' => APP_NAME
		];
		$this->load->load_view('pages/new/index', $this->data);
	}

	public function blogs()
	{
		$this->data['page'] = [
			'title' => "Blogs" . " - " . APP_NAME
		];
		$this->load->load_view('blogs/blogs', $this->data);
	}
	public function about()
	{
		$this->data['page'] = [
			'title' => "About StemRx" . " - " . APP_NAME
		];
		$this->load->load_view('pages/about', $this->data);
	}
	public function contact()
	{
		$this->data['page'] = [
			'title' => "Contact Us" . " - " . APP_NAME
		];
		$this->load->load_view('pages/contact', $this->data);
	}
	public function gallery()
	{
		$this->data['page'] = [
			'title' => "Gallery" . " - " . APP_NAME
		];
		$this->load->load_view('pages/gallery', $this->data);
	}
	public function parent_testmonial()
	{
		$this->data['page'] = [
			'title' => "Testimonials" . " - " . APP_NAME
		];
		$this->load->load_view('pages/parent-testmonial', $this->data);
	}
	public function appointment()
	{
		$this->data['page'] = [
			'title' => "Appointment" . " - " . APP_NAME
		];
	}
	public function projects()
	{
		$this->data['page'] = [
			'title' => "Projects" . " - " . APP_NAME
		];
	}
	public function news()
	{
		$this->data['page'] = [
			'title' => "News" . " - " . APP_NAME
		];
		$this->load->load_view('pages/news', $this->data);
	}
	public function articles()
	{
		$this->data['page'] = [
			'title' => "Articles" . " - " . APP_NAME
		];
		$this->load->load_view('pages/pr-articles', $this->data);
	}
	public function services()
	{
		$this->data['page'] = [
			'title' => "Services" . " - " . APP_NAME
		];
		$this->load->load_view('pages/service', $this->data);
	}
	public function service_detail()
	{
		$this->data['page'] = [
			'title' => "Service Single" . " - " . APP_NAME
		];
		$this->load->load_view('pages/service-details', $this->data);
	}
	public function service_single($service)
	{
		switch ($service) {
			case 'cosmetic-gynecology':
				$this->data['page'] = [
					'title' => "Cosmetic Gynecology" . " - " . APP_NAME
				];
				$this->load->load_view('treatments/cosmatic-gynac', $this->data);
				break;
			case 'infertility':
				$this->data['page'] = [
					'title' => "Infertility" . " - " . APP_NAME
				];
				$this->load->load_view('treatments/infertility', $this->data);
				break;

			case 'hairfall':
				$this->data['page'] = [
					'title' => "Hairfall" . " - " . APP_NAME
				];
				$this->load->load_view('treatments/hairfall', $this->data);
				break;

			default:
				$this->data['page'] = [
					'title' => "Service Single" . " - " . APP_NAME
				];
				$this->load->load_view('pages/service-details', $this->data);
				break;
		}
	}
	public function media($media)
	{
		switch ($media) {
			case 'instagram-media':
				$this->data['page'] = [
					'title' => "Media on Instagram" . " - " . APP_NAME
				];
				$this->load->load_view('media/instagram-media', $this->data);
				break;
			case 'youtube-media':
				$this->data['page'] = [
					'title' => "Media on YouTube" . " - " . APP_NAME
				];
				$this->load->load_view('media/youtube-media', $this->data);
				break;

			default:
				$this->data['page'] = [
					'title' => "Media" . " - " . APP_NAME
				];
				$this->load->load_view('pages/service-details', $this->data);
				break;
		}
	}
	public function center($center)
	{
		switch ($center) {
			case 'navi-mumbai':
				$this->data['page'] = [
					'title' => "StemRx at Navi Mumbai" . " - " . APP_NAME
				];
				$this->load->load_view('centers/navi-mumbai', $this->data);
				break;
			case 'hyderabad':
				$this->data['page'] = [
					'title' => "StemRx at Hyderabad" . " - " . APP_NAME
				];
				$this->load->load_view('centers/hyderabad', $this->data);
				break;
			case 'nepal':
				$this->data['page'] = [
					'title' => "StemRx at Nepal" . " - " . APP_NAME
				];
				$this->load->load_view('centers/nepal', $this->data);
				break;
			case 'maldives':
				$this->data['page'] = [
					'title' => "StemRx at Maldives" . " - " . APP_NAME
				];
				$this->load->load_view('centers/maldives', $this->data);
				break;
			default:
				$this->data['page'] = [
					'title' => "Diabetes" . " - " . APP_NAME
				];
				$this->load->load_view('pages/service-details', $this->data);
				break;
		}
	}
	
	public function teams()
	{
		$this->data['page'] = [
			'title' => "Team of Experts" . " - " . APP_NAME
		];
		$this->load->load_view('pages/teams');
	}
	public function shop()
	{
		$this->data['page'] = [
			'title' => "Shop" . " - " . APP_NAME
		];
		$this->load->load_view('pages/shop');
	}
	public function privacy_policy()
	{
		$this->data['page'] = [
			'title' => "Privacy Policy" . " - " . APP_NAME
		];
		$this->load->load_view('footer/privacy_policy');
	}
	public function terms_condition()
	{
		$this->data['page'] = [
			'title' => "Terms & Conditions" . " - " . APP_NAME
		];
		$this->load->load_view('footer/terms_condition');
	}
	public function disclaimer()
	{
		$this->data['page'] = [
			'title' => "Disclaimer" . " - " . APP_NAME
		];
		$this->load->load_view('footer/disclaimer');
	}
	public function return_policy()
	{
		$this->data['page'] = [
			'title' => "Return Policy" . " - " . APP_NAME
		];
		$this->load->load_view('footer/return_policy');
	}
	public function shop_details()
	{
		$this->data['page'] = [
			'title' => "Shop Detail" . " - " . APP_NAME
		];
		$this->load->load_view('pages/shop-detail');
	}
	public function page($url)
	{
		switch ($url) {
			case 'contact':
				# code...
				break;

			default:
				$this->load->load_view('pages/' . $url);
				break;
		}
	}
}
