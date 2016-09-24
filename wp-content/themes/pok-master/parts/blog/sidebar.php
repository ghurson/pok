<div class="blog-rail">
    <div class="blog-rail__section medium-text-left">
        <h3>Search</h3>

        <form action="<?php print site_url() ?>" class="pok-search">
            <label>Enter Search Criteria</label>

            <div class="input-group">
                <input class="input-group-field" type="text" name="s">

                <div class="input-group-button">
                    <a href="#" class="submit-form">
                        <svg version="1.1" id="Magnifying_glass" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20"
                             enable-background="new 0 0 20 20" xml:space="preserve">
                        <path d="M17.545,15.467l-3.779-3.779c0.57-0.935,0.898-2.035,0.898-3.21c0-3.417-2.961-6.377-6.378-6.377
                        	C4.869,2.1,2.1,4.87,2.1,8.287c0,3.416,2.961,6.377,6.377,6.377c1.137,0,2.2-0.309,3.115-0.844l3.799,3.801
                        	c0.372,0.371,0.975,0.371,1.346,0l0.943-0.943C18.051,16.307,17.916,15.838,17.545,15.467z M4.004,8.287
                        	c0-2.366,1.917-4.283,4.282-4.283c2.366,0,4.474,2.107,4.474,4.474c0,2.365-1.918,4.283-4.283,4.283
                        	C6.111,12.76,4.004,10.652,4.004,8.287z"></path>
                        </svg>

                    </a>
                </div>
            </div>
        </form>
    </div>

    <div class="blog-rail__section medium-text-left">
        <h3>Archive</h3>

        <form>
            <label>Select a Month</label>
            <select>
                <option value="#"> -- Select A Month -- </option>
                <?php print wp_get_archives([
                    'format' => 'option'
                ]) ?>
            </select>
        </form>
    </div>

    <div class="blog-rail__section medium-text-left">
        <h3>Topics</h3>
        <?php print get_the_category_list() ?>
    </div>
</div>