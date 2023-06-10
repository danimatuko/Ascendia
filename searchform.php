<form class="field has-addons" action="<?php esc_url(home_url("/")) ?>">
    <div class="control">
        <input class="input" name="s" type="search" placeholder="Search..."
            value="<?php esc_attr(get_search_query()) ?>">
    </div>
    <div class="control">
        <button type="submit" class="button is-dark">
            Search
        </button>
    </div>
</form>