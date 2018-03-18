<?php
namespace arr\post;

class Post{

    public function filterPostEmptyValue($post) {
 		$filterpost = array_filter($post); 
    	return $filterpost;
    }

    public function arrayUpdateBYpost($post,$oldarr) {
    	$filterpost = Post::filterPostEmptyValue($post);
    	$filterpost2 = Post::arrayDeleteNotNeed($filterpost);
    	foreach($filterpost2 as $key => $value){
            $oldarr->$key = $value;
        }
    }

    public function arrayDeleteNotNeed($post) {
    	unset($post['csrf']);
    }

}