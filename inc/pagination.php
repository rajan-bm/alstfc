<?php

/**
 * 
 * Pagination
 * 
 */

function mypagination($pages = '', $range = 1)
{
    // $showitems = ($range * 2)+1;  
    $showitems = ($range) + 1;

    global $paged;
    if (empty($paged)) $paged = 1;

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $pages) {
        $links[] = $paged + 2; // Upcoming
        $links[] = $paged + 1; // Next
    }

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo "<ul class=\"pagination__list\">";

        // if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='mx-2'><a href='".get_pagenum_link(1)."'><i class=\"fa fa-angle-double-left\"></i></a></li>";

        if ($paged > 1 && $showitems < $pages) echo '<li class="pagination__item -prev"><a href="' . get_pagenum_link($paged - 1) . '" class="prev"><svg xmlns="http://www.w3.org/2000/svg" width="13.658" height="11.39" viewBox="0 0 13.658 11.39"><g id="Group_283" data-name="Group 283" transform="translate(13.658 11.39) rotate(180)"><path id="Path_260" data-name="Path 260" d="M0,.421A.512.512,0,0,1,.554,0c.784.008,1.568.006,2.352,0a.563.563,0,0,1,.485.258Q5.259,2.768,7.134,5.269a.618.618,0,0,1,0,.851q-1.872,2.5-3.742,5.011a.563.563,0,0,1-.485.258c-.784-.006-1.568-.008-2.352,0A.512.512,0,0,1,0,10.968v-.212a3.117,3.117,0,0,1,.195-.345q1.7-2.276,3.4-4.547c.041-.055.081-.111.125-.171L3.6,5.536Q1.892,3.252.187.966A2.93,2.93,0,0,1,0,.633V.421" transform="translate(0 0)" fill="#2f2f2f" /><path id="Path_261" data-name="Path 261" d="M169.826,5.747l-.66-.885q-1.451-1.943-2.9-3.886a.575.575,0,0,1,.02-.8.5.5,0,0,1,.3-.114c.83-.009,1.661,0,2.491-.005a.466.466,0,0,1,.387.211q1.9,2.546,3.8,5.091a.6.6,0,0,1,0,.782q-1.9,2.546-3.8,5.09a.475.475,0,0,1-.4.211H166.6a.44.44,0,0,1-.449-.314.612.612,0,0,1,.113-.609q1.68-2.245,3.358-4.493l.206-.277" transform="translate(-159.756 -0.052)" fill="#2f2f2f" /></g></svg></a></li>';

        if (!in_array(1, $links)) {
            $class = 1 == $paged ? ' class="-active"' : '';

            printf('<li%s class="pagination__item"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

            if (!in_array(2, $links))
                echo '<li class="pagination__item--dots"><a>・・・</a></li>';
        }

        // for ($i=1; $i <= $pages; $i++)
        // {
        // 	if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
        // 	{
        // 		echo ($paged == $i)? "<li class=\"pagination__item -active\"><a>".$i."</a></li>":"<li class='pagination__item'><a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a></li>";
        // 	}
        // }

        sort($links);
        foreach ((array) $links as $link) {
            $class = $paged == $link ? ' class="pagination__item -active"' : '';
            printf('<li%s class="pagination__item"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
        }

        /** Link to last page, plus ellipses if necessary */
        if (!in_array($pages, $links)) {
            if (!in_array($pages - 1, $links))
                echo '<li class="pagination__item--dots"><a>・・・</a></li>' . "\n";

            $class = $paged == $pages ? ' class="-active"' : '';
            printf('<li%s class="pagination__item"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($pages)), $pages);
        }

        if ($paged < $pages && $showitems < $pages) echo '<li class="pagination__item -next"><a href="' . get_pagenum_link($paged + 1) . '" class="next"><svg id="Group_251" data-name="Group 251" xmlns="http://www.w3.org/2000/svg" width="13.658" height="11.39" viewBox="0 0 13.658 11.39"><path id="Path_260" data-name="Path 260" d="M0,.421A.512.512,0,0,1,.554,0c.784.008,1.568.006,2.352,0a.563.563,0,0,1,.485.258Q5.259,2.768,7.134,5.269a.618.618,0,0,1,0,.851q-1.872,2.5-3.742,5.011a.563.563,0,0,1-.485.258c-.784-.006-1.568-.008-2.352,0A.512.512,0,0,1,0,10.968v-.212a3.117,3.117,0,0,1,.195-.345q1.7-2.276,3.4-4.547c.041-.055.081-.111.125-.171L3.6,5.536Q1.892,3.252.187.966A2.93,2.93,0,0,1,0,.633V.421" transform="translate(0 0)" fill="#2f2f2f" /><path id="Path_261" data-name="Path 261" d="M169.826,5.747l-.66-.885q-1.451-1.943-2.9-3.886a.575.575,0,0,1,.02-.8.5.5,0,0,1,.3-.114c.83-.009,1.661,0,2.491-.005a.466.466,0,0,1,.387.211q1.9,2.546,3.8,5.091a.6.6,0,0,1,0,.782q-1.9,2.546-3.8,5.09a.475.475,0,0,1-.4.211H166.6a.44.44,0,0,1-.449-.314.612.612,0,0,1,.113-.609q1.68-2.245,3.358-4.493l.206-.277" transform="translate(-159.756 -0.052)" fill="#2f2f2f" /></svg></a></li>';

        // if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class='mx-2'><a class='block bg-primary text-white flex justify-center items-center p-2 rounded border-primary border h-10 w-10 hover:bg-white hover:text-primary no-underline' href='".get_pagenum_link($pages)."'><i class=\"fa fa-angle-double-right\"></i></a></li>";

        echo "</ul>\n";
    }
}