<?php include 'partials/header.php'; ?>

    <section class="dashboard">
        <div class="container dashboard__container">

            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>

            <aside>
                <ul>
                    <li>
                        <a href="add-post.php"><i class="uil uil-pen"></i>
                            <h5>Add Post</h5></i>
                        </a>
                    </li>
                    <li>
                        <a href="manage-post.php"><i class="uil uil-postcard"></i>
                            <h5>Manage Posts</h5></i>
                        </a>
                    </li>
                    <li>
                        <a href="add-user.php"><i class="uil uil-user-plus"></i>
                            <h5>Add User</h5></i>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.php" class="active"><i class="uil uil-users-alt"></i>
                            <h5>Manage Users</h5></i>
                        </a>
                    </li>
                    <li>
                        <a href="add-category.php"><i class="uil uil-edit"></i>
                            <h5>Add Category</h5></i>
                        </a>
                    </li>
                    <li>
                        <a href="manage-categories.php"><i class="uil uil-list-ul"></i>
                            <h5>Manage Categories</h5></i>
                        </a>
                    </li>
                </ul>
            </aside>

            <main>
                <h2> Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monh Die</td>
                            <td>Hard</td>
                            <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Danny Dan</td>
                            <td>Yeah</td>
                            <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Jacky Chan</td>
                            <td>Hard</td>
                            <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>No</td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </section>

<?php include '../partials/footer.php'; ?>