<?php

$lcp_display_output = '';

$lcp_row_count = 0;

$lcp_display_output .= "<div class='row testimonials'>";

foreach ($this->catlist->get_categories_posts() as $single):
  //Start a List Item for each post:
  $lcp_display_output .= "<div class='col-sm-4'>";

  //Show the title and link to the post:

  $lcp_display_output .= $this->get_content($single, 'p');

  $lcp_display_output .= '<h4>-'.$single->post_title.'</h4>';

  //Close li tag
  $lcp_display_output .= '</div>';
        
  if (++$lcp_row_count==3) {
    $lcp_row_count = 0;
    $lcp_display_output .= "</div><div class='row testimonials newline'>";
  }

endforeach;

$lcp_display_output .= "</div>";

$this->lcp_output = $lcp_display_output;
