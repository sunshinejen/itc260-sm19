<?php
//application/controllers/Pics.php
class Pics extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
            
                $this->load->model('pics_model');
                $this->config->set_item('banner', 'Flickr Pics');
                $this->load->model('pics_model');
                $this->load->helper('url_helper');
        }
        
    
    public function index($tags = 'sounders')
        {
            $this->config->set_item('title', 'Flickr Pics');
            $data['title'] = 'See Flickr Pics';
            $data['default_tags'] = ['Mariners', 'Seahawks', 'Sounders'];
            $this->load->view('pics/index', $data);
            
            //$tags = 'sounders';
            //$pics = $this->pics_model->get_pics($tags);

                /*$this->config->set_item('title', 'Seattle Sports News');
                
                $nav1 = $this->config->item('nav1');
            
                //var_dump($nav1);
                //die;
            
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'News archive';
                $this->load->view('news/index', $data);*/
        }
        public function view($tags = NULL)
        {   
             if ($tags === NULL) {
            $this->config->set_item('title', 'Flickr Pics | Oops!' . $tags);
            $data['title'] = 'Oops. No tag entered.';
        } else {
            $this->config->set_item('title', 'Flickr Pics | ' . $tags);
            $data['title'] = $tags;
            $data['pics'] = $this->pics_model->get_pics($tags);
            // 
            // echo "<pre>";
            // echo var_dump($data['pics']);
            // echo "</pre>";
            // die;
        }
        $this->load->view('pics/view', $data);
    }
               
            
            
            /*
                    slug, without dashes
                    uppercase slug words
                    use dashless slug for the title
                    maybe add, 'News flash -'
                
                //slug without dashes
                $dashless_slug = str_replace("-", " ", $slug);
                
                //uppercase slug words
                $dashless_slug = ucwords($dashless_slug);
                
                //use dashless slug for the title
                $this->config->set_item('title', 'News Flash- '. $dashless_slug);
                
                $data['news_item'] = $this->news_model->get_news($slug);
   
                if (empty($data['news_item']))
                {
                        show_404();
                }
                $data['title'] = $data['news_item']['title'];
                $this->load->view('news/view', $data);            */
            
        }