<?php include 'partials/header.php'; ?>

    <section class="form__section">
        <div class="container form__section-container">
            <h2>Add Category</h2>
            <div class="alert__message error">
                <p>This is an error</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="Title">
                <textarea placeholder="Description" rows="4"></textarea>
                <button class="btn" type="submit">Add Category</button>
            </form>
        </div>
    </section>

<?php include '../partials/footer.php'; ?>