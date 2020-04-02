<?php

      class Article {

            public function create() {
                  echo "<article class='items' id='item" . $this->id . "'>" .
                              "<h3>" . ucfirst($this->title) . "</h3>" .
                              "<img src='" . $this->img . "'>" .
                              "<footer>" .
                                    "<div class='likes-cont'><i class='fas fa-heart'></i>" . $this->likes . "</div>" .
                                    "<div class='author-cont'><i class='fas fa-pen-fancy'></i>" . ucfirst($this->author) . "</div>";

                                    $form = new Form;
                                    $form->create("views/item.php", "GET");
                                    $form->input("item-id", "number", $this->id,false);
                                    $form->submit("voir");
                                    $form->end();
                  echo        "</footer>" .
                        "</article>";
            }

      }

?>