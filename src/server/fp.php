<?php
header('Access-Control-Allow-Origin:*');

//if(!isset($_REQUEST['_fp_cookie'])) die("Require more params!!");


//print_r($_REQUEST['_cookie']);
$obj = new fp($_REQUEST['_fp_cookie']);

$obj->push();
echo $obj->get();


//echo json_encode(merge_cookies($a, $b));



die();



class fp{

    public function __construct($_fp_cookie, $dir = "__cookie__")
    {
        //$res = json_decode($_fp_cookie);
        $this->_fp = $_REQUEST['fp'];
        $this->_dir = $dir;
        $this->_cookie = $_REQUEST['_cookie'];
        $this->g_cookie = $_REQUEST['g_cookie'];
    }

    private $_fp;
    private $_dir;
    private $_cookie;
    private $g_cookie;

    public function push(){
        $this->_cookie = $this->merge_cookies($this->get_cookie(), $this->_cookie);
        $this->g_cookie = $this->merge_cookies($this->get_g_cookie(), $this->g_cookie);

        $f = fopen($this->_dir.'/'.($this->get_cookie_fname()), "w");
        fwrite($f, json_encode($this->_cookie));
        fclose($f);
        $f = fopen($this->_dir.'/'.($this->get_g_cookie_fname()), "w");
        fwrite($f, json_encode($this->g_cookie));
        fclose($f);
    }

    public function get(){

        $i = array();
        $i['_cookie'] = $this->get_cookie();
        $i['g_cookie'] = $this->get_g_cookie();
        return json_encode($i);
    }

    public function get_g_cookie(){
        return (array)json_decode(file_get_contents($this->_dir.'/'.($this->get_g_cookie_fname())));
    }

    public function get_cookie(){
        return (array)json_decode(file_get_contents($this->_dir.'/'.($this->get_cookie_fname())));
    }

    public function get_cookie_fname(){
        return md5(($this->_fp)."#".($this->get_from_domain())).".fp";
    }

    public function get_g_cookie_fname(){
        return md5(($this->_fp)."#"."g").".fp";
    }


    /** get from address **/
    private function get_from(){

        if($_SERVER['HTTP_REFERER']) return $_SERVER['HTTP_REFERER'];
        return "https://fp.yimian.xyz";
        die(json_encode(array("state" => 0, "message" => "No HTTP_REFERER in HTTP header!!")));
    }

    private function get_from_domain(){
        $str = str_replace("http://","",$this->get_from());
        $str = str_replace("https://","",$str);
        $strdomain = explode("/",$str);
        return $strdomain[0];
    }


    private function md_dir(){
        if (!file_exists($this->_dir)){
            mkdir($this->_dir,0777,true);
        }
    }

    private function merge_cookies($a, $b){

        $a_keys = array_keys($a);
        $b_keys = array_keys($b);

        foreach($a_keys as $t_a){

            $cnt = 0;
            foreach($b_keys as $t_b){

                if($t_b == $t_a){

                    $c_a = (array)$a[$t_b];
                    $c_b = (array)$b[$t_b];

                    if($c_a['stt'] > $c_b['stt']){

                        $b[$t_b] = $a[$t_b];
                    }

                }else{
                    $cnt++;
                }
            }
            if($cnt == count($b_keys)){
                $b[$t_a] = $a[$t_a];
            }
        }

        return $b;
    }
}