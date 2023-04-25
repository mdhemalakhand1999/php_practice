<?php
class Article {
    private $title;
    private $time;
    function __construct($title, $time) {
        $this->title = $title;
        $this->time = $time;
    }
    function getTime() {
        return $this->time;
    }
    function getTitle() {
        return $this->title;
    }
    function displayTitle() {
        $title = $this->getTitle();
        $date = date("Y/m/d Y:i:s", $this->getTime());
        echo "{$title} has published on {$date}";
    }
}

class ArticleTitleDecorator {
    private $article;
    function __construct(Article $article) {
        $this->article = $article;
    }
    
    function displayTitle() {
        $title = $this->article->getTitle();
        $date = $this->timeAgo($this->article->getTime());
        echo "{$title} has published on {$date}";
    }
    private function timeAgo( $time ) { 
        //source: https://www.geeksforgeeks.org/how-to-convert-timestamp-to-time-ago-in-php/
        $diff = time() - $time; 
          
        if( $diff < 1 ) {  
            return 'less than 1 second ago';  
        } 
          
        $timeRules = array (  
                    12 * 30 * 24 * 60 * 60 => 'year', 
                    30 * 24 * 60 * 60       => 'month', 
                    24 * 60 * 60           => 'day', 
                    60 * 60                   => 'hour', 
                    60                       => 'minute', 
                    1                       => 'second'
        ); 
      
        foreach( $timeRules as $secs => $str ) { 
              
            $div = $diff / $secs; 
      
            if( $div >= 1 ) { 
                  
                $t = round( $div ); 
                return $t . ' ' . $str .  
                    ( $t > 1 ? 's' : '' ) . ' ago'; 
            } 
        } 
    } 
}

$article = new Article("Article Title ", time() - 40800);

$ad = new ArticleTitleDecorator($article);
$ad->displayTitle();