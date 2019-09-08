<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Studenci_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get studenci by id
     */
    function get_studenci($id)
    {
        return $this->db->get_where('plik',array('id'=>$id))->row_array();
    }

    /*
     * Get all studenci count
     */
    function get_all_studenci_count()
    {
        $this->db->from('plik');
        return $this->db->count_all_results();
    }

    /*
     * Get all studenci
     */
    function get_all_studenci($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('plik')->result_array();
    }

    /*
     * function to add new studenci
     */
    function add_studenci($params)
    {
        $this->db->insert('plik',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update studenci
     */
    function update_studenci($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('plik',$params);
    }

    /*
     * function to delete studenci
     */
    function delete_studenci($id)
    {
        return $this->db->delete('plik',array('id'=>$id));
    }
}