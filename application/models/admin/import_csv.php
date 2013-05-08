<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Import_Csv extends CI_Model
{

    var $fields;
    /** columns names retrieved after parsing */
    var $separator = ';';
    /** separator used to explode each line */


    protected $_arrayToSystem = array(
        'Бизнес' => 'business',
        'К' => 'count_room',
        'Эт/эт' => 'real_estate',
        'М' => 'material',
        'Рай' => 'area',
        'Улица' => 'street',
        'Цена' => 'price',
        'Реклама' => 'advertising',
        'Агент' => 'agent',
        'ID' => 'entity_id',
        'Комн' => 'type_room',
        'Общ' => 'total_area',
        'Жил' => 'living_area',
        'Кух' => 'kitchen_area',
        'Описание' => 'description'
    );

    /**
     * Parse an array of text lines containing CSV formatted data.
     *
     * @access    public
     * @param    array
     * @return    array
     */
    public function parse_file($filepath)
    {
        $this->db->truncate('main');
        if (!file_exists($filepath)) return false;
        $this->load->library('utf8');
        $handle = fopen($filepath, "r");
        while (($data = fgets($handle, 2000)) != FALSE) {
            if (!empty($data)) {
                $item = @array_combine($this->_arrayToSystem, explode($this->separator, $this->utf8->convert_to_utf8($data, 'WINDOWS-1251')));
                if (!isset($item['entity_id']) or $item['entity_id'] <= 0 or
                    empty($item['street']) or  empty($item['price'])) continue;
                if (isset($item['real_estate']) and $item['real_estate'] > 0) {
                    $data = explode('/',$item['real_estate']);
                    if(!isset($data[0]) or empty($data[0]) or !isset($data[1]) or empty($data[1]) ) continue;
                    $item['floor'] = $data[0];
                    $item['floor_high'] = $data[1];

                }

                $this->db->insert('main', $item);
                unset($item);
            }
        }
        fclose($handle);
    }
}
