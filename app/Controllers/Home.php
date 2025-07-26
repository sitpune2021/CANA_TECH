<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
     public function AboutUs()
    {
        return view('AboutUs');
    }

       public function Egovernance()
    {
        return view('Egovernance');
    }

    public function WebDevelopment()
    {
        return view('WebDevelopment');
    }
    public function Reactjsdevlopment()
    {
      return view('Reactjsdevlopment'); 
    }

    public function Angulardevelopment()
    {
        return view('Angulardevelopment');
    }

     public function Uxdesign()
    {
        return view('Uxdesign');
    }

    public function Laraveldevelopment()
    {
        return view('Laraveldevelopment');
    }

    public function CodeigniterDev()
    {
        return view('CodeigniterDev');
    }

    public function Contentmanagment()
    {
        return view('Contentmanagment');
    }
    public function Appdevelopment()
    {
        return view('Appdevelopment');
    }
    public function Softdeveloment()
    {
        return view('Softdeveloment');
    }
     public function DigitalMarketing()
     {
        return view('DigitalMarketing');
     }

      public function Artificialinte()
     {
        return view('Artificialinte');
     }
      public function MachineLearning()
     {
        return view('MachineLearning');
     }
 
     public function GIS()
     {
        return view('GIS');
     }
     
     public function Products()
     {
        return view('Products');
     }

     public function Portfolio()
     {
        return view('Portfolio');
     }

     public function ContactUs()
     {
        return view('ContactUs');
     }


}
