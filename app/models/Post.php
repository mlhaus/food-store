<?php
class Post {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    /* Example usage in a view
        <ul>
            <?php foreach($data["posts"] as $post): ?>
                <li><?php echo $post->title; ?></li>
            <?php endforeach; ?>
        </ul>
     */
    public function getPosts() {
        $this->db->query("SELECT * FROM posts");
        return $this->db->resultSet();
    }

    /* Example usage in a view
        <?php
            $post = $data["post"];
            echo "<p>" . $post->title . "</p>";
        ?>
     */
    public function getPost($post_id) {
        $this->db->query("SELECT * FROM posts WHERE post_id = :post_id");
        $this->db->bind("post_id", $post_id);
        return $this->db->single();
    }

    /* Example usage in a view
        <?php
            $postCount = $data["postCount"];
            echo "<p>Post count: $postCount</p>";
        ?>
     */
    public function getPostCount() {
        $this->db->query("SELECT count(*) FROM posts");
        return $this->db->rowCount();
    }

}