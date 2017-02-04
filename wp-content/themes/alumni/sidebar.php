<div class="sidebar">
   <aside>
       <table>
       	<thead>
       		<tr>
       			<td>年別記録</td>
       		</tr>
       	</thead>
       	<tbody>
       		<tr>
       			<td class="yearly_list">
       			   <?php
                  $args = array(
                  	'type'            => 'yearly',
                  	'limit'           => '40',
                  	'format'          => 'html', 
                  	'before'          => '',
                  	'after'           => '',
                  	'show_post_count' => 1,
                  	'echo'            => 1,
                  	'order'           => 'DESC',
                  );
                  wp_get_archives( $args );
                ?>
       			</td>
       		</tr>
       	</tbody>
       </table>
   </aside>
</div>