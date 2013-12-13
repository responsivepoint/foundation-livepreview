<nav class="top-bar" data-topbar>
    <ul class="title-area">
        <li class="name">
            <h1><a href="#">Foundation</a></h1>
        </li>
    </ul>

    <section class="top-bar-section">
        <ul>

            <?php

    foreach( get_categories('hide_empty=1','order_by=name') as $cat ) :
    if( !$cat->parent ) { ?>
            <li class="left has-dropdown">
                <a href="#"><? echo $cat->name?></a>
                <ul class="dropdown">
                    <?php process_cat_tree( $cat->term_id );
                    }
                    endforeach;

                    wp_reset_query(); //to reset all trouble done to the original query
                    function process_cat_tree( $cat ) {

                    $args = array('category__in' => array( $cat ), 'numberposts' => -1, 'orderby' => title, 'order' =>
                    ASC);
                    $cat_posts = get_posts( $args );

                    if( $cat_posts ) :
                    foreach( $cat_posts as $post ) :
                    echo '
                    <li>';
                        echo '<a href="' . get_permalink( $post->ID ) . '">' . $post->post_title . '</a>';
                        echo '
                    </li>
                    ';
                    endforeach;
                    endif;

                    $next = get_categories('hide_empty=0&parent=' . $cat);

                    if( $next ) :
                    foreach( $next as $cat ) :
                    echo '
                    <ul>
                        <li>a' . $cat->name . '</li>
                        ';
                        process_cat_tree( $cat->term_id );
                        endforeach;
                        endif;

                        echo '
                    </ul>
                    ';
                    } ?>
                </ul>


        </ul>
    </section>


</nav>



