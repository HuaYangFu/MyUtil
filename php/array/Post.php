<? php
namespace util/array;

class Post{

    public static function filterPostEmptyValue($post) {
 		$filterpost = array_filter($post); 
    	return $filterpost;
    }

    public static function arrayUpdateBYpost($post,$oldarr) {
    	$filterpost = Post::filterPostEmptyValue($post);
    	$filterpost2 = Post::arrayDeleteNotNeed($filterpost);
    	foreach($filterpost2 as $key => $value){
            $oldarr->$key = $value;
        }
    }

    public static function arrayDeleteNotNeed($post) {
    	unset($post['csrf']);
    }

}