<div id="cate-menu" class="DefaultModule cate-menu filter-menu">
              	<div class="defaultTitle cate-menu-title filter-title">
                	<span>Bộ lọc</span>
                </div>
                <div class="defaultContent cate-menu-content filter-content">
                	<ul>
                    	<li class="leve10 content-first">
                        	<a href="#"><span style="font-weight:bold;">Khoảng giá</span></a>
                            <ul>
                            	<li class="leve11 first">
                                	<a class="feature-name" href="filter/pr=lv1">
                                    	Dưới 500,000 VND
                                        <span>(<?php
                                            use Illuminate\Support\Facades\DB;
                                            $sl = DB::table('product')->where('c_pricenew', '<', 500000)->count();
                                            echo $sl;
                                         ?>)</span>
                                    </a>

                                    <div class="clear"></div>
                                </li>
                                <li class="leve11">
                                	<a class="feature-name" href="filter/pr=lv2">
                                    	 500 ngàn - 1 triệu VND
										 <span>(<?php
                                             $sl = DB::table('product')->where('c_pricenew', '>=', 500000)
                                                 ->where('c_pricenew', '<=', 1000000)->count();
                                            echo $sl;
                                         ?>)</span>
                                    </a>

                                    <div class="clear"></div>
                                </li>
                                <li class="leve11">
                                	<a class="feature-name" href="filter/pr=lv3">
                                    	  1 triệu - 2 triệu VND
										  <span>(<?php
                                              $sl = DB::table('product')->where('c_pricenew', '>', 1000000)
                                                  ->where('c_pricenew', '<=', 2000000)->count();
                                            echo $sl;
                                         ?>)</span>
                                    </a>

                                    <div class="clear"></div>
                                </li>
                                <li class="leve11">
                                	<a class="feature-name" href="filter/pr=lv4">
                                    	  2 triệu - 5 triệu
										  <span>(<?php
                                              $sl = DB::table('product')->where('c_pricenew', '>', 2000000)
                                                  ->where('c_pricenew', '<=', 5000000)->count();
                                            echo $sl;
                                         ?>)</span>
                                    </a>

                                    <div class="clear"></div>
                                </li>
                                <li class="leve11">
                                	<a class="feature-name" href="filter/pr=lv5">
                                    	  5 triệu - 10 triệu VND
										  <span>(<?php
                                              $sl = DB::table('product')->where('c_pricenew', '>', 5000000)
                                                  ->where('c_pricenew', '<=', 10000000)->count();
                                            echo $sl;
                                         ?>)</span>
                                    </a>

                                    <div class="clear"></div>
                                </li>
                                <li class="leve11">
                                	<a class="feature-name" href="filter/pr=lv6">
                                    	  trên 10,000,000 VND
										  <span>(<?php
                                              $sl = DB::table('product')->where('c_pricenew', '>=', 10000000)
                                                  ->count();
                                            echo $sl;
                                         ?>)</span>
                                    </a>

                                    <div class="clear"></div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="defaultFooter cate-menu-footer filter-footer"></div>
              </div>
