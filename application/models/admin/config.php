<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Config extends CI_Model
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
    public function getConfigByName($name)
    {
        $query = $this
            ->db
            ->select('name, value')
            ->where(array('name' =>  $name))
            ->limit(1)
            ->get('config');

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
    public function saveConfig($name, $value)
    {
        $sql = $this->db->insert_string('config',  array('name' => $name, 'value' => $value )) . ' ON DUPLICATE KEY UPDATE value="'. $value. '"';
        $this->db->query($sql);
    }

    /**
     * Function return sales content by id.
     *
     * @param $id
     *
     * @return bool
     */
    public function getTopSalesById($id)
    {
        $query = $this
            ->db
            ->select('top_sales_group_id')
            ->from('top_sales')
            ->where('entity_id', $id)
            ->get();

        if ($query->num_rows > 0) {
            // person has account with us
            foreach($query->result_array() as $value) {
                $result[] = $value['top_sales_group_id'];
            }
            return $result;
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
        $this->db->insert('images', array('entity_id' => $entity_id, 'image' => $image));
    }

    /**
     * Set top sales.
     *
     * @param $entity_id
     */
    public function set_top_sales($entity_id, $top_sales)
    {
        foreach ($top_sales as $key => $value) {
            $this->db->insert('top_sales', array('entity_id' => $entity_id, 'top_sales_group_id' => $key));
        }

    }

    /**
     * Remove top sales.
     *
     * @param $entity_id
     */
    public function remove_top_sales($entity_id)
    {
        $this->db->delete('top_sales', array('entity_id' => $entity_id));
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