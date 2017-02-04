<div class="sidebar">
   <aside>
       <table>
       	<thead>
       		<tr>
       			<td>カテゴリー</td>
       		</tr>
       	</thead>
       	<tbody>
       		<tr>
       			<td>
   			         <ul>
                         <?php 
                        $args = array(
                    	'show_option_all'    => '',
                    	'orderby'            => 'count',
                    	'order'              => 'DESC',
                    	'style'              => 'list',
                    	'show_count'         => 1,
                    	'hide_empty'         => 1,
                    	'use_desc_for_title' => 0,
                    	'child_of'           => 3,
                    	'feed'               => '',
                    	'feed_type'          => '',
                    	'feed_image'         => '',
                    	'exclude'            => '',
                    	'exclude_tree'       => '',
                    	'include'            => '41',
                    	'hierarchical'       => 1,
                    // 	'title_li'           => '<h5>' . __('カテゴリ一覧') . '</h5>',
                    	'show_option_none'   => __( '' ),
                    	'number'             => null,
                    	'echo'               => 1,
                    	'depth'              => 2,
                    	'current_category'   => 0,
                    	'pad_counts'         => 0,
                    	'taxonomy'           => 'topic',
                    	'walker'             => null
                        );
                      wp_list_categories( $args ); 
                    ?>
                    </ul>
       			</td>
       		</tr>
       	</tbody>
       </table>
   </aside>
</div>