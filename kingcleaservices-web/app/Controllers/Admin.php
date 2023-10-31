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

use CodeIgniter\Controller;

class Admin extends Controller
{


    public function index()
    {
        echo view('admin/login');
    }



    public function login()
    {
        echo view('admin/login');
    }

    public function login_process()
    {

        $request = service('request');
        $email = $request->getVar('email');
        $password = $request->getVar('password');
        $userModel = new AdminModal();
        $user = $userModel->getuserbyemail($email, $password);
        if ($user) {
            $_SESSION["user"] = $email;
            return redirect()->to('admin/testimonial_list');
        } else {
            $_SESSION["user"] = '';
            echo '<script>
           alert("email id or password wrong");
           window.location.href = "login";
           </script>';
        }
    }


    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('login');
    }



    // testimonial management code 
    public function testimonial_list()
    { 
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
        $model = new Test_modal();
        $testimonial = $model->findAll();
        // echo "<pre>";
        // print_r($testimonial);
        // exit;
        $data['testimonial']=$testimonial;
        $data['active'] = 'testimonial';
        echo view('admin/include/header');
        echo view('admin/include/navbar', $data);
        echo view('admin/include/sidebar');
        echo view('admin/testimonial/testimonial_list', $data);
        echo view('admin/include/footer');

    }



    public function add_testimonial()
    {
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
        $request = service('request');
   
$name = $this->request->getVar('name');
// $designation = $this->request->getVar('designation');
$test_descr = $this->request->getVar('test_descr');
$image = $this->request->getFile('image');
    
// echo "<pre>";
// print_r($this->request->getVar());
// exit;

    // if ($image->getError() !== UPLOAD_ERR_NO_FILE) {
    // Validate image size


    if ($image->getError() !== UPLOAD_ERR_NO_FILE) {
        if ($image->getSize() > 1000000) {
            echo 'Image size exceeds the allowed limit.';
            return;
        }
    
        // Validate image type
        if (!in_array($image->getClientMimeType(), ['image/jpeg', 'image/png'])) { // Adjust the allowed types as needed
            echo 'Image type not allowed.';
            return;
        }
    
        if ($image->isValid() && !$image->hasMoved()) {
            // Generate a new file name
            $newName = $image->getRandomName();
    
            // Move the uploaded file to the "uploads" directory
            $image->move(ROOTPATH . 'assets/uploads/testimonial', $newName);
    
            $model = new Test_modal();
            
            $data = [
                'user_img' => $newName,
                'name' => $name,
                // 'designation' => $designation,
                'test_descr' => $test_descr,
                'created_at' => date('Y/m/d'),
            ];
    
            $isTrue = $model->insert($data);
            return redirect()->to('admin/testimonial_list');
        } else {
            // Handle the upload failure
            echo 'Faild to save data.';
        }
    }else{
        $model = new Test_modal();
        $data = [
            'user_img' => '',
            'name' => $name,
            // 'designation' => $designation,
            'test_descr' => $test_descr,
            'created_at' => date('Y/m/d'),
        ]; 
        $isTrue = $model->insert($data);
        return redirect()->to('admin/testimonial_list');
    }



  
    }


    public function delete_testimonial($id='')
    {
        $model = new Test_modal();
        $isTrue = $model->delete($id);
        if ($isTrue) {
            return redirect()->to('admin/testimonial_list');
        }
    }


    public function edit_testimonial($id="")
    {
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
        $request = service('request');

$model = new Test_modal();

$image = $this->request->getFile('image');
$oldimage = $this->request->getVar('oldimage');
// $designation = $this->request->getVar('designation');
$name = $this->request->getVar('name');
$test_descr = $this->request->getVar('test_descr');
// print_r($image);
if ($image->getError() !== UPLOAD_ERR_NO_FILE) {
    // Validate image size
    if ($image->getSize() > 1000000) {
        echo 'Image size exceeds the allowed limit.';
        return;
    }

    // Validate image type
    if (!in_array($image->getClientMimeType(), ['image/jpeg', 'image/png'])) { // Adjust the allowed types as needed
        echo 'Image type not allowed.';
        return;
    }

    if ($image->isValid() && !$image->hasMoved()) {
        // Generate a new file name
        $newName = $image->getRandomName();

        // Move the uploaded file to the "uploads" directory
        $image->move(ROOTPATH . 'assets/uploads/testimonial', $newName);

        $data = [
            'user_img' => $newName,
            'name' => $name,
            // 'designation' => $designation,
            'test_descr' => $test_descr,
            'created_at' => date('Y/m/d'),
        ];

       //  var_dump($data);
       //  exit;

        $isTrue = $model->update($id, $data);

        return redirect()->to('admin/testimonial_list');
    } else {
        // Handle the upload failure
        echo 'Faild to save data.';
    }
} else {
    $data = [
        'user_img' => $oldimage,
        'name' => $name,
        // 'designation' => $designation,
        'test_descr' => $test_descr,
        'created_at' => date('Y/m/d'),
    ];

   //  var_dump($data);
   //  exit;

   $isTrue = $model->update($id,$data);
    return redirect()->to('admin/testimonial_list');
}

    }    
    // testimonial management code 




        // home page ourwork code
        public function ourworks_list()
        {
            $session = Services::session();
            if (!$session->get('user')) {
                return redirect()->to('login');
            }
        
            $db = db_connect(); 
            $query = $db->table('ourwork')
                ->select('*') ;
            $imagesdata = $query->get()->getResultArray(); // Execute the query and get the results
            // echo "<pre>";
            // print_r($imagesdata);
            // exit;
            $data['image_data']=$imagesdata;
            $data['active'] = 'ourwork';
            echo view('admin/include/header');
            echo view('admin/include/navbar', $data);
            echo view('admin/include/sidebar');
            echo view('admin/ourworks/ourwork', $data);
            echo view('admin/include/footer');
        
        }
    
        public function add_work()
    {
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
        $request = service('request');
    
        $title = $this->request->getVar('title');
        $image = $this->request->getFile('image');
    
    // echo "<pre>";
    // print_r($this->request->getVar());
    // exit;
    
        // if ($image->getError() !== UPLOAD_ERR_NO_FILE) {
        // Validate image size
    
        if ($image->getSize() > 1000000) {
            echo 'Image size exceeds the allowed limit.';
            return;
        }
    
        // Validate image type
        if (!in_array($image->getClientMimeType(), ['image/jpeg', 'image/png'])) { // Adjust the allowed types as needed
            echo 'Image type not allowed.';
            return;
        }
    
        if ($image->isValid() && !$image->hasMoved()) {
            // Generate a new file name
            $newName = $image->getRandomName();
    
            // Move the uploaded file to the "uploads" directory
            $image->move(ROOTPATH . 'assets/uploads/ourwork', $newName);
    
            $model = new OurworkModel();
            $data = [
                'ourwork_img' => $newName,
                'title' => $title,
                'created_at' => date('Y/m/d'),
            ];
    
            // var_dump($data);
            // exit;
            $isTrue = $model->insert($data);   
            return redirect()->to('admin/ourworks_list');
        } else {
            // Handle the upload failure
            echo 'Faild to save data.';
        }
    
    }
    
    public function delete_work($id){
        $model = new OurworkModel();
        $istrue = $model->delete($id);
        return redirect()->to('admin/ourworks_list');
        // echo "<pre>";
        // var_dump($istrue) ;
        // exit;
    }
    
    
    public function edit_ourwork($id='')
    {
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
    
        // echo $id;
        // echo $cat_id;
        // exit;
    
        $model2 = new OurworkModel();
        $imag_data = $model2->find($id); 
    
        // echo "<pre>";
        // print_r($imag_data);
        // exit;
        $data['imag_data']=$imag_data;
        $data['active'] = 'ourwork';
        echo view('admin/include/header');
        echo view('admin/include/navbar', $data);
        echo view('admin/include/sidebar');
        echo view('admin/ourworks/edit_ourwork', $data);
        echo view('admin/include/footer');
    }
    
    public function edit_ourwork_proccess($id='')
    {
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
    
    
        $model = new OurworkModel();
    
        $request = service('request');
    
        $image = $this->request->getFile('image');
        $oldimage = $this->request->getVar('oldimage');
        // print_r($image);
        if ($image->getError() !== UPLOAD_ERR_NO_FILE) {
            // Validate image size
            if ($image->getSize() > 1000000) {
                echo 'Image size exceeds the allowed limit.';
                return;
            }
    
            // Validate image type
            if (!in_array($image->getClientMimeType(), ['image/jpeg', 'image/png'])) { // Adjust the allowed types as needed
                echo 'Image type not allowed.';
                return;
            }
    
            if ($image->isValid() && !$image->hasMoved()) {
                // Generate a new file name
                $newName = $image->getRandomName();
    
                // Move the uploaded file to the "uploads" directory
                $image->move(ROOTPATH . 'assets/uploads/ourwork', $newName);
    
                $data = [
                    'title' => $this->request->getVar('title'),
                    'ourwork_img' => $newName,
                   
                ];
    
               //  var_dump($data);
               //  exit;
    
                $isTrue = $model->update($id, $data);
    
                return redirect()->to('admin/ourworks_list');
            } else {
                // Handle the upload failure
                echo 'Faild to save data.';
            }
        } else {
            $data = [
                'title' => $this->request->getVar('title'),
                'ourwork_img' => $oldimage,
                
            ];
    
           //  var_dump($data);
           //  exit;
    
            $isTrue = $model->update($id, $data);
            return redirect()->to('admin/ourworks_list');
    }
    }
        // service code 


               // home page service code
               public function category_list()
               {
                   $session = Services::session();
                   if (!$session->get('user')) {
                       return redirect()->to('login');
                   }
               
                   $db = db_connect(); 
                   $query = $db->table('service_category')
                       ->select('*') ;
                   $service_category = $query->get()->getResultArray(); // Execute the query and get the results
                //    echo "<pre>";
                //    print_r($service_category);
                //    exit;
                   $data['image_data']=$service_category;
                   $data['active'] = 'services';
                   echo view('admin/include/header');
                   echo view('admin/include/navbar', $data);
                   echo view('admin/include/sidebar');
                   echo view('admin/services/category', $data);
                   echo view('admin/include/footer');
               
               }
           
               public function add_category()
           {
               $session = Services::session();
               if (!$session->get('user')) {
                   return redirect()->to('login');
               }
               $request = service('request');
           
               $title = $this->request->getVar('category_name');
               $image = $this->request->getFile('image');
           
           // echo "<pre>";
           // print_r($this->request->getVar());
           // exit;
           
               // if ($image->getError() !== UPLOAD_ERR_NO_FILE) {
               // Validate image size
           
               if ($image->getSize() > 1000000) {
                   echo 'Image size exceeds the allowed limit.';
                   return;
               }
           
               // Validate image type
               if (!in_array($image->getClientMimeType(), ['image/jpeg', 'image/png'])) { // Adjust the allowed types as needed
                   echo 'Image type not allowed.';
                   return;
               }
           
               if ($image->isValid() && !$image->hasMoved()) {
                   // Generate a new file name
                   $newName = $image->getRandomName();
           
                   // Move the uploaded file to the "uploads" directory
                   $image->move(ROOTPATH . 'assets/uploads/services', $newName);
           
                   $model = new ServiceCategory();
                   $data = [
                       'category_img' => $newName,
                       'category_name' => $title,
                       'created_at' => date('Y/m/d'),
                   ];
           
                   // var_dump($data);
                   // exit;
                   $isTrue = $model->insert($data);   
                   return redirect()->to('admin/category_list');
               } else {
                   // Handle the upload failure
                   echo 'Faild to save data.';
               }
           
           }
           
           public function delete_category($id){
               $model = new ServiceCategory();
               $istrue = $model->delete($id);
               return redirect()->to('admin/category_list');
               // echo "<pre>";
               // var_dump($istrue) ;
               // exit;
           }
           
           
           public function edit_category_proccess($id='')
           {
               $session = Services::session();
               if (!$session->get('user')) {
                   return redirect()->to('login');
               }
           
           
               $model = new ServiceCategory();
           
               $request = service('request');
           
               $image = $this->request->getFile('image');
               $oldimage = $this->request->getVar('oldimage');
               $category_name = $this->request->getVar('category_name');
               // print_r($image);
               if ($image->getError() !== UPLOAD_ERR_NO_FILE) {
                   // Validate image size
                   if ($image->getSize() > 1000000) {
                       echo 'Image size exceeds the allowed limit.';
                       return;
                   }
           
                   // Validate image type
                   if (!in_array($image->getClientMimeType(), ['image/jpeg', 'image/png'])) { // Adjust the allowed types as needed
                       echo 'Image type not allowed.';
                       return;
                   }
           
                   if ($image->isValid() && !$image->hasMoved()) {
                       // Generate a new file name
                       $newName = $image->getRandomName();
           
                       // Move the uploaded file to the "uploads" directory
                       $image->move(ROOTPATH . 'assets/uploads/services', $newName);
           
                       $data = [
                        'category_img' => $newName,
                        'category_name' => $category_name,
                        'created_at' => date('Y/m/d'),
                    ];
           
                      //  var_dump($data);
                      //  exit;
           
                       $isTrue = $model->update($id, $data);
           
                       return redirect()->to('admin/category_list');
                   } else {
                       // Handle the upload failure
                       echo 'Faild to save data.';
                   }
               } else {
                $data = [
                    'category_img' => $oldimage,
                    'category_name' => $category_name,
                    'created_at' => date('Y/m/d'),
                ];
           
                  //  var_dump($data);
                  //  exit;
           
                   $isTrue = $model->update($id, $data);
                   return redirect()->to('admin/category_list');
           }
           }


           public function sub_category_list()
           {
               $session = Services::session();
               if (!$session->get('user')) {
                   return redirect()->to('login');
               }
               $request = service('request');

               $model = new ServiceCategory();
           
               $service_category=$model->findAll();
           
               $db = db_connect(); 
    $query = $db->table('subcategory')
        ->select('*') 
        ->join('service_category', 'service_category.category_id=subcategory.category_id', 'left'); // Perform the join
    $sub_data = $query->get()->getResultArray(); // Execute the query and get the results
           
            //    echo "<pre>";
            //    print_r($sub_data);
            //    exit;
               $data['category']=$service_category;
               $data['sub_data']=$sub_data;
               $data['active'] = 'services';
               echo view('admin/include/header');
               echo view('admin/include/navbar', $data);
               echo view('admin/include/sidebar');
               echo view('admin/services/sub_category', $data);
               echo view('admin/include/footer');
           
           }


           public function  add_sub_category(){
            $session = Services::session();
            if (!$session->get('user')) {
                return redirect()->to('login');
            }
            $request = service('request');

            $model = new SubCategoryModel();
            $istrue=$model->insert($this->request->getVar());
            return redirect()->to('admin/sub_category_list');
           }


           public function delete_sub_category($id){
            $model = new SubCategoryModel();
            $istrue = $model->delete($id);
            return redirect()->to('admin/sub_category_list');
            // echo "<pre>";
            // var_dump($istrue) ;
            // exit;
        }


        
    public function edit_subcategory($id='')
    {
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
    
        // echo $id;
        // echo $cat_id;
        // exit;
    
            $model = new ServiceCategory();
           
            $service_category=$model->findAll();
            $model2 = new SubCategoryModel();
            $sub_cate = $model2->find($id);
        // echo "<pre>";
        // print_r($sub_cate);
        // exit;
        $data['category']=$service_category;
        $data['sub_cate']=$sub_cate;
        $data['active'] = 'services';
        echo view('admin/include/header');
        echo view('admin/include/navbar', $data);
        echo view('admin/include/sidebar');
        echo view('admin/services/edit_subcategory', $data);
        echo view('admin/include/footer');
    }

    public function  edit_sub_category_process($id=""){
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
        $request = service('request');

        $model = new SubCategoryModel();
        $istrue=$model->update($id,$this->request->getVar());
        return redirect()->to('admin/sub_category_list');
       }

       public function  add_data_in_table(){
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
        $request = service('request');

        $model = new Table_data_Model();
        $istrue=$model->insert($this->request->getVar());
        return redirect()->to('admin/table_data');
       }

       public function table_data(){
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
        $request = service('request');

        $model = new ServiceCategory();
    
        $service_category=$model->findAll();
    
        $db = db_connect(); 
$query = $db->table('table_data')
 ->select('*') 
 ->join('service_category', 'service_category.category_id=table_data.category_id', 'left'); // Perform the join
$table_data = $query->get()->getResultArray(); // Execute the query and get the results
    
        // echo "<pre>";
        // print_r($table_data);
        // exit;
        $data['category']=$service_category;
        $data['table_data']=$table_data;
        $data['active'] = 'services';
        echo view('admin/include/header');
        echo view('admin/include/navbar', $data);
        echo view('admin/include/sidebar');
        echo view('admin/services/tabel_data', $data);
        echo view('admin/include/footer');
       }

       public function  edit_tabel_data($id=""){
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
    
        // echo $id;
        // echo $cat_id;
        // exit;
    
            $model = new ServiceCategory();
           
            $service_category=$model->findAll();
            $model2 = new Table_data_Model();
            $table_data = $model2->find($id);
        // echo "<pre>";
        // print_r($table_data);
        // exit;
        $data['category']=$service_category;
        $data['table_data']=$table_data;
        $data['active'] = 'services';
        echo view('admin/include/header');
        echo view('admin/include/navbar', $data);
        echo view('admin/include/sidebar');
        echo view('admin/services/edit_table', $data);
        echo view('admin/include/footer');
       }

       public function  edit_table_data_process($id=""){
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
        $request = service('request');

        $model = new Table_data_Model();
        $istrue=$model->update($id,$this->request->getVar());
        return redirect()->to('admin/table_data');
       }



       public function delete_table_data($id){
        $model = new Table_data_Model();
        $istrue = $model->delete($id);
        return redirect()->to('admin/table_data');
        // echo "<pre>";
        // var_dump($istrue) ;
        // exit;
    }



    // price card
    public function  add_price_card(){
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
        $request = service('request');

        // echo "<pre>";
        // var_dump($this->request->getVar());
        // exit;
        

        $model = new PriceCardModel();
        $istrue=$model->insert($this->request->getVar());
        return redirect()->to('admin/price_card_list');
       }

       public function price_card_list(){
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
        $request = service('request');

        $model = new ServiceCategory();
    
        $service_category=$model->findAll();
    
        $db = db_connect(); 
$query = $db->table('price_card')
 ->select('*') 
 ->join('service_category', 'service_category.category_id=price_card.category_id', 'left') // Perform the join
 ->join('subcategory', 'subcategory.subcategory_id=price_card.sub_c_id', 'left'); // Perform the join
$price_card_data = $query->get()->getResultArray(); // Execute the query and get the results
    
        // echo "<pre>";
        // print_r($price_card_data);
        // exit;
        $data['category']=$service_category;
        $data['price_card_data']=$price_card_data;
        $data['active'] = 'services';
        echo view('admin/include/header');
        echo view('admin/include/navbar', $data);
        echo view('admin/include/sidebar');
        echo view('admin/services/price_card_list', $data);
        echo view('admin/include/footer');
       }

       public function  edit_price_card($id=""){
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
    
        // echo $id;
        // echo $cat_id;
        // exit;

       
    
            $model = new ServiceCategory();
           
            $service_category=$model->findAll();
            $model2 = new PriceCardModel();
            $price_card_data = $model2->find($id);

            $model1 = new SubCategoryModel(); // Adjust the model as needed

            // $mydata=
            $data['subcategory'] = $model1->where('category_id',$price_card_data['category_id'])->findAll();

        // echo "<pre>";
        // print_r($data['subcategory']);
        // exit;
        $data['category']=$service_category;
        $data['price_card_data']=$price_card_data;
        $data['active'] = 'services';
        echo view('admin/include/header');
        echo view('admin/include/navbar', $data);
        echo view('admin/include/sidebar');
        echo view('admin/services/edit_price_card', $data);
        echo view('admin/include/footer');
       }

       public function  edit_price_card_process($id=""){
        $session = Services::session();
        if (!$session->get('user')) {
            return redirect()->to('login');
        }
        $request = service('request');

        // echo "<pre>";
        // print_r($this->request->getVar());
        // exit;

        $model = new PriceCardModel();
        $istrue=$model->update($id,$this->request->getVar());
        return redirect()->to('admin/price_card_list');
       }



       public function delete_price_card($id){
        $model = new PriceCardModel();
        $istrue = $model->delete($id);
        return redirect()->to('admin/price_card_list');
        // echo "<pre>";
        // var_dump($istrue) ;
        // exit;
    }
    // price card

    public function get_sub_gategory()
    {
        $id = $this->request->getPost('id'); // Use $this->request to access input

        $model = new SubCategoryModel(); // Adjust the model as needed

        $data = $model->where('category_id', $id)->findAll();

        // Return data as JSON response
        return $this->response->setJSON($data);
    }


           
               // service code 








}