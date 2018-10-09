<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Buscar...', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Buscar:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit"
        value="<?php echo esc_attr_x( 'Buscar', 'submit button' ) ?>" />
</form>