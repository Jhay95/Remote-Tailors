<div class="filter">
    <nav class="navbar navbar-expand-sm justify-content-around">
        <form>
            <label for="city" class="form-label">City: </label>
            <select id="city" class="form-select">
                <option selected>Choose...</option>
                <!---Get list of city from database---->
                <option>...</option>
            </select>
        </form>

        <form>
            <label for="style" class="form-label">Style: </label>
            <select id="style" class="form-select">
                <option selected>Choose...</option>
                <option>English</option>
                <option>Native</option>
                <option>Casual</option>
            </select>
        </form>

        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary" type="submit">Search</button>
        </form>
    </nav>
</div>