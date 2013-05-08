<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class sales extends CI_Model
{
    const PREFIX_AND = ' AND ';


    protected $_real_estate = array(
        'flat' => 'flat',
        'room' => 'oбщ',
        'house' => 'дом',
        'parthouse' => 'ч/д',
        'cottage' => 'дачи',
        'plot' => 'уч',
        'industry' => 'к/н',
    );
    /**
     * Function return select sales
     */
    public function getSelectSales($data, $real_estate, $limit = '', $offset = '')
    {
        $query = 'SELECT * FROM `main` WHERE ';

        if (isset($data['real_estate']) and $data['real_estate'] != 'flat' and $data['real_estate'] != 'room' and !isset($data['type_estate'])) {
            $query .= "real_estate = '" . mysql_real_escape_string($this->_real_estate[$data['real_estate']]) . "'" . self::PREFIX_AND;
        } elseif ($data['real_estate'] == 'flat') {
            $query .= "floor > 0" . self::PREFIX_AND . 'type_room !='. "'общ'". self::PREFIX_AND ;
        } elseif ($data['real_estate'] == 'room') {
            $data['type_room'] = 'общ';
        } elseif (isset($data['type_estate']) and !empty($data['type_estate'])) {
            if ($data['type_estate'] == 'all' ) {
                $query .= "real_estate = '" . mysql_real_escape_string($this->_real_estate[$data['real_estate']]) . "'" . self::PREFIX_AND;
            } else {
                $query .= "real_estate = '" . mysql_real_escape_string($data['type_estate']) . "'" . self::PREFIX_AND;
            }
        }

        if (isset($data['n_f'])) {
            $query .= "floor != 1 " . self::PREFIX_AND;
        }

        if (isset($data['n_l'])) {
            $query .= "floor != floor_high" . self::PREFIX_AND;
        }

        if (isset($data['floor_from']) and !empty($data['floor_from'])) {
            $query .= "floor >= '" . mysql_real_escape_string($data['floor_from']) . "'" . self::PREFIX_AND;
        }

        if (isset($data['floor_to']) and !empty($data['floor_to'])) {
            $query .= "floor <= '" . mysql_real_escape_string($data['floor_to']) . "'" . self::PREFIX_AND;
        }

        if (isset($data['material']) and $data['material'] != 'all') {
            $query .= "material = '" . mysql_real_escape_string($data['material']) . "'" . self::PREFIX_AND;
        }

        if (isset($data['type_room']) and $data['type_room'] != 'all') {
            $query .= "type_room = '" . mysql_real_escape_string($data['type_room']) . "'" . self::PREFIX_AND;
        }

        if (isset($data['count_room']) and !empty($data['count_room']) and $data['count_room'] != 'all') {
            $query .= "count_room = '" . mysql_real_escape_string($data['count_room']) . "'" . self::PREFIX_AND;
        }

        if (isset($data['price_from']) and !empty($data['price_from'])) {
            $query .= "price >= '" . mysql_real_escape_string($data['price_from']) . "'" . self::PREFIX_AND;
        }

        if (isset($data['price_to']) and !empty($data['price_to'])) {
            $query .= "price <= '" . mysql_real_escape_string($data['price_to']) . "'" . self::PREFIX_AND;
        }

        if (isset($data['region']) and !empty($data['region'])) {
            $region = array_map(array($this, '_quote'), $data['region']);
            $region = implode(",", $region);
            $query .= "area in (" . $region . ")" . self::PREFIX_AND;
        }

        $query = rtrim($query, self::PREFIX_AND);

        if (isset($data['sorted']) and !empty($data['sorted'])) {
            $query .= " order by " . mysql_real_escape_string($data['sorted']).' ASC';
        }


        $result = $this->db->query($query);
        $res['count_item'] = $result->num_rows;

        $query .= " LIMIT " . (($offset) ? mysql_real_escape_string($offset) . "," : '') . mysql_real_escape_string($limit);
        $result = $this->db->query($query);

//        echo '<i>';
//           print_r($this->db->last_query());
//        var_dump($result);
//           echo '</i>';

        if ($result->num_rows > 0) {
            foreach ($result->result() as $row) {
                $row->image = $this->_getImagesById($row->entity_id);
            }
        }

        $res['items'] = $result->result() ;

        return $res;
    }

    private function _getInfoSales($entity_id)
    {
        $query = $this
            ->db
            ->select('*')
            ->from('main')
            ->where('main.entity_id', $entity_id)
            ->get();

        if ($query->num_rows > 0) {
            return $query->row();
        }

        return false;
    }

    public function getTopSales()
    {
        $query = $this
            ->db
            ->select('entity_id')
            ->from('top_sales')
            ->distinct()
            ->limit(3)
            ->order_by('date', 'desc')
            ->get();

        if ($query->num_rows > 0) {
            foreach ($query->result() as $row) {
                $data[$row->entity_id]['info'] = $this->_getInfoSales($row->entity_id);
                $data[$row->entity_id]['image'] = $this->_getImagesById($row->entity_id);
            }

            return $data;
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
    private function _getImagesById($entity_id)
    {
        $query = $this
            ->db
            ->select('*')
            ->from('images')
            ->where('entity_id', $entity_id)
            ->get();

        if ($query->num_rows > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row->image;
            }
            return $data;
        }
        return false;
    }

    private function _quote($string)
    {
        return "'" . $string . "'";
    }

}