<?php
function list_name_memeber($tour_id){
        $list = $this->list_member_tour($tour_id);
        if($list != false){
            $name = array();
            foreach($list as $l){
                 $n=$this->name_show($l["user_member"]);
             if($n!=false){
                $name[] = $n;
             }else{
                return false;
             }
            
           } 
           return $name;
        }else{
            return false;
        }
       
      }


 ?>
 <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a>
 <div class="modal fade" id="modal-id">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Modal title</h4>
             </div>
             <div class="modal-body">
                 
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Save changes</button>
             </div>
         </div>
     </div>
 </div>
<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a>
<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
