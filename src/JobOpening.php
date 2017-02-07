<?php
    class JobOpening
    {
        private $title;
        private $description;

        function __construct($title, $description){
            $this->title = $title;
            $this->description = $description;
        }

        function setTitle($new_title) {
            $this->title = $new_title;
        }

        function setDescription($new_description){
            $this->description = $new_description;
        }

        function getTitle() {
            return $this->title;
        }

        function getDescription() {
            return $this->description;
        }


    }



?>
