<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Sales extends CI_Model
{
    /**
     * Function return all sales.
     *
     * @param $num
     *
     * @param $limit
     *
     * @return bool
     */
    public function getAllSales($num, $limit)
    {
        $query = $this
            ->db
            ->select('entity_id, price, street')
            ->limit($limit ,$num)
            ->get('main');

        if ($query->num_rows > 0) {
            // person has account with us
            return $query->result();
        }
        return false;

    }

    /**
     * Function return sales content by id.
     *
     * @param $id
     *
     * @return bool
     */
    public function getSalesById($id)
    {
        $query = $this
            ->db
            ->select('main.entity_id, street, price, date')
            ->from('main')
            ->join('top_sales', 'top_sales.entity_id = main.entity_id','left')
            ->limit(1)
            ->where('main.entity_id', $id)
            ->get();
        
        if ($query->num_rows > 0) {
            // person has account with us
            return $query->row();
        }

        return false;
    }

    /**
     * Get image for sales by ID.
     *
     * @param $id
     *
     * @return bool
     */
    public function getImagesById($id)
    {
        $query = $this
            ->db
            ->select('*')
            ->from('images')
            ->where('entity_id', $id)
            ->get();

        if ($query->num_rows > 0) {
            // person has account with us
            return $query->result();
        }

        return false;
    }

    /**
     * Set image for sales
     *
     * @param $entity_id
     *
     * @param $image
     */
    public function setImage($entity_id, $image)
    {
        $this->db->insert('images', array('entity_id'=>$entity_id,'image'=>$image));
    }

    /**
     * Set top sales.
     *
     * @param $entity_id
     */
    public function set_top_sales($entity_id)
    {
        $this->db->insert('top_sales', array('entity_id'=>$entity_id));
    }


    /**
     * Remove top sales.
     *
     * @param $entity_id
     */
    public function remove_top_sales($entity_id)
    {
        $this->db->delete('top_sales', array('entity_id'=>$entity_id));
    }

    /**
     * Checking for sales exist.
     *
     * @param $entity_id
     *
     * @return bool
     */
    public function top_sales_exist($entity_id)
    {
        $query = $this
            ->db
            ->select('*')
            ->from('top_sales')
            ->where('entity_id', $entity_id)
            ->get();

        if ($query->num_rows > 0) {
            // person has account with us
            return $query->row();
        }

        return false;
    }

}