<?php


    /**
     * @property CI_Loader $load
     * @property CI_DB_query_builder $db
     */
    class DB_Model extends CI_Model {

        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        /**
         * Description: 数据库数据写入函数，将指定数据保存到数据库中
         * Author: mwxiaojia
         * Date: 2022/5/17 14:43
         * @param string $table : 表名，数据写入的数据表
         * @param array $data : 数据，由字段名和值构成的数组
         * @return bool 写入状态，TRUE写入成功，FALSE写入失败
         */
        public function insert(string $table, array $data): bool {
            // 返回写入状态
            return $this->db->insert($table, $data);
        }

        /**
         * Description: 数据库数据删除函数，将指定数据从数据库中删除
         * Author: mwxiaojia
         * Date: 2022/5/17 14:53
         * @param string $table : 表名，数据删除的数据表
         * @param array $condition : 条件，由字段名和值构成的数组
         * @return bool 删除状态，TRUE删除成功，FALSE删除失败
         */
        public function delete(string $table, array $condition): bool {
            // 返回删除状态
            return $this->db->delete($table, $condition);
        }

        /**
         * Description: 数据库数据更新函数，更新数据库中的指定数据
         * Author: mwxiaojia
         * Date: 2022/5/17 15:39
         * @param string $table : 表名，数据更新的数据表
         * @param array $data : 更新数据，由字段名和值构成的数组
         * @param array $condition : 条件，由字段名和值构成的数组
         * @param bool $escape : 转义操作，TRUE转义（默认），FALSE不转义
         * @return bool 更新状态，TRUE更新成功，FALSE更新失败
         */
        public function update(string $table, array $data, array $condition, bool $escape = TRUE): bool {
            // 设置更新的数据字段和值，并设置是否转义
            foreach ($data as $field => $value) {
                $this->db->set($field, $value, $escape);
            }
            // 设置更新数据的条件
            $this->db->where($condition);
            // 返回数据的更新状态
            return $this->db->update($table);
        }

        /**
         * Description: 数据库数据查询函数，查询数据库中符合条件的函数
         * Author: mwxiaojia
         * Date: 2022/5/17 16:35
         * @param string $table : 表名，数据查询的数据表
         * @param array|null $select : 返回字段，由字段构成的数组
         * @param array|null $condition : 精确查询条件，由字段名和值构成的数组
         * @param array|null $like : 模糊查询条件，由字段名和值构成的数组
         * @param array|null $order : 查询结果排序，由字段名和排序方式构成的数组
         * @param int $offset : 查询偏移量，默认为0，从首行开始查询，需与limit参数一起使用
         * @param int $limit : 查询结果数目，默认-1，全部查询
         * @param bool $distinct : 重复查询，默认FALSE重复查询，TRUE不重复查询
         * @return array 返回符合查询条件的二维数组
         */
        public function select(string $table, array $select = null, array $condition = null, array $like = null, array $order = null, int $offset = 0, int $limit = -1, bool $distinct = FALSE): array {
			
            // 设置查询返回字段
            if (isset($select)) {
                $select = implode(', ', $select);
                $this->db->select($select);
            }

            // 设置精确查询条件
            if (isset($condition)) {
                $this->db->where($condition);
            }

            // 设置模糊查询条件
            if (isset($like)) {
                $this->db->like($like);
            }

            // 设置结果排序方式
            if (isset($order)) {
                foreach ($order as $field => $rank) {
                    $this->db->order_by($field, $rank);
                }
            }

            // 设置查询偏移
            if ($offset != 0) {
                $this->db->offset($offset);
            }

            // 设置查询数目
            if ($limit != -1) {
                $this->db->limit($limit);
            }

            // 设置重复查询
            if ($distinct) {
                $this->db->distinct();
            }

            // 返回查询结果
            return $this->db->get($table)->result_array();
        }

    }
