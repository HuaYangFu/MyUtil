<? php
namespace util/http;

class http{

    public static function sendGet($url,$data)
    {
        if($data != ''){
            $url = $url.'?'.http_build_query($data)
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
         
        $ret = curl_exec($ch);
        if($ret === false){
            $ret = 'Erreur Curl : ' . curl_error($ch);
        }
        
        curl_close($ch);
        echo $ret;
    }

    public static function sendPost($url,$data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
         
        $ret = curl_exec($ch);
        if($ret === false){
            $ret = 'Erreur Curl : ' . curl_error($ch);
        }
        
        curl_close($ch);
        echo $ret;
    }
}
?>