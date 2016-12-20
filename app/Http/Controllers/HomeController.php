<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // constructor
    public function __construct() {
        // $this->middleware('auth');
    }

 
    //////////// Name ////////////
    //////////// Name ////////////    
    //////////// Name ////////////
    //////////// Name ////////////


    //////////// Home ////////////

    // home 
    public function index() {
        return view('viewtech.pages.home');
    }


    //////////// Contact ////////////

    // contact 
    public function getContact() {
        return view('viewtech.pages.contact');
    }



    //////////// About ////////////

    // about 
    public function getAbout() {
        return view('viewtech.pages.about');
    }    

    //////////// Testimonials ////////////

    // Testimonisl 
    public function getAllTestimonials() {
        return view('viewtech.pages.testimonials');
    }


    //////////// Blog ////////////

    // all blogs 
    public function getAllBlogs() {
        return view('viewtech.pages.blog');
    }     
    // blog details
    public function getBlogDetails() {
        return view('viewtech.pages.blog-details');
    }     


    //////////// Project ////////////

    // all projects 
    public function getAllProjects() {
        return view('viewtech.pages.projects');
    }     
    // project details
    public function getProjectDetails() {
        return view('viewtech.pages.project-details');
    }    


    //////////// Services ////////////

    // all services 
    public function getAllServices() {
        return view('viewtech.pages.services');
    }    
    // first service
    public function getServiceOne() {
        return view('viewtech.pages.services-architectural-planning')->with('page', 1);
    }
    // second service
    public function getServiceTwo() {
        return view('viewtech.pages.services-decoration-furniture')->with('page', 2);
    }
    // third service
    public function getServiceThree() {
        return view('viewtech.pages.services-landscape-design')->with('page', 3);
    }
    // fourth service
    public function getServiceFour() {
        return view('viewtech.pages.services-interior-design')->with('page', 4);
    }
    // fifth service
    public function getServiceFive() {
        return view('viewtech.pages.services-sustainable-design')->with('page', 5);
    }  
    // sixth service
    public function getServiceSix() {
        return view('viewtech.pages.services-urban-design')->with('page', 6);
    }

}
