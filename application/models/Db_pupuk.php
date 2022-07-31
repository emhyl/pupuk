<?php
    class Db_pupuk extends CI_Model
    {
        function getAll($tbl)
        {
            return $this->db->get($tbl)->result_array();
        }

        function getField($tbl){
            return $this->db->list_fields($tbl);
        }

        public function getOne($tbl, $where){
            return $this->db->get_where($tbl,$where)->result_array();
        }
        public function getById($tbl, $where){
            return $this->db->get_where($tbl,$where)->row();
        }

        public function add($tbl, $data){
            return $this->db->insert($tbl,$data);
        }

        public function edit($tbl, $data, $where){
            return $this->db->update($tbl, $data, $where);
        }

        public function delete($tbl, $id){
            return $this->db->delete($tbl, $id);
        }

        public function like($field, $data,$tbl){
            $this->db->like($field, $data,'both');
            return $this->db->get($tbl)->result_array();
        }

        
        public function join2tbl($select='*',$tbl =[],$id = [],$where = null){
            $this->db->select($select);
            $this->db->from($tbl[0]);
            $this->db->join($tbl[1], $tbl[1].'.'.$id[1].'='.$tbl[0].'.'.$id[0]);

            if($where != null){
                
                $this->db->where($where);
            }


            $query = $this->db->get()->result_array();
            return$query;
        }

        public function getJml(){
            $data = $this->getOne('pembeli',['sts_beli' => 'proses']);
            return count($data);
        }
    }