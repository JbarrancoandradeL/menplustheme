<?php
/*
Template Name: Search Page
*/
?>

<form action="<?php echo home_url(); ?>" method="get">

    <div class="input-inside">
        <input type="text"  name="s" id="s" value="<?php the_search_query(); ?>"  placeholder="Busca un producto aquí">
        <button type="submit"  class="submit-btn"><i class="fal fa-search"></i></button>
    </div> 
</form>


