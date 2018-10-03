 <div id="samena"> 
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script>
//$('#peck').html('tas');
</script>
<?php
    //here i put collection of array with sctipts;
    $SCRIPT_COLLECTION = []; 

class IY_JQ { 
    public $SELECTOR;
     
    public function setSelector($_SEL_)
    { $this->SELECTOR = $_SEL_; }
     
    public function _a($NELM)
    { 
        global $SCRIPT_COLLECTION;
        array_push( $SCRIPT_COLLECTION , $NELM); 
    }        
    
    public function _s($se=NULL)
    { 
        $se = !$se ? $this->SELECTOR : $se;
        return "$('$se')"; 
    }    

    public function  html($str) { 
        $this->_a( $this->_s().".html($str)" );
    }
    
    public function  call()
    {
        global $SCRIPT_COLLECTION;
        
        echo '<script>';
        for($I=0; $I<count($SCRIPT_COLLECTION);$I++)
        {
            echo $SCRIPT_COLLECTION[$I] . "\n";
        }
        echo '</script>';
    }
}
    $_JQ_ = new IY_JQ(NULL); 


function JQUERY($SELECTOR)
{
    global $_JQ_;
    $_JQ_->setSelector($SELECTOR);
    return $_JQ_;}
 
 JQUERY('#samena')->html('"arssdfsdfsdfsfa"'); 

 $_JQ_->call();
?>
