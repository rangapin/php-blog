<?php include 'partials/header.php'; ?>

    <section class="form__section">
        <div class="container form__section-container">
            <h2>Add Post</h2>
            <div class="alert__message error">
                <p>This is an error</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="Title">
                <select>
                    <option value="1">Sport</option>
                    <option value="1">Art</option>
                    <option value="1">Travel</option>
                    <option value="1">Mechanics</option>
                    <option value="1">Freediving</option>
                    <option value="1">Yoga</option>
                    <option value="1">Random stuff</option>
                </select>
                <textarea placeholder="Body" rows="10"></textarea>
                <div class="form__control inline">
                    <input type="checkbox" id="is_featured" checked>
                    <label for="is_featured">Featured?</label>
                </div>
                <div class="form__control">
                    <label for="thumbnail">Add thumbnail</label>
                    <input type="file" id="thumbnail">
                </div>
                <button class="btn" type="submit">Add Post</button>
            </form>
        </div>
    </section>

<?php include '../partials/footer.php'; ?>