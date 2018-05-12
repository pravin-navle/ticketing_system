<?php 

Class Auth_Model extends CI_Model 
{
    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $query = $this->db->get_where('users', array('username'=>$username));
        if($query->num_rows() == 1)
        {
            $row = $query->row();
            if($password == $row->password)
            {
                $userdata = array(
                    'firstname'=>$row->firstname,
                    'lastname'=>$row->lastname,
                    'username'=>$row->username,
                    'loggedIn'=>TRUE
                );
    
            }
            
            $this->session->set_userdata($userdata);

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function register()
    {
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $this->db->insert('users', array('firstname'=>$firstname, 'lastname'=>$lastname, 'username'=>$username, 'password'=>$password));
        if($this->db->affected_rows() == 1)
        {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function forgot_password()
    {

    }

    public function reset_password()
    {

    }
}