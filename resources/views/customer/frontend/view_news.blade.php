@extends('customer.layouts.main')
@section('title')
    News
@endsection
@section('content')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
        document.getElementById("item_menu4").classList.add('current');
    </script>
<div class="NewsListContainer DefaultModule ListItems" style="width: 1170px; margin: 40px auto">
                	<div class="newsCategory defaultTitle">
                    	<h5>Tin tức</h5>
                    </div>

                    <!-- --------------------------- -->
                    <div class="defaultContent newsList">
                        <?php foreach ($arr as $rows) {
                         ?>
                    	<table class="newsList_Item" cellpadding="0" cellspacing="0">
                        	<tr>
                            <td class="newsList_Image">
                            <a href="#">
                            <img style="width: 120px;" src="{{ URL::asset('news/'.$rows->c_img) }}"/>
                            </a>
                            </td>
                            <td class="newsList_Content">
                            <div>
                            <a class="newsList_Title" href="{{ URL::asset('customer/news/detail/'.$rows->news_id) }}"><?php echo $rows->c_name ?></a>
                            <span class="newsList_Date" >(<?php echo $rows->c_date ?>)</span>
                            </div>
                            <div>
                            <span class="newsList_Summary"> <?php echo $rows->c_content ?></span>
                            <span class="newsList_LinkDetail"></span>
                            </div>
                            </td>
                            </tr>
                        </table>
                        <div class="newsList_Seperator" ></div>
                        <!--<hr class="newsList_Seperator"/>-->
                        <!-- 2 -->
                        <?php } ?>
                        <!--<hr class="newsList_Seperator" />-->
                        <div>
                            {{ $arr->links() }}
                        </div>
                    </div>

                    <!-- --------------------------- -->
                    <div class="clear defaultFooter newsList-footer"></div>
                    <div class="clear"></div>
                </div>
    @endsection
