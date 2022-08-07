<?php
include_once("templates/header.php");
if(isset($_GET['id'])){
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
}
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title">
                <?= $currentPost['title'] ?>
            </h1>
            <p id="post-description">
                <?= $currentPost['description'] ?>
            </p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum sapiente hic doloremque minima exercitationem ut facilis. Maxime quaerat modi fuga iusto repellendus harum ab quisquam numquam, vel est, possimus fugit?
                Tenetur eius repellat, ullam nemo at quo a incidunt? Magni eligendi, repellendus optio error id fuga dicta. Velit necessitatibus nihil laudantium aut in magnam architecto recusandae reiciendis, possimus nam. Quis.
                Odit adipisci voluptatibus esse consequuntur, ut neque repudiandae optio maiores. Qui, laborum! Consequatur eos quo ex velit incidunt, quia expedita non quam ab earum fuga debitis voluptatum dolorum, quas magnam.
                Ut deserunt inventore quidem quo tenetur, ea autem. Labore quo, accusantium excepturi quaerat, natus soluta quasi culpa eos, at illo aperiam a. Rerum nisi accusamus molestiae fuga error ea dolor!
                Odit, qui provident. Adipisci recusandae perspiciatis eveniet expedita cum nesciunt, sint exercitationem necessitatibus reprehenderit architecto autem quas nulla alias animi nam ex fugit quia impedit dignissimos eligendi, reiciendis ipsa laudantium!
            </p>
            <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum sapiente hic doloremque minima exercitationem ut facilis. Maxime quaerat modi fuga iusto repellendus harum ab quisquam numquam, vel est, possimus fugit?
                Tenetur eius repellat, ullam nemo at quo a incidunt? Magni eligendi, repellendus optio error id fuga dicta. Velit necessitatibus nihil laudantium aut in magnam architecto recusandae reiciendis, possimus nam. Quis.
                Odit adipisci voluptatibus esse consequuntur, ut neque repudiandae optio maiores. Qui, laborum! Consequatur eos quo ex velit incidunt, quia expedita non quam ab earum fuga debitis voluptatum dolorum, quas magnam.
                Ut deserunt inventore quidem quo tenetur, ea autem. Labore quo, accusantium excepturi quaerat, natus soluta quasi culpa eos, at illo aperiam a. Rerum nisi accusamus molestiae fuga error ea dolor!
                Odit, qui provident. Adipisci recusandae perspiciatis eveniet expedita cum nesciunt, sint exercitationem necessitatibus reprehenderit architecto autem quas nulla alias animi nam ex fugit quia impedit dignissimos eligendi, reiciendis ipsa laudantium!
            </p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag):?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category):?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach?>
            </ul>
        </aside>
    </main>
<?php
include_once("templates/footer.php");
?>