<?php

namespace App\Controllers;
use Config\Services;
$session = Services::session();
use App\Models\AdminModal;
use App\Models\Test_modal;
use App\Models\OurworkModel;
use App\Models\ServiceCategory;
use App\Models\SubCategoryModel;
use App\Models\Table_data_Model;
use App\Models\PriceCardModel;

class FrontendController extends BaseController
{
     
    public function index(){
        $model = new Test_modal();
        $testimonial = $model->findAll();
        // echo "<pre>";
        // print_r($testimonial);
        // exit;
        $data['testimonial']=$testimonial;
        echo view('frontend/include/header');
        echo view('frontend/index',$data);
        echo view('frontend/include/footer');
    }

    public function about(){
        


        echo view('frontend/include/header');
        echo view('frontend/about');
        echo view('frontend/include/footer');
    }

    public function contact(){
        echo view('frontend/include/header');
        echo view('frontend/contact');
        echo view('frontend/include/footer');
    }

    public function emptyapartment_pricing(){
        echo view('frontend/include/header');
        echo view('frontend/emptyapartment_pricing');
        echo view('frontend/include/footer');
    }


    public function general_pricing(){ 
        echo view('frontend/include/header');
        echo view('frontend/general_pricing');
        echo view('frontend/include/footer');
    }

    public function mimi_cleaning(){
        echo view('frontend/include/header');
        echo view('frontend/mimi_cleaning');
        echo view('frontend/include/footer');
    }

    public function platinum_pricing(){
        echo view('frontend/include/header');
        echo view('frontend/platinum_pricing');
        echo view('frontend/include/footer');
    }

    public function premimum_pricing(){
        echo view('frontend/include/header');
        echo view('frontend/premimum_pricing');
        echo view('frontend/include/footer');
    }

    public function services(){
        $model=new ServiceCategory;
        $data['service']=$model->findAll();
        echo view('frontend/include/header');
        echo view('frontend/services',$data);
        echo view('frontend/include/footer');
    }

    public function service_pricing($id=''){ 
        $model=new ServiceCategory;
        $model_subcategory=new SubCategoryModel;
        $table_data_model=new Table_data_Model;
        $data['category']=$model->find($id);
        $data['sub_category_data']=$model_subcategory->where('category_id',$id)
                           ->findAll();
        $data['table_data']=$table_data_model->where('category_id',$id)
                           ->findAll();
        // echo '<pre>';
        // print_r($data['sub_category_data']);
        // exit;
        echo view('frontend/include/header');
        echo view('frontend/service_pricing',$data);
        echo view('frontend/include/footer');
    }

    public function work(){

        $model=new OurworkModel;
        $data['ourwork']=$model->findAll();

        // echo "<pre>";
        // print_r($data);
        // exit;

        echo view('frontend/include/header');
        echo view('frontend/work',$data);
        echo view('frontend/include/footer');
    }

    public function sms(){
      
        // echo "<pre>";
        // print_r($data);
        // exit;

        // echo view('frontend/include/header');
        // echo view('frontend/sms',);
        // echo view('frontend/include/footer');
    }
}

?>