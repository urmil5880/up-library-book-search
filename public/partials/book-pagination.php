<?php
/**
 * Book List Pagination HTML
 * Book Details HTML
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://profiles.wordpress.org/urmilwp
 * @since      1.0.0
 *
 * @package    Library_Book_Search_Plugin
 * @subpackage Library_Book_Search_Plugin/public/partials
 */

?>
<tr>
	<td colspan="6" class="book-pagination">
		<?php
		$big_range = 999999999;
		$paginate  = paginate_links(
			array(
				'base'    => str_replace( $big_range, '%#%', '%#%' ),
				'format'  => '%#%',
				'current' => max( 1, $paged ),
				'total'   => $book_lists->max_num_pages,
			)
		);

		echo wp_kses_post( $paginate );
		?>
	</td>
</tr>
