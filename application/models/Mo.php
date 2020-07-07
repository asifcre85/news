<?php
class Mo extends CI_Model {

   

    function c($name){
    	$data=array(
    		name=>$name,
    	);
    	 $this->db->insert('text1',$data);
    }

     function n1($n1,$n2,$g1,$n3,$ids){
        $data=array(
            n1=>$n1,
            n2=>$n2,
            n3=>$n3,
            g1=>$g1,
           // ids=>$ids,
        );
        $this->db->where('id',$ids);
         $this->db->update('news',$data);
    }

    //  function g1($g1){
    //     $data=array(
    //        // n1=>$n1,
    //          g1=>$g1,
    //     );
    //      $this->db->update('images',$data);
    // }

    


}
?>