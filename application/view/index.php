<div class="services w3l wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="container">
        <div class="grid_3 grid_5">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab"
                                                              data-toggle="tab" aria-controls="expeditions"
                                                              aria-expanded="true">FASHION</a></li>
                    <li role="presentation" class=""><a href="#safari" role="tab" id="safari-tab" data-toggle="tab"
                                                        aria-controls="safari">TRAVEL</a></li>
                    <li role="presentation" class=""><a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab"
                                                        aria-controls="trekking">MUSIC</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="expeditions" aria-labelledby="expeditions-tab">

                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="<?php echo URL ?>images/f2.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="<?php echo URL ?>images/f4.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="<?php echo URL ?>images/f3.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="clearfix"></div>
                    </div>


                    <div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="<?php echo URL ?>images/t1.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="<?php echo URL ?>images/t2.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="<?php echo URL ?>images/t3.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade active in" id="trekking" aria-labelledby="trekking-tab">

                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="<?php echo URL ?>images/m2.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="<?php echo URL ?>images/m1.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="col-md-4 col-sm-5 tab-image">
                            <img src="<?php echo URL ?>images/m3.jpg" class="img-responsive" alt="Wanderer">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- technology-left -->
<div class="technology">
    <div class="container">
        <div class="col-md-9 technology-left">
            <div class="tech-no">
                <!-- technology-top -->

                <div class="tc-ch wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">

                    <div class="tch-img">
                        <a href="singlepage.html"><img src="images/blog/<?php echo $travel["image"] ?>"
                                                       class="img-responsive" alt=""></a>
                    </div>

                    <h3><a href="singlepage.html"><?php echo $travel["name_blog"] ?></a></h3>
                    <h6>BY <a href="singlepage.html"><?php echo $travel["username"] ?> </a><?php echo $travel["date"] ?>
                    </h6>
                    <p><?php echo $travel["description"] ?></p>
                    <div class="bht1">
                        <a href="singlepage.html">Continue Reading</a>
                    </div>
                    <div class="soci">
                        <ul>
                            <li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <!-- technology-top -->
                <!-- technology-top -->
                <div class="w3ls">
                    <?php
                    foreach ($music as $music) {
                        ?>
                        <div class="col-md-6 w3ls-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="tc-ch">
                                <div class="tch-img">
                                    <a href="singlepage.html">
                                        <img src="<?php echo URL ?>images/blog/<?php echo $music["image"] ?>"
                                             class="img-responsive" alt=""></a>
                                </div>

                                <h3><a href="singlepage.html"><?php echo $music["name_blog"] ?></a></h3>
                                <h6>BY <a
                                        href="singlepage.html"><?php echo $music["username"] ?> </a><?php echo $music["date"] ?>
                                </h6>
                                <p><?php echo $music["description"] ?></p>
                                <div class="bht1">
                                    <a href="singlepage.html">Read More</a>
                                </div>
                                <div class="soci">
                                    <ul>
                                        <li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
                                        <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="clearfix"></div>
                </div>
                <!-- technology-top -->
                <?php
                foreach ($fashion as $fashion) {
                    ?>
                    <div class="wthree">
                        <div class="col-md-6 wthree-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="tch-img">
                                <a href="singlepage.html"><img src="images/blog/<?php echo $fashion["image"]?>"
                                                               class="img-responsive"
                                                               alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6 wthree-right wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                            <h3><a href="singlepage.html"><?php echo $fashion["name_blog"]?></a></h3>
                            <h6>BY <a href="singlepage.html"><?php echo $fashion["username"]?> </a><?php echo $fashion["date"]?></h6>
                            <p><?php echo $fashion["description"]?></p>
                            <div class="bht1">
                                <a href="singlepage.html">Read More</a>
                            </div>
                            <div class="soci">
                                <ul>

                                    <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
                                    <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <!-- technology-right -->
        <div class="col-md-3 technology-right">


            <div class="blo-top1">

                <div class="tech-btm">
                    <div class="search-1 wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                        <form action="#" method="post">
                            <input type="search" name="Search" value="Search" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Search';}" required="">
                            <input type="submit" value=" ">
                        </form>
                    </div>
                    <h4>Popular Posts </h4>
                    <div class="blog-grids wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="<?php echo URL ?>images/t2.jpg" class="img-responsive"
                                                           alt=""></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog-grids wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="<?php echo URL ?>images/m2.jpg" class="img-responsive"
                                                           alt=""></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog-grids wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="<?php echo URL ?>images/f2.jpg" class="img-responsive"
                                                           alt=""></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog-grids wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="<?php echo URL ?>images/t3.jpg" class="img-responsive"
                                                           alt=""></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog-grids wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="<?php echo URL ?>images/m3.jpg" class="img-responsive"
                                                           alt=""></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="insta wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                        <h4>Instagram</h4>
                        <ul>

                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/t1.jpg"
                                                               class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/m1.jpg"
                                                               class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/f1.jpg"
                                                               class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/m2.jpg"
                                                               class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/f2.jpg"
                                                               class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/t2.jpg"
                                                               class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/f3.jpg"
                                                               class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/t3.jpg"
                                                               class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/m3.jpg"
                                                               class="img-responsive" alt=""></a></li>
                        </ul>
                    </div>

                    <p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at
                        pro</p>
                    <div class="twt">

                        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true"
                                class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button"
                                title="Twitter Tweet Button"
                                src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag"
                                style="position: static; visibility: visible; width: 166px; height: 28px;"
                                data-hashtag="TwitterStories"></iframe>
                        <script>!function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = p + '://platform.twitter.com/widgets.js';
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, 'script', 'twitter-wjs');</script>
                    </div>
                </div>


            </div>


        </div>
        <div class="clearfix"></div>
        <!-- technology-right -->
    </div>
</div>