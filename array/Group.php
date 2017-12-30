<? php
namespace util/array;

class Group{

    public static function arrayGroupByKey($array,$key)
    {
        $result = array();
        foreach ($array as $data) {
            $id = $data[$key];
            if (isset($result[$id])) {
                $result[$id][] = $data;
            } else {
                $result[$id] = array($data);
            }
        }
        return $result;
    }
}
?>