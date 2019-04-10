<?php
    namespace Blog;
    class Coments{
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