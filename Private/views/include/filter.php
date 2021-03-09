<div class="filter">
    <nav class="navbar navbar-expand-sm justify-content-around">
        <form>
            <label for="city" class="form-label">City: .<a href="<?= URL_ROOT ?>tailors/city"></a></label>
            <select id="city" class="form-select">
               <!---Get list of city from database---->
                <?php foreach($data['city'] as $city): ?>
                <option><?php echo $city;?>></option>
                <?php endforeach;?>
            </select>
        </form>

        <form>
            <label for="style" class="form-label">Style: </label>
            <select id="style" class="form-select">
                <option>English</option>
                <option>Native</option>
                <option>Casual</option>
            </select>
        </form>

        <form class="form-inline" action="<?= URL_ROOT ?>tailors/search">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary" type="submit">Search</button>
        </form>
    </nav>
</div>