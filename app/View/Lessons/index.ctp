<section id="lesson">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <br><br>
                <h2> <span>All</span> Lessons</h2>
                <hr class="seperate">

                <p class="text-center">take the lesson and let your brain running</p>
                <p class="text-center">click "<i class="glyphicon glyphicon-star-empty"></i>" to add your favorit lesson in your wishlist</p>
                <p class="text-center">let make the high score ,your friends may precede you!! </p>
                <br><br>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-2 col-md-2">
                <div class="list-group">
                    <a class="list-group-item active">Categories</a>
                    <?php foreach ($categorys as $category_show): 
                    echo $this->Html->link($category_show['Category']['name'], 
                        ['controller' => 'lessons','action' => 'index',$category_show['Category']['id']]
                        , array('class' => 'list-group-item'));
                        ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-xs-10 col-md=10">
                <!--   row1 -->
                <div class="row">

                    <?php foreach ($decks as $decks_show): ?>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <h3><?= $decks_show['Deck']['name'] ?></h3>


                            <?php //foreach ($cards as $card_show): ?>
                            <?php //echo $this->Html->image($card_show['Card']['front'], array(
                                //'class' => 'img-responsive center-block')); ?>
                                <?php echo $this->Html->image('duck.jpg', array('class' => 'img-responsive'));?>
                                 <?php //endforeach; ?>




                                <div class="caption">
                                    <p>Created By: <?= $decks_show['User']['username'] ?></p>
                                    <p>High Scores:</p>
                                    <div class="span7 text-center">
                                        <a href="#" class="btn btn-default" role="button"><i class="glyphicon glyphicon-star-empty"></i></a> 
                                        <?php echo $this->Html->link('Learn', 
                                            ['controller' => 'lessons','action' => 'learn',$decks_show['Deck']['id']],
                                            array('class' => 'btn btn-default'));?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Scroller to Top -->
    <div class="scroll-top page-scroll visible-xs visible-sm visible-md visible-lg">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

