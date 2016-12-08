<?php
//var_dump($totalPage);
//exit();
//?>
<div class="technology">
    <div class="container">
        <div class="col-md-9 technology-left">
            <div class="blog">

                <h2 class="w3">TRAVEL</h2>
                <div class="blog-grids1">
                    <?php
                    foreach ($travel as $travel) {
                        ?>
                        <div class="col-md-6 blog-grid">
                            <div class="blog-grid-left1">
                                <a href="singlepage.html"><img src="<?php echo URL ?>images/blog/<?php echo $travel["image"] ?>" alt=" "
                                                               class="img-responsive"></a>
                            </div>
                            <div class="blog-grid-right1">
                                <a href="singlepage.html"><?php echo $travel["name_blog"] ?></a>
                                <h4><?php echo $travel["date"] ?></h4>
                                <p><?php echo $travel["description"] ?></p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="more m1">
                                <a class="btn effect6" href="singlepage.html">Đọc tiếp</a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="clearfix"></div>
                </div>
                <nav class="paging">
                    <ul class="pagination pagination-lg">
                        <li><a href="#" aria-label="Previous"><span aria-hidden="true"><<</span></a></li>
                        <?php
                        for ($i = 1; $i <= $totalPage; $i++) {
                            ?>
                            <li><a href="#"><?php echo $i ?></a></li>
                            <?php
                        }
                        ?>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">>></span></a></li>
                    </ul>
                </nav>

            </div>
        </div>
        <!-- technology-right -->
        <div class="col-md-3 technology-right">


            <div class="blo-top1">

                <div class="tech-btm">
                    <div class="search-1">
                        <form action="#" method="post">
                            <input type="search" name="Search" value="Search" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Search';}" required="">
                            <input type="submit" value=" ">
                        </form>
                    </div>
                    <h4>Popular Posts </h4>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="<?php echo URL ?>images/t2.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="<?php echo URL ?>images/m2.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="<?php echo URL ?>images/f2.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="<?php echo URL ?>images/t3.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="<?php echo URL ?>images/m3.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="insta">
                        <h4>Instagram</h4>
                        <ul>

                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/t1.jpg" class="img-responsive" alt=""></a>
                            </li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/m1.jpg" class="img-responsive" alt=""></a>
                            </li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/f1.jpg" class="img-responsive" alt=""></a>
                            </li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/m2.jpg" class="img-responsive" alt=""></a>
                            </li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/f2.jpg" class="img-responsive" alt=""></a>
                            </li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/t2.jpg" class="img-responsive" alt=""></a>
                            </li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/f3.jpg" class="img-responsive" alt=""></a>
                            </li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/t3.jpg" class="img-responsive" alt=""></a>
                            </li>
                            <li><a href="singlepage.html"><img src="<?php echo URL ?>images/m3.jpg" class="img-responsive" alt=""></a>
                            </li>
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