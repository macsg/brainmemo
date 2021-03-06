<?php

class LessonsController extends AppController {
    public function index($Categoryi) {
    	$this->loadModel('Category');
    	$categorys = $this->Category->find('all',['order'=>['Category.name'=>'ASC']]);
    	$this->set('categorys',$categorys);

    	$this->loadModel('Deck');
    	if($Categoryi!=null){
    		$decks = $this->Deck->find('all',['conditions'=>['Deck.category_id'=>$Categoryi],'order'=>['Deck.modified'=>'DESC'] ]);
    	}else{
    	   $decks = $this->Deck->find('all',['order'=>['Deck.modified'=>'DESC']]);
        }
    	$this->set('decks',$decks);
    }


    public function learn($Decki=null) {

        $this->loadModel('Card');
        $cards = $this->Card->find('all',['conditions'=>['Card.deck_id'=>$Decki]]);
        $this->set('cards',$cards);

       // $random_answers = $this->Card
        $this->set('random_answers', $this->Card->find('all', array('conditions'=>['Card.deck_id'=>$Decki],'order' => 'rand()',
            'limit' => 4,
            )));
    }
}