<?php 
require_once 'header.php'; 

function categorie($family, $id, $decription, $srcimg){
    $element = "
            <div class=\"product\">
                <div class=\"images\">
                    <img src=\"$srcimg\" alt=\"\">
                    <form action=\"products.php?action=more&family=$family\" method=\"post\">
                        <div class=\"content\">
                            <h2>$id</h2>
                            <h3>$family</h3>
                            <p>$decription</p>
                            <button href=\"products.php\" name='more'>Read More</button>
                            <input type='hidden' name='genre' value='$family'>
                        </div>
                    </form>
                </div>
            </div>   
    ";
    echo $element;
}

function component($productid, $cpu, $ram, $stockage, $display, $communication, $os, $keyboard, $name, $oldprice, $price, $srcimg){
    $elements = "
            <div class=\"swiper-slide\">
            <div class=\"asusProduct\">
                <div class=\"layer\"></div>
                <div class=\"content\">
                <li><span>CPU</span> : $cpu</li>
                <li><span>RAM</span> : $ram</li>
                <li><span>Storage</span> : $stockage</li>
                <li><span>Display</span> : $display</li>
                <li><span>Communication</span> : $communication</li>
                <li><span>OS</span> : $os</li>
                <li><span>Keyboard</span> : $keyboard</li>
                <div class=\"imgBx\">
                    <img src=\"$srcimg\" alt=\"\">
                </div>
                <div class=\"details\">
                    <h2>$name</h2>
                    <h2> <small><s> $oldprice Dh</s></small>  <span> $price</span> Dh</h2>
                    <form action=\"products.php\" method=\"post\">
                    <div class=\"addcart\">
                        <button type=\"submit\" name=\"add\">Add to carte <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></button>
                        <input type='hidden' name='product_id' value='$productid'>
                    </div>
                    </form>
                </div>
                </div>  
            </div>
        </div>
    ";
    echo $elements;
}

function cartElement($name_product, $price_product, $productid, $src_img){
    $element = "
            <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                <div class=\"border\">
                    <div class=\"holcontent\">
                        <div class=\"imgpanier\">
                            <img src=\"$src_img\" alt=\"Image1\">
                        </div>
                        <div class=\"informat\">
                            <h4 >$name_product</h4>
                            <small class=\"seller\">Seller: inconnu</small>
                            <h5 class=\"pt-2\">$price_product DH</h5>
                            <div class=\"butn\">
                                <button type=\"submit\" class=\"warning\">Save for Later</button>
                                <button type=\"submit\" class=\"danger\" name=\"remove\">Remove</button>
                            </div>
                        </div>
                        <div class=\"addmore\">
                                <button type=\"button\" class=\"moins\"><i class=\"fa fa-minus\"></i></button>
                                <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inlin\">
                                <button type=\"button\" class=\"plus\"><i class=\"fa fa-plus\"></i></button>
                        </div>
                    </div>
                </div>
            </form>
    ";
    echo $element;
}