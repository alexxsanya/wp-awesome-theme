<form class="form-inline my-2 my-lg-0" method='get' action='./'>
    <input class="form-control mr-sm-2" type="search" 
        value="<?php the_search_query(); ?>" name='s'
        placeholder="Search" aria-label="Search" required>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>