<?php 
    session_start();
    include_once(ROOT_PATH . "/db.php");

    class Post{
        protected $post_id;
        protected $user_id;
        protected $post_title;
        protected $post_content;
        protected $date_created;
        public $errors = [];
        public $conn;
    
    
        public function __construct($conn)
        {
            $this->conn = $conn;
        }
    
        public function getPostID(){
            return $this->post_id;
        }
    
        public function getUserID(){
            return $this->user_id;
        }
    
        public function getPostTitle(){
            return $this->post_title;
        }
    
        public function getPostContent(){
            return $this->post_content;
        }
    
        public function getPostDate(){
            return $this->date_created;
        }
    
        public function getPost($id){
          $this->post_id = $id;
          $sql = "SELECT * FROM posts,users WHERE posts.post_id = ? AND posts.user_id = users.user_id";
          $stmt = $this->conn->prepare($sql);
          $stmt->bind_param("i", $this->post_id);
          $stmt->execute();
          $result = $stmt->get_result();
          return $result->fetch_assoc();
        }
        public function countPost($user_id){
            $this->user_id = $user_id;
            $sql = "SELECT COUNT(post_id) as id FROM posts WHERE user_id = ? GROUP BY user_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $this->user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }

        public function getPosts($page){
            $limit = 5;
            $start = ($page - 1) * $limit;
            $sql = "SELECT * FROM posts,users WHERE posts.user_id = users.user_id ORDER BY posts.date_created DESC LIMIT $start, $limit";
            $stmt = $this->conn->query($sql);
            if($stmt->num_rows >= 1) {
              return $stmt->fetch_all(MYSQLI_ASSOC);
            }
        }

        public function getPostsUser(){
            $sql = "SELECT * FROM posts,users WHERE posts.user_id = users.user_id ORDER BY posts.date_created DESC";
            $stmt = $this->conn->query($sql);
            if($stmt->num_rows >= 1) {
              return $stmt->fetch_all(MYSQLI_ASSOC);
            }
        }
        
        public function getPages(){
            $limit = 5;
            $sql = "SELECT count(post_id) AS post_id FROM posts";
            $stmt = $this->conn->query($sql);
            if($stmt->num_rows >= 1){
                $postCount =  $stmt->fetch_all(MYSQLI_ASSOC);
                $total = $postCount[0]['post_id'];
                return ceil($total/ $limit);
            }
        }

        public function checkNewPost($user_id,$post_title, $post_content){
            $this->user_id = $user_id;
            $this->post_title = $post_title;
            $this->post_content = $post_content;
            if(strlen($this->post_title) < 10 || strlen($this->post_title) > 30){
                $this->errors['post-title'] = "Your title must be between 10 words and 30 words";
            }
            if(strlen($this->post_content) < 10){
                $this->errors['post-content'] = "Your content must longer than 20 words";
            }
            if(empty($this->errors)){
                $this->createPost();
            }
        }
    
        public function createPost(){
            $sql = "INSERT INTO posts (user_id, title, content) VALUES (?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("iss", $this->user_id, $this->post_title, $this->post_content);
            $stmt->execute();
            if($stmt->affected_rows == 1){
                header("Location: posts.php?success");
            }
            else{
                header("Location: posts.php?error");
            }
        }
    
        public function deletePost($id){
            $this->getPost($id);
            $sql = "DELETE FROM posts,users WHERE posts.post_id = ? AND posts.user_id = users.user_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $this->post_id);
            $stmt->execute();
            if($stmt->affected_rows == 1) {
            header("Location: posts.php?delete");
            }else{
                header("Location: posts.php?error");
            }
        }
    }

    class Comment extends Post{
        protected $comment_content;

        public function createComment($content, $post_id){
            $this->getPost($post_id);
            $this->comment_content = $content;
            $sql = "INSERT INTO comments (user_id, post_id, content) VALUES (?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("iis", $this->user_id, $this->post_id, $this->comment_content);
            $stmt->execute();
            if($stmt->affected_rows == 1){
                header("Location: detail.php");
            }
        }
    }
    ?>