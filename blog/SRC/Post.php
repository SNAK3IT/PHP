<?php
    namespace Blog;
    class Post{
        var $id;
        var $title;
        var $body;

        function FormatPost(array $row): void 
        {
            $this->id = $row['id'];
            $this->title = $row['title'];
            $this->body = $row['body'];
        }
    }
?>