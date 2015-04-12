<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class basedb extends CI_Model
    {
        // Admin login check 
        public function can_log_in()
        {
            $this->db->where('adminid', $this->input->post('admin_id'));
            $this->db->where('password', md5($this->input->post('password')));
            $query =$this->db->get('admin');
            if($query->num_rows() == 1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
         public function can_login()
            {
                $this->db->where('userid', $this->input->post('userid'));
                $this->db->where('password', md5($this->input->post('pass')));
                $query =$this->db->get('user_data');
                if($query->num_rows() == 1)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            public function user_check()
            {
                $this->db->where('userid', $this->input->post('userid'));
                
                $query =$this->db->get('user_data');
                if($query->num_rows() == 1)
                {
                    return false;
                }
                else
                {
                    return true;
                }
            }
             public function registration($user_data)
            {
                $query = $this->db->insert('user_data' , $user_data);
            }
            
            public function get_state()
            {
                
                $query = $this->db->query("SELECT city_state FROM `cities` GROUP BY city_state HAVING COUNT(*) > 1");
                return $query->result();
            }
            public function get_city($city)
            {
                $this->db->where('city_state', $city);
                $query= $this->db->get('cities');
                return $query->result();
            }
            public function get_user($table,$field, $userid)
            {
                $this->db->where($field, $userid);
                $query= $this->db->get($table);
                return $query;
            }
            public function insert_db($table, $data)
            {
                $this->db->insert($table, $data);
            }
    }