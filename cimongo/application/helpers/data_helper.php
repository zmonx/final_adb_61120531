<?php 

    function nameCategory($id)
    {
        $CI = &get_instance();
        $CI->load->model('category_model');
     
        $condition = array(
            '_id' => $CI->mongo_db->create_document_id($id)
        );
        $result = $CI->category_model->findOne($condition);
        return $result['categories_name'];
    }



