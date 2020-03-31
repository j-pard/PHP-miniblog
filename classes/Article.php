<?php

      class Article {

            public function create() {
                  echo "<article class='items' id='item" . $this->id . "'>" .
                              "<h3>" . ucfirst($this->title) . "</h3>" .
                              "<img src='" . $this->img . "'>" .
                              "<footer>" .
                                    "<div class='likes-cont'>" . $this->likes . "</div>" .
                                    "<div class='author-cont'>" . ucfirst($this->author) . "</div>";

                                    $form = new Form;
                                    $form->create("controllers/item.php", "GET");
                                    $form->input("item-id", "number", $this->id,false);
                                    $form->submit("voir");
                                    $form->end();
                  echo        "</footer>" .
                        "</article>";
            }

      }

?>