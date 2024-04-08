<?php 

        function createTile($title,$image,$description,$price){      
                $tile ='
                    <div class="tile">
                                    <h3>'.$title.'</h3>
                                    <div class="image">
                                        <img src="../uploads/' . $image .'" alt="manga Image">
                                    </div>
                                    <div class="description">
                                        <p>'.$description .'</p>
                                    </div>
                                    <div class="chapter">
                                        Chapter : <input type="text" value="1" class="chapterNumber">
                                    </div>
                                    <span class="tile-price">$'. $price . '</span>
                                    <input type="Button" class="Buy" value="Add to Cart">
                    </div>';
                    echo $tile;
        }


        function loadProducts($con){
            try {
                $rows = getProducts($con,'');

                
                
                foreach($rows as $row):
                    createTile($row["name"],$row["image-name"],$row["description"],$row["price"]);
                endforeach;

            } catch (Exception $e) {
                 echo $e->getMessage();
            }
        }

        