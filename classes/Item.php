<?php

      class Item {

            public function create() {
                  echo 
                        "<section class='item-left'>
                              <header>
                                    <h3>" . ucfirst($this->title) . "</h3>
                              </header>
                              <div class='flex-row carousel'>
                                    <div class='img-cont-left'>
                                          <img src='" . $this->img . "'>
                                    </div>
                                    <div class='img-cont-right'>
                                          <img src='" . $this->img2 . "'>
                                          <img src='" . $this->img3 . "'>
                                    </div>
                              </div>
                              <div class='flex-row item-more'>
                                    <div class='likes-cont'><i class='fas fa-heart'></i>" . $this->likes . "</div>";
                                    $form = new Form;
                                          $form->create("controllers/liker.php", "POST");
                                          $form->input("item-id", "number", $this->id, false);
                                          $form->submit("Like");
                                          $form->end();
                        echo  "</div>
                              <footer>
                                    <div class='author-cont'><i class='fas fa-clock'></i>" . ucfirst($this->author) . "</div>
                                    <div class='author-cont'><i class='fas fa-pen-fancy'></i>" . ucfirst($this->author) . "</div>
                              </footer>
                        </section>";

                        //<section class='item-right'></section>
            }
      }
?>
