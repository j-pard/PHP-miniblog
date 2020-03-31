<?php

      class Article {

            public function create() {
                  echo "<article class='items'>" .
                              "<h3>" . ucfirst($this->title) . "</h3>" .
                              "<img src='" . $this->img . "'>" .
                              "<footer>" .
                                    "<div class='likes-cont'>" . $this->likes . "</div>" .
                                    "<div class='author-cont'>" . ucfirst($this->author) . "</div>" .
                              "</footer>" .
                        "</article>";
            }

      }

?>