<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProdukModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_produk()
    {
        $result = $this->db->get('produk');
        return $result;
    }

    public function hapus_produk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('produk');
    }

    public function edit_produk($id)
    {
        $query = $this->db->where('id', $id)->get('produk');
        return $query->row();
    }

    public function update_produk($data, $id)
    {
        return $this->db->update('produk', $data, $id);
    }

    public function simpan_produk($data)
    {
        return $this->db->insert('produk', $data);
    }

    public function is_product_exist($id, $sku)
    {
        return ($this->db->where(array('id' => $id, 'sku' => $sku))->get('products')->num_rows() > 0) ? TRUE : FALSE;
    }

    public function product_data($id)
    {
        $data = $this->db->query("
            SELECT p.*, pc.name as category_name
            FROM products p
            JOIN product_category pc
                ON pc.id = p.category_id
            WHERE p.id = '$id'
        ")->row();

        return $data;
    }

    public function related_products($current, $category)
    {
        return $this->db->where(array('id !=' => $current, 'category_id' => $category))->limit(4)->get('products')->result();
    }

    public function create_order(array $data)
    {
        $this->db->insert('orders', $data);

        return $this->db->insert_id();
    }

    public function create_order_items($data)
    {
        return $this->db->insert_batch('order_items', $data);
    }
}
